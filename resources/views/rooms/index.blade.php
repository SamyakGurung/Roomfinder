@extends('layouts.app')

@section('content')
<x-navbar />
<div class="min-h-screen bg-gray-100 py-10">
    <div class="max-w-6xl mx-auto px-4">
        <h1 class="text-3xl font-bold mb-8 text-center">Search Results</h1>

        @if($rooms->isEmpty())
            <div class="text-center text-gray-600">
                <p>No rooms found.</p>
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($rooms as $room)
                    <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition duration-300">
                        <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $room->title }}</h2>
                        <p class="text-gray-700"><strong>Location:</strong> {{ $room->location }}</p>
                        <p class="text-gray-700"><strong>Price:</strong> Rs. {{ number_format($room->price, 2) }}</p>
                        <p class="text-gray-700"><strong>Type:</strong> {{ $room->type }}</p>
                        <p class="text-gray-600 mt-2">{{ \Illuminate\Support\Str::limit($room->description, 100) }}</p>

                        <div class="mt-4 flex justify-between items-center">
                            <a href="{{ route('bookings.create', $room->id) }}"
                               class="text-green-600 hover:underline font-medium">
                                Book this room
                            </a>

                            <a href="{{ route('rooms.show', $room->id) }}"
                               class="text-blue-600 hover:underline font-medium">
                                View Details
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
 <footer class="bg-gradient-to-r from-blue-900 to-blue-800 shadow-inner py-6 mt-12">
    <div class="max-w-7xl mx-auto px-4 text-center text-blue-200 text-sm font-medium select-none">
        &copy; 2025 RoomFinder. All rights reserved.
    </div>
</footer>


@endsection
