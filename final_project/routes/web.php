<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/


Route::get('loginPage', [CustomAuthController::class, 'loginPage'])->name('loginPage');
Route::post('login', [CustomAuthController::class, 'login'])->name('login');
Route::get('adminDashboard', [CustomAuthController::class, 'adminDashboard'])->name('adminDashboard');
Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');
Route::get('signupPage', [CustomAuthController::class, 'signupPage'])->name('signupPage');
Route::post('signup', [CustomAuthController::class, 'signup'])->name('signup');
