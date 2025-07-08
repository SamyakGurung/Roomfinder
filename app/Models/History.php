<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'action',      // e.g., created, updated, cancelled
        'notes',
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}

