<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // user dummy (opsional)
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
        ]);

        // PANGGIL CONTACT SEEDER
        $this->call([
            ContactSeeder::class,
        ]);
    }
}
