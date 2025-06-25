<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    // Fields allowed for mass assignment
    protected $fillable = [
        'user_id',       // Foreign key: Owner (landlord) user ID
        'room_number',   // Room number identifier
        'location',      // Location of the room (city/area)
        'type',          // Room type (single, double, flat)
        'description',   // Optional room description
        'price',         // Price of room per time unit
        'floor',         // Floor number (optional)
        'capacity',      // Max capacity of people
        'is_available',  // Availability status (true/false)
        'image',  
        'room_number', 'location', 'price'       // Image filename or path (optional)
    ];

    // Cast columns to native types automatically
    protected $casts = [
        'is_available' => 'boolean',   // Convert to boolean
        'price' => 'decimal:2',        // Format price with 2 decimals
    ];


    // Each room belongs to one user (landlord)
    public function user() {
        return $this->belongsTo(User::class);
    }

    // One room can have many bookings
    public function bookings() {
        return $this->hasMany(Booking::class);
    }
}
