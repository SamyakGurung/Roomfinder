<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;

// Homepage
Route::get('/', [FrontendController::class, 'index'])->name('home');

// Static frontend views via controller
Route::get('/about', [FrontendController::class, 'about'])->name('aboutus');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/listings', [FrontendController::class, 'listing'])->name('listings');
Route::get('/login', [FrontendController::class, 'login'])->name('login');
Route::get('/register', [FrontendController::class, 'register'])->name('register');

// Search and room details
Route::get('/search', [FrontendController::class, 'search'])->name('search');
Route::get('/rooms/{id}', [FrontendController::class, 'show'])->name('rooms.show');

// Authenticated review routes
Route::middleware('auth')->group(function () {
    Route::get('/review/create', [ReviewController::class, 'create'])->name('review.create');
    Route::post('/review/store', [ReviewController::class, 'store'])->name('review.store');
});

// Password update route
Route::post('/update-password', [UserController::class, 'updatePassword'])->name('password.update');

Route::get('/rooms/{id}', [FrontendController::class, 'viewRoom'])->name('rooms.show');





