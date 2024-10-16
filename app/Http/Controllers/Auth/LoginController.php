<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
            $request->session()->regenerate();

            if ($user->role === 'admin') {
                return redirect()->route('dashboard');
            } else {
                return redirect()->route('blog');
            }
        }
    
        $request->session()->flash('error', 'Invalid credentials. Please try again.');
        return redirect()->back()->withInput($request->only('email'));
    }

    public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    return redirect('/login');
}
}
