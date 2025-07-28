@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-12">
    <div class="grid md:grid-cols-2 gap-10 bg-white p-6 rounded-xl shadow-md">

        <!-- Room Image -->
        <div>
            <img src="{{ asset('images/roomimages/green2.jpg') }}" alt="Room Image"
                class="rounded-xl shadow-md w-full h-80 object-cover">
        </div>

        <!-- Room Info -->
        <div>
            <h2 class="text-3xl font-bold mb-4 text-gray-800">Spacious 2BHK Apartment</h2>
            <p class="text-xl font-semibold text-blue-700 mb-2">Rs. 55,00/month</p>

            <ul class="mb-4 space-y-1 text-gray-700">
                <li><strong>Location:</strong> Kathmandu, Nepal</li>
                <li><strong>Room Type:</strong> 2BHK</li>
                <li><strong>Owner:</strong> Ramesh Thapa</li>
                <li><strong>Contact:</strong> ramesh@example.com</li>
            </ul>

            <div class="mb-4">
                <h3 class="text-lg font-semibold text-gray-800 mb-1">Description</h3>
                <p class="text-gray-600">
                    This beautiful apartment is located in the heart of Kathmandu with easy access to public transport, hospitals, and supermarkets. Comes with 24/7 water, electricity, and a scenic view.
                </p>
            </div>

            <a href="contactOwner.blade.php"
               class="mt-6 inline-block bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
                Contact Owner
            </a>
            <a href="payment.blade.php"
               class="mt-6 inline-block bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
                payment here
            </a>
        </div>

    </div>
</div>
@endsection
