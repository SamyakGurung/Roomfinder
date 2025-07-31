@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-2xl font-semibold mb-4">Search Results</h1>

    @if ($rooms->isEmpty())
        <p>No rooms found.</p>
    @else
        @foreach ($rooms as $room)
            <div class="border p-4 mb-4 rounded shadow">
                <h3 class="text-lg font-bold">{{ $room->title }}</h3>
                <p><strong>Location:lalitpur</strong> {{ $room->location }}</p>
                <p><strong>Type:single room</strong> {{ $room->type }}</p>
                <p><strong>Price:5000</strong> Rs. {{ $room->price }}</p>
                <p>{{ $room->description }}</p>
            </div>
        @endforeach
    @endif
</div>
@endsection
