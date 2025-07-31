@extends('layouts.app')

@section('content')
<x-navbar />
<div class="min-h-screen bg-gray-100 py-10">
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-2xl shadow-md">

        @if ($room->image)
            <img src="{{ asset('/images/roomimages/hall.jpg' . $room->image) }}"
                 alt="{{ $room->title }}"
                 class="w-full h-96 object-cover rounded-xl mb-6 shadow-sm">
        @else
            <div class="w-full h-96 bg-gray-200 flex items-center justify-center rounded-xl mb-6 text-gray-500">
                No Image Available
            </div>
        @endif

        <h1 class="text-4xl font-bold text-gray-800 mb-4">{{ $room->title }}</h1>

        <div class="text-lg text-gray-700 space-y-2">
            <p><span class="font-semibold text-gray-900">Location:</span> {{ $room->location }}</p>
            <p><span class="font-semibold text-gray-900">Price:</span> Rs. {{ number_format($room->price, 2) }}</p>
            <p><span class="font-semibold text-gray-900">Type:</span> {{ $room->type }}</p>
            <p class="mt-4 text-gray-600">{{ $room->description }}</p>
        </div>

        
        <div class="mt-8">
            <a href="{{ route('bookings.create', $room->id) }}"
               class="inline-block bg-blue-600 hover:bg-blue-700 text-white text-lg font-medium px-6 py-3 rounded-xl transition duration-200">
                Book this room
            </a>
        </div>
    </div>
</div>
 <footer class="bg-gradient-to-r from-blue-900 to-blue-800 shadow-inner py-6 mt-12">
    <div class="max-w-7xl mx-auto px-4 text-center text-blue-200 text-sm font-medium select-none">
        &copy; 2025 RoomFinder. All rights reserved.
    </div>
</footer>


@endsection
