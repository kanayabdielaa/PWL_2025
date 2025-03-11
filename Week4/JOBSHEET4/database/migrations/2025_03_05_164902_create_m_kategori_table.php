<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('m_kategori', function (Blueprint $table) {
            $table->id('kategori_id'); // Primary key
            $table->string('kategori_kode', 10); // Kode kategori
            $table->string('kategori_nama', 100); // Nama kategori
            $table->timestamps(); // created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('m_kategori');
    }
};
