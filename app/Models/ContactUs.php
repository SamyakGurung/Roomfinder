<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'subject', 'message'];
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    ContactUs::create($request->only('name', 'email', 'message'));

    return redirect()->route('contact.create')->with('success', 'Your message has been sent!');
}

}

