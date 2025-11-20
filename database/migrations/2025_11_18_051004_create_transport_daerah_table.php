<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('transport_daerah', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agent_id')
                  ->nullable()
                  ->constrained('agents')
                  ->onDelete('cascade');

            $table->string('type');                // mobil, motor, penyeberangan
            $table->string('name');                // Nama agen
            $table->string('image');               // path gambar
            $table->string('location');            // Lokasi
            $table->decimal('rating', 2, 1)->nullable();  // Rating
            $table->string('price_range')->nullable();    // Kisaran harga
            $table->text('description')->nullable();      // Deskripsi singkat
            $table->string('whatsapp')->nullable();       // Nomor WA
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transport_daerah');
    }
};
