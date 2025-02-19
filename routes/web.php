<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\StudentAuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

//student-auth

Route::get('/student-login', [StudentAuthController::class, 'login'])->name('student.login');
Route::get('/student-register', [StudentAuthController::class, 'register'])->name('student.register');

//student

Route::get('/student/dashboard', [StudentDashboardController::class, 'index'])->name('student-dashboard');
Route::get('/student/book', [StudentDashboardController::class, 'book'])->name('student-book');
Route::resource('cart', CartController::class);

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    Route::resource('category', CategoryController::class);
    Route::resource('author', AuthorController::class);
    Route::resource('book', BookController::class);
    Route::resource('member', MemberController::class);
});
