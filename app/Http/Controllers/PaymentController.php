<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;
class PaymentController extends Controller
{
   
 
public function initiatePayment(Request $request)
{
    $payload = [
        'return_url' => url('/api/verify-payment'),
        'website_url' => config('payment.khalti.website_url'),
        'amount' => 4000 * 100, // amount in paisa
        'purchase_order_id' => 1,
        'purchase_order_name' => 'Test Order',
        'customer_info' => [
            'name' => 'Test Customer',
            'email' => 'test@gmail.com',
            'phone' => 9800000001
        ]
    ];
 
    $response = Http::withHeaders([
        'Authorization' => 'key ' . config('payment.khalti.secret_key'),
        'Accept' => 'application/json',
    ])->post(config('payment.khalti.base_url') . '/api/v2/epayment/initiate/', $payload)->throw();
 
    return $response->json();
}

public function verifyPayment(Request $request)
{
    $response = Http::withHeaders([
        'Authorization' => 'key ' . config('payment.khalti.secret_key'),
        'Accept' => 'application/json',
    ])->post(config('payment.khalti.base_url') . '/api/v2/epayment/lookup/', [
        'pidx' => $request->pidx
    ])->throw();
 
    if ($response->successful()) {
        return redirect(config('payment.khalti.redirect') . '/payment/success');
    }
 
    return redirect(config('payment.khalti.redirect') . '/payment/failed');
}





}
