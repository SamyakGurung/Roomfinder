<?php
namespace App\Http\Controllers;
use App\Models\Review;
use Illuminate\Http\Request;
class ReviewController extends Controller {
    public function index() { return Review::with(['user', 'listing'])->get(); }
    public function store(Request $request) { return Review::create($request->all()); }
    public function show(Review $review) { return $review->load(['user', 'listing']); }
    public function update(Request $request, Review $review) { $review->update($request->all()); return $review; }
    public function destroy(Review $review) { $review->delete(); return response()->json(['message' => 'Deleted']);}
}