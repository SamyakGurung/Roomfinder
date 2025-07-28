<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PaymentController;

// Guest-only routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);

    Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

    Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');
});

// Authenticated-only routes
Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/email/verify', function () {
        return view('auth.verify-email');
    })->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();
        return redirect('/');
    })->middleware(['signed'])->name('verification.verify');

    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('message', 'Verification link sent!');
    })->middleware(['throttle:6,1'])->name('verification.send');
});

// ✅ PUBLIC ROUTES

// Home page — make sure this view exists in resources/views/home.blade.php
Route::get('/', [HomeController::class, 'index'])->name('home');

// Listings page
Route::get('/listings', [ListingController::class, 'index'])->name('listings');

Route::get('/ViewDetails', [FrontendController::class, 'ViewDetails'])->name('ViewDetails');
// About Us page
Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

// Contact form
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Search rooms
Route::get('/rooms/search', [RoomController::class, 'search'])->name('rooms.search');

// Room details
Route::get('/room/{id}', [RoomController::class, 'show'])->name('room.details');
Route::get('/payment', [RoomController::class, 'payment'])->name('payment');

// Contact room owner
Route::get('/contact-owner/{room}', [ContactController::class, 'showForm'])->name('contact.owner');
Route::post('/contact-owner/{room}', [ContactController::class, 'submitForm'])->name('contact.send');


Route::controller(PaymentController::class)->group(function () {
    Route::post('/initiate-payment', 'initiatePayment');
    Route::get('/verify-payment', 'verifyPayment');
});
Route::post('/api/verify-payment', [PaymentController::class, 'verifyPayment']);
