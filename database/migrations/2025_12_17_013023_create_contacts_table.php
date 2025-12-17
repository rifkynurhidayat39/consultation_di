<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();

            // info utama
            $table->string('email')->nullable();
            $table->string('phone')->nullable();

            // lokasi
            $table->string('address');
            $table->string('google_maps_link')->nullable();

            // penanda lokasi utama (opsional)
            $table->boolean('is_primary')->default(false);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
