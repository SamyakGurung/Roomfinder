
<?php
public function search(Request $request)
{
    $query = Room::query();

    if ($request->has('location')) {
        $query->where('location', 'like', '%' . $request->location . '%');
    }

    if ($request->has('price')) {
        $query->where('price', '<=', $request->price);
    }

    if ($request->has('type')) {
        $query->where('type', $request->type);
    }

    $rooms = $query->get();

    return view('admin.rooms.index', compact('rooms'));
}
