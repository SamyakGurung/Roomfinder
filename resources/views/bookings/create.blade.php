@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto mt-10 p-6 bg-white rounded shadow">
    <h2 class="text-2xl font-semibold mb-4">Book Room: {{ $room->title }}</h2>

    @if ($errors->any())
        <div class="mb-4 p-3 bg-red-100 text-red-700 rounded">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('bookings.store', $room) }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="start_date" class="block font-medium">Start Date:</label>
            <input type="date" id="start_date" name="start_date" value="{{ old('start_date') }}" required class="w-full border rounded p-2">
        </div>
        <div class="mb-4">
            <label for="end_date" class="block font-medium">End Date:</label>
            <input type="date" id="end_date" name="end_date" value="{{ old('end_date') }}" required class="w-full border rounded p-2">
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Book Now</button>
    </form>
</div>
@endsection
