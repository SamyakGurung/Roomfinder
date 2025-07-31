@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Search Results</h1>

    @if ($rooms->isEmpty())
        <p>No rooms found.</p>
    @else
        @foreach ($rooms as $room)
            <div class="border p-3 mb-3">
                <h3>{{ $room->title }}</h3>
                <p>Location: {{ $room->location }}</p>
                <p>Price: Rs. {{ $room->price }}</p>
                <p>Type: {{ $room->type }}</p>
                <p>{{ $room->description }}</p>
            </div>
        @endforeach
    @endif
</div>
@endsection
