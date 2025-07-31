@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <div class="bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-4">{{ $room->title }}</h1>

        <img src="{{ asset('images/roomimages/' . $room->image) }}" alt="Room Image" class="w-full h-64 object-cover rounded mb-4">

        <p><strong>Location:</strong> {{ $room->location }}</p>
        <p><strong>Price:</strong> Rs {{ $room->price }}</p>
        <p><strong>Description:</strong> {{ $room->description }}</p>

        <p><strong>Owner:</strong> {{ $room->user->name }}</p>
        <p><strong>Contact:</strong> {{ $room->user->email }}</p>

        @auth
        <form action="{{ route('book.room') }}" method="POST" class="mt-6">
            @csrf
            <input type="hidden" name="room_id" value="{{ $room->id }}">
            
            <label for="booking_date" class="block font-semibold mb-2">Choose a date:</label>
            <input type="date" name="booking_date" class="border p-2 rounded w-full mb-4" required>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Book Now
            </button>
        </form>
        @endauth

        @guest
        <p class="mt-4 text-red-500">Please <a href="{{ route('login') }}" class="text-blue-600 underline">login</a> to book this room.</p>
        @endguest
    </div>
</div>
@endsection
