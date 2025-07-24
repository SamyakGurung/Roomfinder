<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
{
    // Validate
    $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    // Do something with the message, e.g., save or email

    return redirect()->back()->with('success', 'Message sent successfully!');
}

}
