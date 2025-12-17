<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sambutan;

class SambutanSeeder extends Seeder
{
    public function run()
    {
        // Hapus dulu data lama (opsional, jika mau reset)
        // Sambutan::truncate();

        // Buat data default
        Sambutan::updateOrCreate(
            ['id' => 1], // pastikan id tetap 1
            [
                'title' => 'Resep',
                'description' => 'Resep masakan untuk anjing...',
                'image' => 'sambutan/kritik.png', // simpan di storage/app/public/sambutan
            ]
        );
    }
}
