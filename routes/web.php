<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
 return view('home');
})->name('home');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/owner/register', [AuthController::class, 'owner_register'])->name('owner_register');

Route::get('/login', [AuthController::class, 'login'])->name('login');

// User Dashboard

Route::get('/user/dashboard', [UserController::class, 'user'])->name('user.dashboard');

// dashboard owner
Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/products', [DashboardController::class, 'products'])->name('dashboard.products');
    Route::get('/sales', [DashboardController::class, 'sales'])->name('dashboard.sales');
    Route::get('/gateway', [DashboardController::class, 'gateway'])->name('dashboard.gateway');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('dashboard.profile');
    Route::get('/add-service', [DashboardController::class, 'addService'])->name('dashboard.add_service');
    Route::post('/add-service', [DashboardController::class, 'storeService'])->name('dashboard.store_service');
});

