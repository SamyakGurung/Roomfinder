@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="bg-white p-8 rounded-2xl shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Register</h2>

        @if ($errors->any())
            <ul class="text-red-500 mb-4 text-sm">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm">Name</label>
                <input type="text" name="name" class="w-full border p-2 rounded-lg" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm">Email</label>
                <input type="email" name="email" class="w-full border p-2 rounded-lg" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm">Password</label>
                <input type="password" name="password" class="w-full border p-2 rounded-lg" required>
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="block text-sm">Confirm Password</label>
                <input type="password" name="password_confirmation" class="w-full border p-2 rounded-lg" required>
            </div>
            <button class="w-full bg-green-600 text-white p-2 rounded-lg hover:bg-green-700">Register</button>
        </form>

        <div class="text-sm text-center mt-4">
            <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Already have an account? Login</a>
        </div>
    </div>
</div>
@endsection
