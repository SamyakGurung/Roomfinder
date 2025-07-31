@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto mt-10 p-6 bg-white rounded shadow">
    <h2 class="text-2xl font-semibold mb-6">My Bookings</h2>

    @if (session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    @if ($bookings->isEmpty())
        <p>No bookings found.</p>
    @else
        <table class="w-full border-collapse border">
            <thead>
                <tr>
                    <th class="border px-4 py-2">Room</th>
                    <th class="border px-4 py-2">Start Date</th>
                    <th class="border px-4 py-2">End Date</th>
                    <th class="border px-4 py-2">Status</th>
                    <th class="border px-4 py-2">Booked On</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                    <tr>
                        <td class="border px-4 py-2">{{ $booking->room->title }}</td>
                        <td class="border px-4 py-2">{{ $booking->start_date }}</td>
                        <td class="border px-4 py-2">{{ $booking->end_date }}</td>
                        <td class="border px-4 py-2 capitalize">{{ $booking->status }}</td>
                        <td class="border px-4 py-2">{{ $booking->created_at->format('Y-m-d') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
