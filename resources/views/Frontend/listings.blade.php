<!-- resources/views/frontend/listings.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Room Listings</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <h1 class="text-3xl font-bold mb-4">Available Rooms</h1>

    @if(count($rooms) > 0)
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @foreach($rooms as $room)
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-xl font-semibold">{{ $room->title }}</h2>
                    <p>{{ $room->location }}</p>
                    <p>Rs. {{ $room->price }}</p>
                </div>
            @endforeach
        </div>
    @else
        <p>No rooms available.</p>
    @endif
</body>
</html>
