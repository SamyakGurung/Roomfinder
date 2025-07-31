<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room; // ✅ THIS LINE IS IMPORTANT

class RoomSeeder extends Seeder
{
    public function run()
    {
        Room::create([
            'title' => 'Spacious Single Room',
            'description' => 'Perfect for students or working professionals.',
            'location' => 'Kathmandu, Baneshwor',
            'type' => 'Single Room',
            'price' => 15000
        ]);
    }
}
