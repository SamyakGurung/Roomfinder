@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>RoomFinder</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="icon" href="{{ asset('images/roomimages/logoo.png') }}" type="image/jpeg" />

</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <!-- <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <span class="text-2xl font-bold text-gray-700"></span>
                <a href="/">
                                    <img src="{{ asset('images/roomimages/logoo.png') }}" alt="RoomFinder Logo" class="h-14 object-contain" />  <a href="{{ route('home') }}" class="hover:text-blue-600">RoomFinder</a>
                </a>

            </div>
            <div class="space-x-6 text-blue-900 font-medium">
                <a href="{{ route('home') }}" class="hover:text-blue-600">Home</a>
                <a href="{{ route('listings') }}" class="hover:text-blue-600">Listings</a>
                <a href="{{ route('aboutus') }}" class="hover:text-blue-600">About</a>
                <a href="{{ route('contact') }}" class="hover:text-blue-600">Contact</a>
                <a href="{{ route('login') }}" class="hover:text-blue-600">Login</a>
            </div>
        </div>
    </nav> -->

    <x-navbar />

    
    <section class="relative bg-cover bg-center h-[400px]" style="background-image: url('{{ asset('images/roomimages/kathmandu-valley.jpg') }}');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center text-white text-center px-4">
            <h1 class="text-4xl md:text-5xl font-bold mb-2">FIND YOUR ROOM</h1>
            <p class="text-lg md:text-xl mb-6">Search for the perfect rental room</p>

            <form action="{{ route('rooms.search') }}" method="GET" class="bg-white rounded-lg shadow-md p-4 flex flex-col md:flex-row gap-2 md:gap-4">
                <select name="location" class="border px-4 py-2 rounded w-full md:w-auto text-gray-800">
                    <option value="">Location</option>
                    <option value="Kathmandu">Kathmandu</option>
                    <option value="Lalitpur">Lalitpur</option>
                    <option value="Bhaktapur">Bhaktapur</option>
                </select>
                <select name="price" class="border px-4 py-2 rounded w-full md:w-auto text-gray-800">
                    <option value="">Price Range</option>
                    <option value="5000">Under Rs. 5000</option>
                    <option value="10000">Rs. 5000 - Rs. 10000</option>
                    <option value="10001">Above Rs. 10000</option>
                </select>
                <select name="type" class="border px-4 py-2 rounded w-full md:w-auto text-gray-800">
                    <option value="">Room Type</option>
                    <option value="Single Room">Single Room</option>
                    <option value="Double Room">Double Room</option>
                    <option value="2BHK">2BHK</option>
                </select>
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded">
                   Search
                </button>
            </form>
        </div>
    </section>

    
    <section class="max-w-7xl mx-auto px-4 py-12">
        <h2 class="text-2xl font-bold mb-6">Latest Listings</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            <div class="bg-white shadow-md rounded-lg overflow-hidden transform hover:scale-105 transition duration-300">
                <img src="{{ asset('images/roomimages/kitchen.jpg') }}" alt="Room" class="w-full h-48 object-cover" />
                <div class="p-4">
                    <p class="text-lg font-semibold">Rs. 5000/month</p>
                    <p class="text-sm text-gray-600">Kathmandu, Baneshwor</p>
                    <p class="text-sm text-gray-600 mb-2">Single Room</p>
                    <a href="{{ route('view-details', 1) }}">
                        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">View Details</button>
                    </a>
                </div>
            </div>

<div class="bg-white shadow-md rounded-lg overflow-hidden transform hover:scale-105 transition duration-300">
                <img src="{{ asset('images/roomimages/hall.jpg') }}" alt="Room" class="w-full h-48 object-cover" />
                <div class="p-4">
                    <p class="text-lg font-semibold">Rs. 10000/month</p>
                    <p class="text-sm text-gray-600">kritipur</p>
                    <p class="text-sm text-gray-600 mb-2"> double Room</p>
                    <a href="{{ route('view-details', 1) }}">
                        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">View Details</button>
                    </a>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-lg overflow-hidden transform hover:scale-105 transition duration-300">
                <img src="{{ asset('images/roomimages/kushal.jpg') }}" alt="Room" class="w-full h-48 object-cover" />
                <div class="p-4">
                    <p class="text-lg font-semibold">Rs. 8000/month</p>
                    <p class="text-sm text-gray-600">bhaktpur</p>
                    <p class="text-sm text-gray-600 mb-2">Single Room</p>
                    <a href="{{ route('view-details', 1) }}">
                        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">View Details</button>
                    </a>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-lg overflow-hidden transform hover:scale-105 transition duration-300">
                <img src="{{ asset('images/roomimages/image10.jpg') }}" alt="Room" class="w-full h-48 object-cover" />
                <div class="p-4">
                    <p class="text-lg font-semibold">Rs. 12000/month</p>
                    <p class="text-sm text-gray-600">lalitpur, patan</p>
                    <p class="text-sm text-gray-600 mb-2">2 BKH</p>
                    <a href="{{ route('view-details', 1) }}">
                        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">View Details</button>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <footer class="bg-gradient-to-r from-blue-900 to-blue-800 shadow-inner py-6 mt-12">
    <div class="max-w-7xl mx-auto px-4 text-center text-blue-200 text-sm font-medium select-none">
        &copy; 2025 RoomFinder. All rights reserved.
    </div>
</footer>




</body>
</html>
@endsection

