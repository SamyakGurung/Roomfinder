<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Listing;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::with('listing')->paginate(10);
        return view('reviews.index', compact('reviews'));
    }

    public function create()
    {
        $listings = Listing::all();
        return view('reviews.create', compact('listings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'listing_id' => 'required|exists:listings,id',
            'rating'     => 'required|integer|min:1|max:5',
            'comment'    => 'nullable|string',
        ]);

        Review::create($request->all());

        return redirect()->route('reviews.index')->with('success', 'Review added.');
    }

    public function edit(Review $review)
    {
        $listings = Listing::all();
        return view('reviews.edit', compact('review', 'listings'));
    }

    public function update(Request $request, Review $review)
    {
        $request->validate([
            'listing_id' => 'required|exists:listings,id',
            'rating'     => 'required|integer|min:1|max:5',
            'comment'    => 'nullable|string',
        ]);

        $review->update($request->all());

        return redirect()->route('reviews.index')->with('success', 'Review updated.');
    }

    public function destroy(Review $review)
    {
        $review->delete();
        return redirect()->route('reviews.index')->with('success', 'Review deleted.');
    }
}
