<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $totalUser = User::count();
        $totalPost = Blog::count();
        return view('dashboard.index', compact('totalUser', 'totalPost'));
    }
}
