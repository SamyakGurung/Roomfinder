
@extends('layout.app')

 @section('content')

 <div class="background">
        <div class="content">
  <section class="hero">
    <h1>Find Your Room</h1>
    <div class="search-bar">
      <input type="text" placeholder="Location">
      <input type="text" placeholder="Price">
      <input type="text" placeholder="Room Type">
      <button>Search</button>
    </div>
  </section>

  <section class="features">
    <h2>Features</h2>
    <div class="feature-grid">
      <div class="feature">✅ Verified Listings</div>
      <div class="feature">🚫 No Agent Fee</div>
      <div class="feature">⭐ Reviews & Ratings</div>
      <div class="feature">📱 Easy Booking</div>
    </div>
  </section>

  <section class="how-it-works">
    <h2>How It Works</h2>
    <div class="steps">
      <div class="step">🔍 Search</div>
      <div class="step">📋 View Details</div>
      <div class="step">📞 Contact or Book</div>
    </div>
  </section>

  <section class="testimonial">
    <p>"I found my perfect room in 2 days!"</p>
  </section>
  

  <footer>
    <div class="footer-links">
      <a href="#">Contact Info</a>
      <a href="#">Quick Links</a>
      <a href="#">Social Media</a>
    </div>
  </footer>

  @endsection
  
