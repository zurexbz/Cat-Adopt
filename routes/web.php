<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CatController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function(){
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/login', [AuthController::class, 'authenticate']);
    Route::post('/register', [AuthController::class, 'newAcc']);
});



Route::get('/', [MainController::class, 'index']);
Route::get('/about', [MainController::class, 'about']);

Route::middleware('auth')->group(function () {
    Route::get('/find', [MainController::class, 'find']);
    Route::get('/report', [MainController::class, 'report']);
    Route::post('/report', [MainController::class, 'submitReport']);
    Route::get('/testimonial', [MainController::class, 'testimonial']);
    Route::post('/testimonial', [MainController::class, 'submitTestimonial']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/adopt', [TransactionController::class, 'adopt']);
    Route::resource('/dashboard', CatController::class);
});