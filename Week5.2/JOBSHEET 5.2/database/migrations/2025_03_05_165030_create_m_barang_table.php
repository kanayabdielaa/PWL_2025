<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('m_barang', function (Blueprint $table) {
            $table->id('barang_id'); // Primary key
            $table->unsignedBigInteger('kategori_id'); // Foreign key ke kategori
            $table->string('barang_kode', 10); // Kode barang
            $table->string('barang_nama', 100); // Nama barang
            $table->integer('harga_beli'); // Harga beli
            $table->integer('harga_jual'); // Harga jual
            $table->timestamps(); // created_at dan updated_at

            // Foreign key constraint
            $table->foreign('kategori_id')->references('kategori_id')->on('m_kategori')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('m_barang');
    }
};
