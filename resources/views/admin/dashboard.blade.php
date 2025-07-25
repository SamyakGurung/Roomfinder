@extends('layouts.admin')

@section('content')
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
    <div class="bg-white p-4 rounded shadow">
        <h2 class="text-lg font-semibold">Total Rooms</h2>
        <p class="text-2xl font-bold text-blue-600">{{ $roomsCount }}</p>
    </div>
    <div class="bg-white p-4 rounded shadow">
        <h2 class="text-lg font-semibold">Active Users</h2>
        <p class="text-2xl font-bold text-green-500">{{ $usersCount }}</p>
    </div>
    <div class="bg-white p-4 rounded shadow">
        <h2 class="text-lg font-semibold">New Messages</h2>
        <p class="text-2xl font-bold text-red-500">{{ $messagesCount }}</p>
    </div>
    <div class="bg-white p-4 rounded shadow">
        <h2 class="text-lg font-semibold">Bookings</h2>
        <p class="text-2xl font-bold text-yellow-500">{{ $bookingsCount }}</p>
    </div>
</div>
@endsection
