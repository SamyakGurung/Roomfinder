<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    // Show all rooms
    public function index()
    {
        $rooms = Room::all();
        return view('rooms.index', compact('rooms'));
    }

    // Search/filter rooms
    public function search(Request $request)
    {
        $location = $request->input('location');
        $price = $request->input('price');
        $type = $request->input('type');

        $query = Room::query();
        

        if (!empty($location)) {
            $query->where('location', 'LIKE', '%' . $location . '%');
        }

        if (!empty($type)) {
            $query->where('type', 'LIKE', '%' . $type . '%');
        }

        if ($price == '5000') {
            $query->where('price', '<=', 5000);
        } elseif ($price == '10000') {
            $query->whereBetween('price', [5000, 10000]);
        } elseif ($price == '10001') {
            $query->where('price', '>', 10000);
        }

        $rooms = $query->get();

        // ✅ Return the correct Blade view
        return view('rooms.search', compact('rooms'));
    }

    // Show a single room
    public function show($id)
    {
        $room = Room::findOrFail($id);
        return view('rooms.show', compact('room'));
    }

    // Admin edit form
    public function edit($id)
    {
        $room = Room::findOrFail($id);
        return view('admin.rooms.edit', compact('room'));
    }

    // Admin update room
    public function update(Request $request, $id)
    {
        $room = Room::findOrFail($id);
        $room->update($request->only(['title', 'description', 'location', 'type', 'price']));
        return redirect()->route('admin.rooms.index')->with('success', 'Room updated successfully!');
    }

    // Admin delete room
    public function destroy($id)
    {
        $room = Room::findOrFail($id);
        $room->delete();
        return redirect()->route('admin.rooms.index')->with('success', 'Room deleted successfully!');
    }
}
