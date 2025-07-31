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
use App\Http\Controllers\SearchController;
use App\Http\Controllers\BookingController;

// ---------------------------
// GUEST ROUTES
// ---------------------------
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

// ---------------------------
// AUTHENTICATED ROUTES
// ---------------------------
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

    Route::get('/book/{id}', [RoomController::class, 'book'])->name('book.room');
});

// ---------------------------
// PUBLIC ROUTES
// ---------------------------

// Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');


// All Rooms Listings
Route::get('/listings', [RoomController::class, 'index'])->name('listings');

// Room Details View (Finalized Route)
Route::get('/rooms/{id}', [RoomController::class, 'show'])->name('view-details');
Route::get('/rooms/{id}', [RoomController::class, 'show'])->name('view-details');

// Create Room
Route::get('/rooms/create', [RoomController::class, 'create'])->name('rooms.create');

// Room Search
Route::get('/rooms/search', [RoomController::class, 'search'])->name('rooms.search');
Route::get('/search', [SearchController::class, 'search'])->name('search');

// About Us Page
Route::view('/aboutus', 'aboutus')->name('aboutus');

// Contact Page
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Contact Room Owner
Route::get('/contact-owner/{room}', [ContactController::class, 'showForm'])->name('contact.owner');
Route::post('/contact-owner/{room}', [ContactController::class, 'submitForm'])->name('contact.send');



Route::post('/book', [BookingController::class, 'store'])->name('bookings.store');

Route::get('/my-bookings', [BookingController::class, 'userBookings'])->name('bookings.user')->middleware('auth');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/bookings', [BookingController::class, 'allBookings'])->name('bookings.all');
    // Other admin routes here...
});


Route::middleware('auth')->group(function () {
    Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');

    Route::get('/rooms/{room}/book', [BookingController::class, 'create'])->name('bookings.create');
    Route::post('/rooms/{room}/book', [BookingController::class, 'store'])->name('bookings.store');
});


Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin/rooms', [RoomController::class, 'index'])->name('admin.rooms.index');
    Route::get('/admin/rooms/{id}/edit', [RoomController::class, 'edit'])->name('admin.rooms.edit');
    Route::put('/admin/rooms/{id}', [RoomController::class, 'update'])->name('admin.rooms.update');
    Route::delete('/admin/rooms/{id}', [RoomController::class, 'destroy'])->name('admin.rooms.destroy');
});






Route::get('/payment', function () {
    return view('payment');
});

// Verify route for Khalti payment
Route::post('/khalti/verify', [PaymentController::class, 'verifyKhalti'])->name('khalti.verify');








Route::get('/room/{id}', [RoomController::class, 'show'])->name('room.show');


Route::get('/rooms/{room}', [RoomController::class, 'show'])->name('rooms.show');




Route::post('/book-room', [BookingController::class, 'store'])->name('book.room');
Route::get('/my-bookings', [BookingController::class, 'userBookings'])->name('user.bookings');
Route::get('/all-bookings', [BookingController::class, 'allBookings'])->middleware('admin')->name('admin.bookings');


Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});





// Payment Routes
Route::controller(PaymentController::class)->group(function () {
    Route::post('/initiate-payment', 'initiatePayment');
    Route::get('/verify-payment', 'verifyPayment');
});
Route::post('/api/verify-payment', [PaymentController::class, 'verifyPayment']);

// Laravel Default Auth
Auth::routes();
