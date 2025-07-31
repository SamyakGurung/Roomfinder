@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h2 class="text-2xl font-bold mb-4">My Bookings</h2>

    @if($bookings->isEmpty())
        <p>You have no bookings yet.</p>
    @else
        <table class="min-w-full border-collapse border border-gray-300">
            <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2">Room Title</th>
                    <th class="border border-gray-300 px-4 py-2">Booking Date</th>
                    <th class="border border-gray-300 px-4 py-2">Booked On</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bookings as $booking)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">{{ $booking->room->title ?? 'Deleted Room' }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $booking->booking_date }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $booking->created_at->format('Y-m-d') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
