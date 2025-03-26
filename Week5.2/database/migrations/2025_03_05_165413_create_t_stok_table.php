<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('t_stok', function (Blueprint $table) {
            $table->id('stok_id'); // Primary key
            $table->unsignedBigInteger('barang_id'); // Foreign key ke barang
            $table->unsignedBigInteger('user_id'); // Foreign key ke user
            $table->dateTime('stok_tanggal'); // Tanggal stok
            $table->integer('stok_jumlah'); // Jumlah stok
            $table->timestamps(); // created_at dan updated_at

            // Foreign key constraints
            $table->foreign('barang_id')->references('barang_id')->on('m_barang')->onDelete('cascade');
            $table->foreign('user_id')->references('user_id')->on('m_user')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('t_stok');
    }
};
