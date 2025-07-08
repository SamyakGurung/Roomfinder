<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Listing;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::with('listing')->paginate(10);
        return view('images.index', compact('images'));
    }

    public function create()
    {
        $listings = Listing::all();
        return view('images.create', compact('listings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'listing_id' => 'required|exists:listings,id',
            'image_path' => 'required|string',
        ]);

        Image::create($request->all());

        return redirect()->route('images.index')->with('success', 'Image added.');
    }

    public function edit(Image $image)
    {
        $listings = Listing::all();
        return view('images.edit', compact('image', 'listings'));
    }

    public function update(Request $request, Image $image)
    {
        $request->validate([
            'listing_id' => 'required|exists:listings,id',
            'image_path' => 'required|string',
        ]);

        $image->update($request->all());

        return redirect()->route('images.index')->with('success', 'Image updated.');
    }

    public function destroy(Image $image)
    {
        $image->delete();
        return redirect()->route('images.index')->with('success', 'Image deleted.');
    }
}
