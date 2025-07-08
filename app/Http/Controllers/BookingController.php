<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Listing;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with('listing')->latest()->paginate(10);
        return view('bookings.index', compact('bookings'));
    }

    public function create()
    {
        $listings = Listing::all();
        return view('bookings.create', compact('listings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'listing_id' => 'required|exists:listings,id',
            'start_date' => 'required|date',
            'end_date'   => 'required|date|after_or_equal:start_date',
        ]);

        Booking::create($request->all());

        return redirect()->route('bookings.index')->with('success', 'Booking created.');
    }

    public function show(Booking $booking)
    {
        return view('bookings.show', compact('booking'));
    }

    public function edit(Booking $booking)
    {
        $listings = Listing::all();
        return view('bookings.edit', compact('booking', 'listings'));
    }

    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'listing_id' => 'required|exists:listings,id',
            'start_date' => 'required|date',
            'end_date'   => 'required|date|after_or_equal:start_date',
        ]);

        $booking->update($request->all());

        return redirect()->route('bookings.index')->with('success', 'Booking updated.');
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('bookings.index')->with('success', 'Booking deleted.');
    }
}
