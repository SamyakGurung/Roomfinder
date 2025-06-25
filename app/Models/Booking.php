<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    // Fields allowed for mass assignment
    protected $fillable = [
        'room_id',       // Foreign key to the booked room
        'user_id',       // Foreign key to the renter user
        'start_date',    // Booking start date
        'end_date',      // Booking end date
        'total_price',   // Total price for booking
        'status',        // Booking status: pending, approved, rejected
    ];

    // Cast fields to native data types
    protected $casts = [
        'start_date' => 'date',        // Convert to Carbon date
        'end_date' => 'date',          // Convert to Carbon date
        'total_price' => 'decimal:2',  // Price formatted with 2 decimals
    ];

    // Booking belongs to one room
    public function room() {
        return $this->belongsTo(Room::class);
    }

    // Booking belongs to one user (renter)
    public function user() {
        return $this->belongsTo(User::class);
    }
}
