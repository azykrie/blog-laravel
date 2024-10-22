<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogDashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Middleware\RolesMiddleware;



Route::group(['middleware' => 'guest'], function () {
    Route::get('/', function () {
        return redirect('login');
    });
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);
});


Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');


Route::group(['middleware' => RolesMiddleware::class . ':admin'], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('user', UserController::class);
    Route::resource('blog-dashboard', BlogDashboardController::class);
    Route::resource('category', CategoryController::class);
});


Route::group(['middleware' => RolesMiddleware::class . ':user'], function () {
    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog-show');
});

