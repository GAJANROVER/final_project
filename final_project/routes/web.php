<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use Illuminate\Routing\Router;

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
Route::get('customerDashboard', [CustomAuthController::class, 'customerDashboard'])->name('customerDashboard');
Route::get('customerView', [CustomAuthController::class, 'customerView'])->name('customerView');
Route::post('customerDelete', [CustomAuthController::class, 'customerDelete'])->name('customerDelete');
Route::get('customerEditView', [CustomAuthController::class, 'customerEditView'])->name('customerEditView');
Route::post('customerUpdate', [CustomAuthController::class, 'customerUpdate'])->name('customerUpdate');
Route::get('customerCreateView', [CustomAuthController::class, 'customerCreateView'])->name('customerCreateView');
Route::post('customerCreate', [CustomAuthController::class, 'customerCreate'])->name('customerCreate');
