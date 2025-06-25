<!-- resources/views/rooms/index.blade.php -->
<!DOCTYPE html>
<html>
<head><title>Rooms</title></head>
<body>
    <h1>Room List</h1>
    <a href="{{ route('rooms.create') }}">Add New Room</a>

    <ul>
        @foreach ($rooms as $room)
            <li>
                {{ $room->room_number }} - {{ $room->location }} - Rs. {{ $room->price }}
                <a href="{{ route('rooms.show', $room->id) }}">View</a> |
                <a href="{{ route('rooms.edit', $room->id) }}">Edit</a> |
                <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
