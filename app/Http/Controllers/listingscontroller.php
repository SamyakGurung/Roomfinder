<?php
namespace App\Http\Controllers;
use App\Models\Listing;
use Illuminate\Http\Request;
class ListingController extends Controller {
    public function index() { return Listing::all(); }
    public function store(Request $request) { return Listing::create($request->all()); }
    public function show(Listing $listing) { return $listing; }
    public function update(Request $request, Listing $listing) { $listing->update($request->all()); return $listing; }
    public function destroy(Listing $listing) { $listing->delete(); return response()->json(['message' => 'Deleted']);}
}