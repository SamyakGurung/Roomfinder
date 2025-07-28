@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto mt-10 bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-4">Contact Owner of: {{ $room->title }}</h2>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-2 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('contact.send', $room->id) }}">
        @csrf

        <div class="mb-4">
            <label class="block font-medium mb-1">Your Name</label>
            <input type="text" name="name" class="w-full border px-3 py-2 rounded" value="{{ old('name') }}" required>
        </div>

        <div class="mb-4">
            <label class="block font-medium mb-1">Your Email</label>
            <input type="email" name="email" class="w-full border px-3 py-2 rounded" value="{{ old('email') }}" required>
        </div>

        <div class="mb-4">
            <label class="block font-medium mb-1">Message</label>
            <textarea name="message" rows="5" class="w-full border px-3 py-2 rounded" required>{{ old('message') }}</textarea>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
            Send Message
        </button>
    </form>
</div>
@endsection
