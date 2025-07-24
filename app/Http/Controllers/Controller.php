<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function show(){

        return view('contact');
    }

}
class DashboardController extends Controller
{
    public function index()
    {
        // Here you can later pass dynamic data like total listings
        return view('dashboard');
    }
}
