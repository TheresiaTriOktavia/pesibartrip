<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('penginapan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agent_id')
                  ->nullable()
                  ->constrained('agents')
                  ->onDelete('cascade');
            
            $table->string('name');     // Nama penginapan
            $table->string('image');    // path gambar
            $table->string('location'); // Lokasi
            $table->decimal('rating', 2, 1)->nullable(); // Rating, misal 4.5
            $table->string('price_start')->nullable();   // Harga mulai
            $table->text('description')->nullable();     // Deskripsi
            $table->string('whatsapp')->nullable();      // No WA
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('penginapan');
    }
};
