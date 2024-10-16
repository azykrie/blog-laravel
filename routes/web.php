<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BlogDashboardController;


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class,'store']);

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('user', UserController::class);
Route::resource('blog-dashboard', BlogDashboardController::class);
Route::resource('category', CategoryController::class);

Route::get('/blog', [BlogController::class, 'index'])->name('blog');