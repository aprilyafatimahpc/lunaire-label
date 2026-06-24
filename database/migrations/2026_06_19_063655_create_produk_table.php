<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('produk', function (Blueprint $table) {
        $table->id('id_produk');
        $table->unsignedBigInteger('id_kategori');
        $table->string('nama_barang', 100);
        $table->integer('harga');
        $table->text('deskripsi')->nullable();
        $table->string('foto', 255)->nullable();
        $table->timestamps();

        $table->foreign('id_kategori')->references('id_kategori')->on('kategori');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};