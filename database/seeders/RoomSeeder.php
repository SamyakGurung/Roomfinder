<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    public function run()
{
    Room::create([
    'title' => 'Spacious Single Room',
    'description' => 'Perfect for students or working professionals.',
    'location' => 'Kathmandu, Baneshwor',
    'type' => 'Single Room',
    'price' => 5000,
    'image' => 'room1.jpg',
    'user_id' => 1,
]);
}
}