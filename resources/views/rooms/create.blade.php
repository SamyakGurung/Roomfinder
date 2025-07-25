{{-- resources/views/rooms/create.blade.php --}}
<h1>Add New Room</h1>
<form method="POST" action="{{ route('rooms.store') }}">
    @csrf
    {{-- resources/views/rooms/create.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-6 rounded shadow mt-8">
    <h2 class="text-xl font-bold mb-4">Add New Room</h2>

    @if($errors->any())
        <div class="bg-red-100 text-red-800 p-3 rounded mb-4">
            <ul class="list-disc pl-5">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('rooms.store') }}" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <input type="text" name="title" placeholder="Room Title" value="{{ old('title') }}" class="w-full border p-2 rounded">
        <input type="text" name="location" placeholder="Location" value="{{ old('location') }}" class="w-full border p-2 rounded">
        <input type="text" name="price" placeholder="Price" value="{{ old('price') }}" class="w-full border p-2 rounded">
        
        <select name="type" class="w-full border p-2 rounded">
            <option value="">Select Type</option>
            <option value="Single" {{ old('type') == 'Single' ? 'selected' : '' }}>Single</option>
            <option value="Double" {{ old('type') == 'Double' ? 'selected' : '' }}>Double</option>
            <option value="2BHK" {{ old('type') == '2BHK' ? 'selected' : '' }}>2BHK</option>
        </select>

        <textarea name="description" rows="4" placeholder="Description" class="w-full border p-2 rounded">{{ old('description') }}</textarea>

        <input type="file" name="image" class="w-full border p-2 rounded">

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Add Room</button>
    </form>
</div>
@endsection

</form>
