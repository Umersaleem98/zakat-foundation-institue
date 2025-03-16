<?php

use App\Http\Controllers\AuthAuthController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthMiddleware;


// Home Controller 
Route::get('/', [HomeController::class, 'index']);
Route::get('/about-us', [AboutController::class, 'index']);
Route::get('/mission-vision', [AboutController::class, 'MissionandVision']);
Route::get('/our-team', [AboutController::class, 'team']);
Route::get('/our-partner', [AboutController::class, 'team']);



Route::get('/login', [AuthAuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthAuthController::class, 'login']);

// Show Registration Form
Route::get('/register', [AuthAuthController::class, 'showRegisterForm'])->name('register');
// Handle Registration Request
Route::post('/register', [AuthAuthController::class, 'register']);
// Logout
Route::post('/logout', [AuthAuthController::class, 'logout'])->name('logout');
// Dashboard contrlllers 


// Apply auth middleware to /admin route
// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// });

Route::get('/admin', [DashboardController::class, 'index'])->middleware('auth')->name('admin');