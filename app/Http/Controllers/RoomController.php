<?php

namespace App\Http\Controllers;
use App\Http\Controllers\RoomController;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    // Show edit form
    public function edit(Room $room)
    {
        return view('rooms.edit', compact('room'));
    }

    // Handle update form submission
    public function update(Request $request, Room $room)
    {
        $validated = $request->validate([
            'title' => 'required',
            'location' => 'required',
            'price' => 'required|numeric',
            'type' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validated['image'] = $imagePath;
        }

        $room->update($validated);

        return redirect()->route('rooms.show', $room)->with('success', 'Room updated successfully');
    }
    



    


    public function search(Request $request)
    {
        $query = Room::query();

        if ($request->filled('location')) {
            $query->where('location', 'like', '%' . $request->location . '%');
        }

        if ($request->filled('price')) {
            $query->where('price', '<=', $request->price);
        }

        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }

        $rooms = $query->get();

        return view('admin.rooms.index', compact('rooms'));
    }



public function show($id)
    {
        $room = Room::with('user')->findOrFail($id);
        return view('view-details', compact('room'));
    }

    
public function payment()
    {
        return view('payment');
    }



}




