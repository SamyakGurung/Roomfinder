@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="bg-white p-8 rounded-2xl shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>

        @if ($errors->any())
            <div class="text-red-500 mb-4">{{ $errors->first() }}</div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm">Email</label>
                <input type="email" name="email" class="w-full border p-2 rounded-lg" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm">Password</label>
                <input type="password" name="password" class="w-full border p-2 rounded-lg" required>
            </div>
            <button class="w-full bg-blue-600 text-white p-2 rounded-lg hover:bg-blue-700">Login</button>
        </form>

        <div class="text-sm text-center mt-4">
            <a href="{{ route('password.request') }}" class="text-blue-600 hover:underline">Forgot your password?</a>
        </div>
        <div class="text-sm text-center mt-2">
            <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Don't have an account? Register</a>
        </div>
    </div>
</div>
@endsection
