{{-- resources/views/rooms/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="p-6">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Room Listings</h1>
        <a href="{{ route('rooms.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Add Room</a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full table-auto bg-white rounded shadow">
        <thead class="bg-gray-200 text-left">
            <tr>
                <th class="p-3">Title</th>
                <th class="p-3">Location</th>
                <th class="p-3">Price</th>
                <th class="p-3">Type</th>
                <th class="p-3">Image</th>
                <th class="p-3">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($rooms as $room)
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-3">{{ $room->title }}</td>
                    <td class="p-3">{{ $room->location }}</td>
                    <td class="p-3">Rs. {{ $room->price }}</td>
                    <td class="p-3">{{ $room->type }}</td>
                    <td class="p-3">
                        @if($room->image)
                            <img src="{{ asset('storage/' . $room->image) }}" alt="Room Image" class="w-16 h-16 object-cover rounded">
                        @else
                            N/A
                        @endif
                    </td>
                    <td class="p-3 space-x-2">
                        <a href="#" class="text-blue-600 hover:underline">Edit</a>
                        <a href="#" class="text-red-600 hover:underline">Delete</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="p-4 text-center text-gray-500">No rooms found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

