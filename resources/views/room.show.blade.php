@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $room->title }}</h1>
    <p><strong>Location:</strong> {{ $room->location }}</p>
    <p><strong>Price:</strong> Rs. {{ $room->price }}</p>
    <p><strong>Type:</strong> {{ $room->type }}</p>
    <p>{{ $room->description }}</p>
</div>
@endsection
