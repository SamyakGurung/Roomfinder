@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6">Edit Room</h1>

    @if ($errors->any())
        <div class="mb-4 text-red-600">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('rooms.update', $room) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label class="block mb-2">Title</label>
        <input type="text" name="title" value="{{ old('title', $room->title) }}" class="border p-2 w-full mb-4">

        <label class="block mb-2">Location</label>
        <input type="text" name="location" value="{{ old('location', $room->location) }}" class="border p-2 w-full mb-4">

        <label class="block mb-2">Price</label>
        <input type="number" name="price" value="{{ old('price', $room->price) }}" class="border p-2 w-full mb-4">

        <label class="block mb-2">Type</label>
        <input type="text" name="type" value="{{ old('type', $room->type) }}" class="border p-2 w-full mb-4">

        <label class="block mb-2">Description</label>
        <textarea name="description" class="border p-2 w-full mb-4">{{ old('description', $room->description) }}</textarea>

        <label class="block mb-2">Image</label>
        <input type="file" name="image" class="mb-4">

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update Room</button>
    </form>
</div>
@endsection
