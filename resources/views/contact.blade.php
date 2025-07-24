@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-50 px-4">
    <div class="w-full max-w-xl bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold text-center text-blue-600 mb-6">Contact Us</h2>

        @if(session('success'))
            <div class="mb-4 text-green-600 bg-green-100 border border-green-300 p-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label for="name" class="block mb-1 font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="name" required
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div>
                <label for="email" class="block mb-1 font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" required
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div>
                <label for="message" class="block mb-1 font-medium text-gray-700">Message</label>
                <textarea name="message" id="message" rows="5" required
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 resize-none"></textarea>
            </div>

            <button type="submit"
                class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded-md transition duration-200">
                Send Message
            </button>
        </form>
    </div>
</div>
@endsection
