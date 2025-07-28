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

       public function ViewDetails()
    {
        return view('ViewDetails'); // resources/views/register.blade.php
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


public function listings()
{
    $rooms = Room::latest()->get();  // Get all rooms ordered by newest first
    return view('frontend.listings', compact('rooms'));  // Pass data to view
}
public function loginSubmit(Request $request)
{
$credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('/dashboard'); // or your desired page
    }

    return back()->withErrors([
        'email' => 'Invalid email or password.',
    ]);
}




//     $credentials = $request->validate([
//         'email' => ['required', 'email'],
//         'password' => ['required'],
//     ]);

//     if (Auth::attempt($credentials)) {
//         $request->session()->regenerate();
//         return redirect()->intended('/dashboard');
//     }

//     return back()->withErrors([
//         'email' => 'Invalid credentials.',
//     ]);
// }

}




