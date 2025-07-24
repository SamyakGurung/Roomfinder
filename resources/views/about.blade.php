@extends('layouts.app')

@section('content')
<div class="bg-gray-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold text-center text-blue-600 mb-12">About Room Finder</h1>

        {{-- Our Mission --}}
        <div class="grid md:grid-cols-2 gap-8 items-center mb-16">
            <div>
                <img src="{{ asset('images/roomimages/image4.jpg') }}" alt="Our Mission" class="rounded-lg shadow-md">
            </div>
            <div>
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Our Mission</h2>
                <p class="text-gray-700 text-lg">
                    Room Finder is a platform built to help students, workers, and anyone in need of a room
                    to <span class="text-blue-500 font-semibold">easily find affordable, verified, and nearby rooms</span> without agent fees.
                </p>
            </div>
        </div>

        {{-- What We Do --}}
        <div class="grid md:grid-cols-2 gap-8 items-center mb-16">
            <div class="md:order-2">
                <img src="{{ asset('images/roomimages/image2.jpg') }}" alt="What We Do" class="rounded-lg shadow-md">
            </div>
            <div class="md:order-1">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">What We Do</h2>
                <p class="text-gray-700 text-lg">
                    We connect landlords and tenants directly, offering a smooth and user-friendly interface.
                    Our platform allows you to search, filter, and book rooms online with all the details
                    and images you need to make the right decision.
                </p>
            </div>
        </div>

        {{-- Why Choose Us --}}
        <div class="mb-16">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4 text-center">Why Choose Us?</h2>
            <ul class="grid md:grid-cols-2 gap-4 text-gray-700 text-lg list-disc pl-6">
                <li>Easy to use and mobile-friendly interface</li>
                <li>No hidden charges or agent fees</li>
                <li>Verified room listings</li>
                <li>Support for both tenants and landlords</li>
                <li>Based in Nepal and made for local needs</li>
            </ul>
            
        </div>

        {{-- Meet the Team --}}
        <div class="grid md:grid-cols-2 gap-8 items-center mb-12">
            <div>
                <img src="{{ asset('images/roomimages/image5.png') }}" alt="Meet the Team" class="rounded-lg shadow-md">
            </div>
            <div>
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Meet the Team</h2>
                <p class="text-gray-700 text-lg">
                    We are a group of passionate developers and students from Nepal who understand the struggle
                    of finding a room in busy cities. Room Finder is our solution to that real-life problem.
                </p>
            </div>
        </div>
<footer>
        <footer class="bg-black shadow-md mt-14">
    <div class="max-w-7xl mx-auto px-4 py-6 text-center text-gray-500 text-sm">
        &copy; 2025 RoomFinder. All rights reserved.
    </div>
</footer>
    </div>
</div>
@endsection
