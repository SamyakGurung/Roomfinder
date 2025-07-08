<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>RoomFinder - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">RoomFinder</a>
    <div>
      <ul class="navbar-nav me-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('listings.index') }}">Listings</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('bookings.index') }}">Bookings</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('histories.index') }}">Histories</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('images.index') }}">Images</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('reviews.index') }}">Reviews</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('contact.index') }}">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    @yield('content')
</div>

</body>
</html>
