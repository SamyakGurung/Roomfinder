<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class FrontendController extends Controller
{
public function Home(){
        return view('index');
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
    






}
