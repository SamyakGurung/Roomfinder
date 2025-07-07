<?php
use App\Http\Controllers\RoomController;

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/rooms', [RoomController::class, 'store']);
});

Route::get('/rooms', [RoomController::class, 'index']); // public listing
?>