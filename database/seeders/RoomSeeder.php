<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Room::create([
            'title' => 'Cozy Apartment in Downtown',
            'description' => 'A comfortable apartment with 2 bedrooms and great view.',
            'price' => 500.00,
        ]);

        Room::create([
            'title' => 'Modern Studio',
            'description' => 'Compact and modern studio, perfect for singles.',
            'price' => 300.00,
        ]);
    }
    }

