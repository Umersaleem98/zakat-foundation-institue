<?php

use App\Http\Controllers\AuthAuthController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\Users\UserController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\AdmissionController;
use App\Http\Controllers\Home\AlumniController;
use App\Http\Controllers\Home\AnnouncementsController;
use App\Http\Controllers\Home\CMPController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\ProgramController;
use App\Http\Controllers\Home\ResearchPublicationsController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;



// Home Controller 
Route::get('/', [HomeController::class, 'index']);
Route::get('/about-us', [AboutController::class, 'index']);
Route::get('/mission-vision', [AboutController::class, 'MissionandVision']);
Route::get('/our-team', [AboutController::class, 'team']);
Route::get('/our-partner', [AboutController::class, 'team']);
Route::get('/admission', [AdmissionController::class, 'index']);
Route::get('/graduate-certificate', [ProgramController::class, 'GraduateCertificate']);
Route::get('/master-of-arts', [ProgramController::class, 'MasterofArts']);
Route::get('/phd', [ProgramController::class, 'PHD']);
Route::get('/announcements', [AnnouncementsController::class, 'Announcements']);
Route::get('/research-publication', [ResearchPublicationsController::class, 'ResearchPublication']);
Route::get('/professional-development', [CMPController::class, 'ProfessionalDevelopment']);
Route::get('/alumni', [AlumniController::class, 'Alumni']);

// Auth Controllers 
Route::get('/login', [AuthAuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthAuthController::class, 'login']);
// Show Registration Form
Route::get('/register', [AuthAuthController::class, 'showRegisterForm'])->name('register');
// Handle Registration Request
Route::post('/register', [AuthAuthController::class, 'register']);
// Logout
Route::post('/logout', [AuthAuthController::class, 'logout'])->name('logout');
// Dashboard contrlllers 
Route::get('/admin', [DashboardController::class, 'index'])->middleware('auth')->name('admin');

// Dashboard Controllers list

Route::get('/create', [UserController::class, 'Create']);
Route::get('/list', [UserController::class, 'Show']);
Route::post('/store', [UserController::class, 'Store']);