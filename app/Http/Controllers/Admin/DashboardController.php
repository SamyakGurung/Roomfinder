<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'totalListings' => Listing::count(),
            'totalUsers' => User::count(),
            'recentListings' => Listing::latest()->take(5)->get(),
        ]);
    }
}

