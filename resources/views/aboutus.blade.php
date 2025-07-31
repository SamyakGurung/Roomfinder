@extends('layouts.app')

@section('content')
<x-navbar />
<div class="bg-gradient-to-r from-blue-50 to-white py-16">
    <div class="max-w-6xl mx-auto px-6 sm:px-8 lg:px-12">
        <h1 class="text-5xl font-extrabold text-center text-black mb-16 drop-shadow-lg">
            About <span class="text-black">Room Finder</span>
        </h1>

        {{-- Our Mission --}}
        <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
            <div class="rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition duration-300 max-w-[400px] mx-auto">
                <img src="{{ asset('images/roomimages/image4.jpg') }}" alt="Our Mission" class="w-full h-auto object-cover max-h-[280px]">
            </div>
            <div>
                <h2 class="text-3xl font-extrabold text-black mb-5">Our Mission</h2>
                <p class="text-gray-800 text-lg leading-relaxed font-semibold">
                    Room Finder is a platform built to help students, workers, and anyone in need of a room
                    to <span class="text-black-600 ">easily find affordable, verified, and nearby rooms</span> without agent fees.
                </p>
            </div>
        </div>

        {{-- What We Do --}}
        <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
            <div class="md:order-2 rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition duration-300 max-w-[400px] mx-auto">
                <img src="{{ asset('images/roomimages/image2.jpg') }}" alt="What We Do" class="w-full h-auto object-cover max-h-[280px]">
            </div>
            <div class="md:order-1">
                <h2 class="text-3xl font-extrabold text-black mb-5">What We Do</h2>
                <p class="text-gray-800 text-lg leading-relaxed font-semibold">
                    We connect landlords and tenants directly, offering a smooth and user-friendly interface.
                    Our platform allows you to search, filter, and book rooms online with all the details
                    and images you need to make the right decision.
                </p>
            </div>
        </div>

        {{-- Why Choose Us --}}
        <div class="mb-20 text-center max-w-4xl mx-auto">
            <h2 class="text-3xl font-extrabold text-black mb-8">Why Choose Us?</h2>
            <ul class="grid sm:grid-cols-2 gap-6 text-gray-700 text-lg list-disc list-inside font-semibold">
                <li class="hover:text-blue-600 transition cursor-pointer">Easy to use and mobile-friendly interface</li>
                <li class="hover:text-blue-600 transition cursor-pointer">No hidden charges or agent fees</li>
                <li class="hover:text-blue-600 transition cursor-pointer">Verified room listings</li>
                <li class="hover:text-blue-600 transition cursor-pointer">Support for both tenants and landlords</li>
                <li class="hover:text-blue-600 transition cursor-pointer">Based in Nepal and made for local needs</li>
            </ul>
        </div>

        {{-- Meet the Team --}}
        <div class="grid md:grid-cols-2 gap-12 items-center mb-16">
            <div class="rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition duration-300 max-w-[400px] mx-auto">
                <img src="{{ asset('images/roomimages/image5.png') }}" alt="Meet the Team" class="w-full h-auto object-cover max-h-[280px]">
            </div>
            <div>
                <h2 class="text-3xl font-extrabold text-black mb-5">Meet the Team</h2>
                <p class="text-gray-800 text-lg leading-relaxed font-semibold">
                    We are a group of passionate developers and students from Nepal who understand the struggle
                    of finding a room in busy cities. Room Finder is our solution to that real-life problem.
                </p>
            </div>
        </div>
    </div>
</div>

<footer class="bg-gradient-to-r from-blue-900 to-blue-800 shadow-inner py-6 mt-12">
    <div class="max-w-7xl mx-auto px-4 text-center text-blue-200 text-sm font-medium select-none">
        &copy; 2025 RoomFinder. All rights reserved.
    </div>
</footer>
@endsection
