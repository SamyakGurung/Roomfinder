<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RoomFinder</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">

    <!-- Navbar -->
    <nav class="bg-white shadow p-4 flex justify-between items-center">
        <div class="text-xl font-bold text-blue-600">🏠 RoomFinder</div>
        <ul class="flex gap-6 text-gray-700 font-medium">
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('listings')}}">Listings</a></li>
            <li><a href="{{route('about')}}">About</a></li>
            <li><a href="{{route('contact')}}">Contact</a></li>
            <li><a href="{{route('login')}}">Login</a></li>
        </ul>
    </nav>

    
    
</body>
</html>
