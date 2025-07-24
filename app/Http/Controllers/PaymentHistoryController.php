<?php
namespace App\Http\Controllers;
use App\Models\PaymentHistory;
use Illuminate\Http\Request;
class PaymentHistoryController extends Controller {
    public function index() { return PaymentHistory::with(['user', 'listing'])->get(); }
    public function store(Request $request) { return PaymentHistory::create($request->all()); }
    public function show(PaymentHistory $paymentHistory) { return $paymentHistory->load(['user', 'listing']); }
    public function update(Request $request, PaymentHistory $paymentHistory) { $paymentHistory->update($request->all()); return $paymentHistory; }
    public function destroy(PaymentHistory $paymentHistory) { $paymentHistory->delete(); return response()->json(['message' => 'Deleted']);}
}