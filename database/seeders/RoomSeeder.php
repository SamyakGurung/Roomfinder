<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    public function run()
{
    \App\Models\Room::create([
        'title' => 'Cozy Apartment',
        'location' => 'Kathmandu',
        'description' => 'A nice cozy apartment in the city center.'
    ]);
    // Add more rooms if you want
}
}

    // public function run(): void
    // {
    //     Room::create([
    //         'title' => 'Cozy Apartment in Downtown',
    //         'description' => 'A comfortable apartment with 2 bedrooms and great view.',
    //         'price' => 500.00,
    //     ]);

    //     Room::create([
    //         'title' => 'Modern Studio',
    //         'description' => 'Compact and modern studio, perfect for singles.',
    //         'price' => 300.00,
    //     ]);


        
    // }
    // }

