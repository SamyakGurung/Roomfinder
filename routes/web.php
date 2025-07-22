
<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ContactController;



// Homepage
Route::get('/', [FrontendController::class, 'index'])->name('home');

// Search route
Route::get('/search', [FrontendController::class, 'search'])->name('search');

// View a single room
Route::get('/rooms/{id}', [FrontendController::class, 'show'])->name('rooms.show');

Route::view('/home', 'home')->name('home'); 
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/listings', 'listings')->name('listings');
Route::view('/login', 'auth.login')->name('login');
