<!DOCTYPE html>
<html>
<head>
    <title>{{ $room->title }}</title>
</head>
<body>
    <h1>{{ $room->title }}</h1>
    <p><strong>Location:</strong> {{ $room->location }}</p>
    <p><strong>Price:</strong> Rs. {{ $room->price }}</p>
    <p><strong>Description:</strong> {{ $room->description }}</p>

    @auth
        <a href="{{ route('book.room', $room->id) }}">Book Now</a>
    @else
        <a href="{{ route('login') }}">Login to Book</a>
    @endauth

    <br><br>
    <a href="{{ route('home') }}">Back to list</a>
</body>
</html>
