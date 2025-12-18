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
                'title' => 'Selamat Datang di Consultation Denpasar Institute',
                'description' => 'Kami adalah mitra terpercaya Anda dalam konsultasi pendidikan, pertukaran pelajar, dan pengembangan karir global. Bergabunglah dengan kami untuk membuka peluang dunia yang tak terbatas.',
                'image' => null, // bisa diisi nanti jika ada gambar
            ]
        );
    }
}
