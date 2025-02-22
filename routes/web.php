<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookIssueController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\StudentBookIssueController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\StudentAuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

//student-auth

Route::get('/student-login', [StudentAuthController::class, 'login'])->name('student-login');
Route::get('/student-register', [StudentAuthController::class, 'register'])->name('student-register');
Route::post('/studentLogin', [StudentAuthController::class, 'studentLogin'])->name('student.login');
Route::get('/studentLogout', [StudentAuthController::class, 'studentLogout'])->name('student.logout');

//student

Route::get('/student/dashboard', [StudentDashboardController::class, 'index'])->name('student-dashboard');
Route::get('/student/book', [StudentDashboardController::class, 'book'])->name('student-book');
Route::get('/student/book-issue', [StudentBookIssueController::class, 'IssueBook'])->name('student-book-issue');
Route::get('/student/success', [StudentBookIssueController::class, 'successPage'])->name('student-success-page');

Route::get('/cart/index', [CartController::class, 'index'])->name('cart.index');
Route::get('/cart/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart/delete/{id}', [CartController::class, 'delete'])->name('cart.delete');

Route::get('/search/index', [SearchController::class, 'index'])->name('search.index');
Route::get('/search', [SearchController::class, 'search'])->name('search.search');
Route::get('/search/ajax', [SearchController::class, 'ajaxSearch'])->name('search.ajax-search');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    Route::resource('category', CategoryController::class);
    Route::resource('author', AuthorController::class);
    Route::resource('book', BookController::class);
    Route::resource('admin-student', StudentController::class);
    Route::resource('book-issue', BookIssueController::class);


});
