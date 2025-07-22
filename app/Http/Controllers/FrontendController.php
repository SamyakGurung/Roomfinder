<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function Home()
{
    return view('home'); // must have home.blade.php in views
}

    public function About(){
        return view('aboutus');
    }

     public function Login(){
        return view('login');
    }

    public function Listing(){

        return view('listings');
    }
    public function Register(){

        return view('register');
    }
    public function search(){

        return view('search');
    }
    






}
