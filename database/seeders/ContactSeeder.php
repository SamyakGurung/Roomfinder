<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    public function run()
    {
        Contact::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '1234567890',
        ]);

        Contact::create([
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'phone' => '0987654321',
        ]);
    }
}
