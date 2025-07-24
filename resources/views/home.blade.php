
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RoomFinder</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold text-blue-600 flex items-center space-x-2">
                <svg class="w-6 h-6 text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 3l8 8h-5v8h-6v-8H4l8-8z" />
                </svg>
                <span>RoomFinder</span>
            </div>
            <div class="space-x-6 text-gray-700 font-medium">
                <a href="{{route('home')}}" class="hover:text-blue-600">Home</a>
                <a href="{{route('listings')}}" class="hover:text-blue-600">Listings</a>
                <a href="{{route('aboutus')}}" class="hover:text-blue-600">About</a>
                <a href="{{route('contact')}}" class="hover:text-blue-600">Contact</a>
                <a href="{{route('login')}}" class="hover:text-blue-600">Login</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative bg-cover bg-center h-[400px]" style="background-image: url('images/roomimages/kathmandu-valley.jpg');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center text-white text-center px-4">
            <h1 class="text-4xl md:text-5xl font-bold mb-2">FIND YOUR ROOM</h1>
            <p class="text-lg md:text-xl mb-6">Search for the perfect rental room</p>

            <div class="bg-white rounded-lg shadow-md p-4 flex flex-col md:flex-row gap-2 md:gap-4">
                <select class="border px-4 py-2 rounded w-full md:w-auto">
                    <option>Location</option>
                    <option>Kathmandu</option>
                    <option>Lalitpur</option>
                    <option>Bhaktapur</option>
                </select>
                <select class="border px-4 py-2 rounded w-full md:w-auto">
                    <option>Price Range</option>
                    <option>Under Rs. 5000</option>
                    <option>Rs. 5000 - Rs. 10000</option>
                    <option>Above Rs. 10000</option>
                </select>
                <select class="border px-4 py-2 rounded w-full md:w-auto">
                    <option>Room Type</option>
                    <option>Single Room</option>
                    <option>Double Room</option>
                     <option>2BKH</option>
                </select>
                <button class="bg-blue-600 hover:bg-blue-700 text-black font-semibold px-6 py-2 rounded">Search</button>
            </div>
        </div>
    </section>

    <!-- Listings -->
    <section class="max-w-7xl mx-auto px-4 py-12">
        <h2 class="text-2xl font-bold mb-6">Latest Listings</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            <!-- Card 1 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="images/roomimages/kitchen.jpg" alt="Room" class="w-full h-48 object-cover">
                <div class="p-4">
                    <p class="text-lg font-semibold">Rs. 5000/month</p>
                    <p class="text-sm text-gray-600">Kathmandu, Baneshwor</p>
                    <p class="text-sm text-gray-600 mb-2">Single Room</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">View Details</button>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="images/roomimages/hall.jpg" alt="Room" class="w-full h-48 object-cover">
                <div class="p-4">
                    <p class="text-lg font-semibold">Rs. 8000/month</p>
                    <p class="text-sm text-gray-600">Kathmandu, Jawalakhel</p>
                    <p class="text-sm text-gray-600 mb-2">Double Room</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">View Details</button>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="images/roomimages/kushal.jpg" alt="Room" class="w-full h-48 object-cover">
                <div class="p-4">
                    <p class="text-lg font-semibold">Rs. 6000/month</p>
                    <p class="text-sm text-gray-600">Kathmandu</p>
                    <p class="text-sm text-gray-600 mb-2">Single Room</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">View Details</button>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="images/roomimages/alex.jpg" alt="Room" class="w-full h-48 object-cover">
                <div class="p-4">
                    <p class="text-lg font-semibold">Rs. 5500/month</p>
                    <p class="text-sm text-gray-600">Kathmandu</p>
                    <p class="text-sm text-gray-600 mb-2">Single Room</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">View Details</button>
                </div>
            </div>

        </div>
    </section>

</body>
</html>

