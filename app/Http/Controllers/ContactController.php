<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\User;
use Illuminate\Support\Facades\Mail;



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

    

    public function showForm(Room $room)
    {
        return view('contact-owner', compact('room'));
    }

    public function submitForm(Request $request, Room $room)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);

        // Send email (optional - for now just show success message)
        // You could implement Mail::to(...)->send(...) here

        return redirect()->back()->with('success', 'Your message has been sent to the owner.');
    }
}


