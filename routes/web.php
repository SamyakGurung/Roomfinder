<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;

Route::resource('rooms', RoomController::class);


Route::get('/', function () {
    return view('welcome');
});
