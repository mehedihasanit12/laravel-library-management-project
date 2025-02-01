<?php

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
