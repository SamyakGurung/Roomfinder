<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    // Show booking form for a room
    public function create(Room $room)
    {
        return view('booking.create', compact('room'));
    }

    // Store booking request
    public function store(Request $request, Room $room)
    {
        $request->validate([
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after:start_date',
        ]);

        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login')->with('error', 'Please login first.');
        }

        // Check if room is available for requested dates
        $overlap = Booking::where('room_id', $room->id)
            ->where(function ($query) use ($request) {
                $query->whereBetween('start_date', [$request->start_date, $request->end_date])
                      ->orWhereBetween('end_date', [$request->start_date, $request->end_date])
                      ->orWhere(function($q) use ($request) {
                          $q->where('start_date', '<=', $request->start_date)
                            ->where('end_date', '>=', $request->end_date);
                      });
            })
            ->where('status', '!=', 'cancelled')
            ->exists();

        if ($overlap) {
            return back()->withErrors('Room is already booked for selected dates.');
        }

        Booking::create([
            'user_id' => $user->id,
            'room_id' => $room->id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => 'pending',
        ]);

        return redirect()->route('bookings.index')->with('success', 'Booking request sent successfully.');
    }

    // Show user's booking list
    public function index()
    {
        $user = Auth::user();
        $bookings = Booking::where('user_id', $user->id)->with('room')->orderBy('created_at', 'desc')->get();

        return view('booking.index', compact('bookings'));
    }
}
