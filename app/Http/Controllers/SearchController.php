<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class SearchController extends Controller
{
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

        return view('search-results', compact('rooms'));
    }
}
