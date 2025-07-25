<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // Don't forget to import the model!

class ContactController extends Controller
{
    // Handles form submission with redirect and flash message
    public function submit(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Save to database
        Contact::create($validated);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Message sent successfully!');
    }

    // Handles AJAX or API store request and returns JSON response
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        Contact::create($validated);

        return response()->json(['success' => true]);
    }
}
