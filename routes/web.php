<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
 return view('home');
})->name('home');

Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'login'])->name('login');
