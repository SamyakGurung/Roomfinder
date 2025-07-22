 <!-- Listings -->
    <section class="max-w-6xl mx-auto mt-12 px-4">
        <h2 class="text-2xl font-semibold mb-6">Latest Listings</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($rooms as $room)
            <div class="bg-white rounded shadow overflow-hidden">
                <img src="{{ asset('storage/' . $room->image) }}" alt="Room Image" class="h-48 w-full object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Rs. {{ $room->price }}/month</h3>
                    <p class="text-sm text-gray-600">{{ $room->location }}</p>
                    <p class="text-sm mb-2">{{ $room->type }} Room</p>
                    <a href="{{ route('rooms.show', $room->id) }}" class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">View Details</a>
                </div>
            </div>
            @endforeach
        </div>
    </section>
