    <nav class="bg-white shadow-md sticky top-0 z-50">
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
    </nav>