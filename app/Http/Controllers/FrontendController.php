<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class FrontendController extends Controller
{
    public function index()
    {
        return view('home'); // resources/views/home.blade.php
    }

    public function about() {
    return view('about');
}


    public function contact()
    {
        return view('contact'); // resources/views/contact.blade.php
    }

    public function login()
    {
        return view('auth.login'); // resources/views/auth/login.blade.php
    }

    public function register()
    {
        return view('register'); // resources/views/register.blade.php
    }

    public function search()
    {
        return view('search'); // resources/views/search.blade.php
    }

    public function listing()
    {
        $rooms = Room::latest()->get(); // Fetch all rooms from DB
        return view('frontend.listings', compact('rooms')); // resources/views/frontend/listings.blade.php
    }


    public function viewRoom($id)
    {
        $room = Room::findOrFail($id); // Find the room or fail with 404
        return view('room', compact('room')); // resources/views/room.blade.php
    }
}
