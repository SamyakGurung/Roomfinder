<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index()
    {
        $listings = Listing::latest()->paginate(10);
        return view('listings.index', compact('listings'));
    }

    public function create()
    {
        return view('listings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required',
            'location'    => 'required',
            'price'       => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        Listing::create($request->all());

        return redirect()->route('listings.index')->with('success', 'Listing created successfully.');
    }

    public function show(Listing $listing)
    {
        return view('listings.show', compact('listing'));
    }

    public function edit(Listing $listing)
    {
        return view('listings.edit', compact('listing'));
    }

    public function update(Request $request, Listing $listing)
    {
        $request->validate([
            'title'    => 'required',
            'location' => 'required',
            'price'    => 'required|numeric',
        ]);

        $listing->update($request->all());

        return redirect()->route('listings.index')->with('success', 'Listing updated.');
    }

    public function destroy(Listing $listing)
    {
        $listing->delete();
        return redirect()->route('listings.index')->with('success', 'Listing deleted.');
    }
}
