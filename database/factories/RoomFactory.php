<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class RoomFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph,
            'price' => $this->faker->numberBetween(5000, 20000),
            'location' => $this->faker->city,
            'image' => 'default.jpg', // or fake image path
        ];
    }
}

