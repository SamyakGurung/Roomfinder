<?php
Route::apiResource('listings', ListingController::class);
use App\Http\Controllers\ContactController;
Route::post('/contact', [ContactController::class, 'store']);
Route::get('/contact/messages', [ContactController::class, 'index']); // Optional: for admin to view messages


Route::post('/login', [authcontroller::class, 'login']);
Route::middleware('auth:sanctum')->post('/logout', [authcontroller::class,'logout']);

Route::apiResource('reviews', ReviewController::class);
Route::apiResource('payment_histories', PaymentHistoryController::class);

