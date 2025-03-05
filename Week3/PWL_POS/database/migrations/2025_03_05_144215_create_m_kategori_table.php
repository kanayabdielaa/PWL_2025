<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('m_kategori', function (Blueprint $table) {
            $table->id(); // Primary Key (Auto Increment)
            $table->string('nama_kategori', 100); // Nama kategori dengan panjang maksimal 100 karakter
            $table->text('deskripsi')->nullable(); // Deskripsi kategori, bisa null
            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('m_kategori');
    }
};