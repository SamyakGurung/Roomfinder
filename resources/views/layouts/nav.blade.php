@extends('layout.app')

 @section('content')
  <header>
    <div class="navbar">
        <div class="logo">🏠 Room Finder</div>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('aboutus') }}">About</a></li>
                <li><a href="{{ route('listings') }}">Listings</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Sign Up</a></li>
                <li><a href="{{ route('search') }}">search</a></li>
            </ul>
        </nav>
    </div>
</header>
  @endsection
