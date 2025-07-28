<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        // Validate the contact form fields
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string|max:1000',
        ]);

        // You can store or email the message here
        return back()->with('success', 'Your message has been sent!');
    }
}
