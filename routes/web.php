<?php

use Illuminate\support\Facades\Route;
use App\Http\Controllers\{
    ListingController,
    BookingController,
    HistoryController,
    ImageController,
    ReviewController,
    ContactUsController
};

Route::resource('listings', ListingController::class);
Route::resource('bookings', BookingController::class);
Route::resource('histories', HistoryController::class)->only(['index']);
Route::resource('images', ImageController::class);
Route::resource('reviews', ReviewController::class);
Route::resource('contact', ContactUsController::class)->except(['show', 'edit', 'update']);

Route::get('/',function(){
    return view ('welcome');
});
