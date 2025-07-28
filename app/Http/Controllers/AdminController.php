<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function adminDashboard()
    {
        $user = Auth::user(); // Get the currently logged-in user
        return view('admin-dashboard', compact('user'));
    }
}
