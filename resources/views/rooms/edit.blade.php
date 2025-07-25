@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto bg-white p-6 rounded shadow mt-8">
    <h2 class="text-xl font-semibold mb-4">Edit Room</h2>

    <form method="POST" action="{{ route('rooms.update', $room->id) }}" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')

        <input type="text" name="title" value="{{ $room->title }}" placeholder="Room Title" class="w-full border p-2 rounded">
        <input type="text" name="location" value="{{ $room->location }}" placeholder="Location" class="w-full border p-2 rounded">
        <input type="text" name="price" value="{{ $room->price }}" placeholder="Price" class="w-full border p-2 rounded">

        <select name="type" class="w-full border p-2 rounded">
            <option value="Single" {{ $room->type == 'Single' ? 'selected' : '' }}>Single</option>
            <option value="Double" {{ $room->type == 'Double' ? 'selected' : '' }}>Double</option>
            <option value="2BHK" {{ $room->type == '2BHK' ? 'selected' : '' }}>2BHK</option>
        </select>

        <textarea name="description" class="w-full border p-2 rounded" rows="4">{{ $room->description }}</textarea>

        <input type="file" name="image" class="w-full border p-2 rounded">

        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update Room</button>
    </form>
</div>
@endsection
