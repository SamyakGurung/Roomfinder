@extends('layout.app')

 @section('content')
    <h1>Available Rooms</h1>

<div class="container">
    <div class="room-grid">
       
            <div class="room-card">
                <img class="room-image" src="" alt="Room Image">
                <div class="room-details">
                    <div class="room-title"></div>
                    <div class="room-location"></div>
                    <div class="room-price"></div>
                    <div class="room-description">
                   
                    </div>
                    <a class="view-btn" href="#">View Details</a>
                </div>
            </div>
      
    </div>
</div>

 @endsection
