<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    public function run(): void
    {
        Contact::create([
            'email' => 'info@denpasarinstitute.com',
            'phone' => '087865309966',
            'address' => 'Jl. Ganetri IV No 4 Denpasar 80237 Bali',
            'google_maps_link' => 'https://maps.google.com/?q=Denpasar',
            'is_primary' => true,
        ]);

        Contact::create([
            'email' => 'info@denpasarinstitute.com',
            'phone' => '087865309966',
            'address' => 'Jl. Sari Dana I No. 1 Denpasar 80116 Bali',
            'google_maps_link' => 'https://maps.google.com/?q=Bali',
            'is_primary' => false,
        ]);
    }
}
