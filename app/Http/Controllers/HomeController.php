<?php

namespace App\Http\Controllers;

use App\Models\Room; 

class HomeController extends Controller
{
    public function index()
    {
        
        $rooms = Room::latest()->take(4)->get(); 
    return view('home', compact('rooms'));
}
    

    }



   



