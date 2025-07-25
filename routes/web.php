<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Auth;







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


Route::get('/admin', function () {
    return view('admin-dashboard');
});


// Example dashboard route
Route::get('/dashboard', function () {
    return view('admin-dashboard'); // or whatever view you want
})->name('dashboard');


Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
Route::get('/rooms/create', [RoomController::class, 'create'])->name('rooms.create');

Route::get('/messages', [MessageController::class, 'index'])->name('messages');
Route::get('/settings', [SettingsController::class, 'index'])->name('Settings');








   


Route::get('/users/{id}', [UserController::class, 'show'])->name('user.show');


Route::get('/users/{id}', [UserController::class, 'showUser'])->name('user.show');

Route::get('/users', [UserController::class, 'index'])->name('Users');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');



Route::get('/users', [UserController::class, 'index'])->name('Users');
Route::get('/users/{id}', [UserController::class, 'showUser'])->name('users.show');



Route::get('/dashboard', function () {
    $user = Auth::user(); // 
    return view('admin-dashboard', compact('user'));
})->middleware('auth');  // 



Route::get('/dashboard', function () {
    $user = Auth::user();
    return view('admin-dashboard', compact('user'));
})->name('dashboard')->middleware('auth');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', function () {
        return view('admin-dashboard');
    })->name('admin.dashboard');
});



Route::middleware(['auth'])->group(function () {
    Route::resource('rooms', RoomController::class);
    Route::get('/admin', fn() => view('admin-dashboard'))->name('dashboard');
});

Route::resource('rooms', RoomController::class);





















