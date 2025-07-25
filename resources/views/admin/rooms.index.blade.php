@extends('layouts.admin')

@section('content')
<div class="bg-white p-6 rounded shadow">
    <h2 class="text-xl font-semibold mb-4">Room Listings</h2>
    <table class="w-full table-auto text-sm">
        <thead>
            <tr class="bg-gray-100 text-left">
                <th class="p-2">Room</th>
                <th class="p-2">Location</th>
                <th class="p-2">Price</th>
                <th class="p-2">Type</th>
                <th class="p-2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rooms as $room)
            <tr class="border-b">
                <td class="p-2">{{ $room->title }}</td>
                <td class="p-2">{{ $room->location }}</td>
                <td class="p-2">Rs. {{ $room->price }}</td>
                <td class="p-2">{{ $room->type }}</td>
                <td class="p-2">
                    <button class="text-blue-600 hover:underline">Edit</button>
                    <button class="text-red-600 hover:underline ml-2">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
