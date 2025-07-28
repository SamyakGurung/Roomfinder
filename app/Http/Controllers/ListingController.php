<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
class ListingController extends Controller
{
    public function index()
    {
        $rooms = Room::all(); // Or Room::latest()->get();
        return view('listings', compact('rooms'));
    }
}

