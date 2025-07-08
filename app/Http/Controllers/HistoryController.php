<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Booking;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        $histories = History::with('booking')->latest()->paginate(10);
        return view('histories.index', compact('histories'));
    }

    public function create()
    {
        $bookings = Booking::all();
        return view('histories.create', compact('bookings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'booking_id' => 'required|exists:bookings,id',
            'action' => 'required|string',
            'notes' => 'nullable|string',
        ]);

        History::create($request->all());

        return redirect()->route('histories.index')->with('success', 'History created successfully.');
    }

    public function show(History $history)
    {
        return view('histories.show', compact('history'));
    }

    public function edit(History $history)
    {
        $bookings = Booking::all();
        return view('histories.edit', compact('history', 'bookings'));
    }

    public function update(Request $request, History $history)
    {
        $request->validate([
            'booking_id' => 'required|exists:bookings,id',
            'action' => 'required|string',
            'notes' => 'nullable|string',
        ]);

        $history->update($request->all());

        return redirect()->route('histories.index')->with('success', 'History updated successfully.');
    }

    public function destroy(History $history)
    {
        $history->delete();
        return redirect()->route('histories.index')->with('success', 'History deleted.');
    }
}
