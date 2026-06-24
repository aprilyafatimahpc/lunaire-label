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
    Schema::create('produk_stok', function (Blueprint $table) {
        $table->id('id_stok');
        $table->unsignedBigInteger('id_produk');
        $table->string('ukuran', 10);
        $table->integer('jumlah_stok')->default(0);
        $table->timestamps();

        $table->foreign('id_produk')->references('id_produk')->on('produk');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk_stok');
    }
};