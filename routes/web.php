<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Role\RoleController;
use App\Http\Controllers\Permission\PermissionController;
use App\Http\Controllers\Country\CountryController;
use App\Http\Controllers\Project\ProjectController;
use App\Http\Controllers\Service\ServiceController;
use App\Http\Controllers\Session\SessionController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('pages.home');
})->name('home');

/**
 * Authentication
 */
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);


Route::get('/verify-email/{id}', [AuthController::class, 'verifyEmail']);
Route::post('/enable-two-factor', [AuthController::class, 'enableTwoFactor']);


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/profile', [DashboardController::class, 'profile'])->name('dashboard.profile');
    Route::get('/dashboard/activities', [DashboardController::class, 'recentActivities'])->name('dashboard.activities');
});



// Role routes
Route::post('/roles', [RoleController::class, 'create']);

// Permission routes
Route::post('/permissions', [PermissionController::class, 'create']);

// Country routes
Route::post('/countries', [CountryController::class, 'create']);

// Project routes
Route::post('/projects', [ProjectController::class, 'create']);
Route::get('/users/{userId}/projects', [ProjectController::class, 'getUserProjects']);

// Service routes
Route::post('/services', [ServiceController::class, 'create']);

// Session routes
// Route::post('/logout', [SessionController::class, 'logout']);
