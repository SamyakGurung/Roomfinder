<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        $contacts = ContactUs::latest()->paginate(10);
        return view('contact.index', compact('contacts'));
    }

    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string',
            'email'   => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        ContactUs::create($request->all());

        return redirect()->route('contact.index')->with('success', 'Message sent.');
    }

    public function destroy(ContactUs $contact)
    {
        $contact->delete();
        return redirect()->route('contact.index')->with('success', 'Message deleted.');
    }
}
