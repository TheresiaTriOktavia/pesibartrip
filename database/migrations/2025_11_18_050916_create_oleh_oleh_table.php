<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('oleh_oleh', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agent_id')
                  ->nullable()
                  ->constrained('agents')
                  ->onDelete('cascade');

            $table->string('name');               // Nama toko / produk utama
            $table->string('image');              // path gambar
            $table->string('location');           // Lokasi
            $table->decimal('rating', 2, 1)->nullable(); // Rating
            $table->string('price_range')->nullable();   // Kisaran harga
            $table->text('description')->nullable();     // Deskripsi singkat
            $table->string('whatsapp')->nullable();      // Nomor WA
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('oleh_oleh');
    }
};
