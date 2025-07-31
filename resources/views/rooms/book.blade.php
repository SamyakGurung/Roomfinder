<!DOCTYPE html>
<html>
<head>
    <title>Book {{ $room->title }}</title>
</head>
<body>
    <h1>Booking for {{ $room->title }}</h1>
    <p>Location: {{ $room->location }}</p>
    <p>Price: Rs. {{ $room->price }}</p>

    <form method="POST" action="/booking-submit">
        @csrf
        <input type="hidden" name="room_id" value="{{ $room->id }}">

        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Contact Number:</label><br>
        <input type="text" name="contact" required><br><br>

        <button type="submit">Confirm Booking</button>
    </form>
</body>
</html>
