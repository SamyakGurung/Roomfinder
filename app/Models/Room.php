<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{

    protected $fillable = [
        'title', 'location', 'price', 'type', 'description', 'image'
    ];


    public function edit(Room $room)
{
    return view('rooms.edit', compact('room'));
}

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
        $validated['image'] = $request->file('image')->store('rooms', 'public');
    }

    $room->update($validated);

    return redirect()->route('rooms.index')->with('success', 'Room updated successfully!');
}

public function destroy(Room $room)
{
    $room->delete();
    return redirect()->route('rooms.index')->with('success', 'Room deleted!');
}

}



