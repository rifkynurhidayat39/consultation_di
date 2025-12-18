<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();

            // Informasi utama
            $table->string('email')->nullable();
            $table->string('phone')->nullable();

            // Lokasi
            $table->string('address')->nullable();
            $table->text('google_maps_link')->nullable();

            // Penanda kontak utama
            $table->boolean('is_primary')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
