<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
    public function verifyKhalti(Request $request)
    {
        $token = $request->token;
        $amount = $request->amount;

        $secretKey = env('KHALTI_SECRET_KEY');

        $response = Http::withHeaders([
            'Authorization' => "Key {$secretKey}"
        ])->post('https://khalti.com/api/v2/payment/verify/', [
            'token' => $token,
            'amount' => $amount,
        ]);

        if ($response->successful() && $response['status_code'] == 0) {
            // Payment सफल भयो, यहाँ booking save गर्न सकिन्छ

            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false], 400);
        }
    }


    
}
