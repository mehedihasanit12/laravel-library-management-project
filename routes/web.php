<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\StudentAuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//student-auth

Route::get('/student-login', [StudentAuthController::class, 'login'])->name('student.login');
Route::get('/student-register', [StudentAuthController::class, 'register'])->name('student.register');

//student

Route::get('/student/dashboard', [StudentDashboardController::class, 'index'])->name('student-dashboard');
Route::get('/student/book', [StudentDashboardController::class, 'book'])->name('student-book');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    Route::resource('category', CategoryController::class);
});
