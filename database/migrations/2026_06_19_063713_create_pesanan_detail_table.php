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
    Schema::create('pesanan_detail', function (Blueprint $table) {
        $table->id('id_detail');
        $table->unsignedBigInteger('id_pesanan');
        $table->unsignedBigInteger('id_produk');
        $table->string('ukuran', 20)->nullable();
        $table->integer('jumlah');
        $table->integer('subtotal');
        $table->timestamps();

        $table->foreign('id_pesanan')->references('id_pesanan')->on('pesanan');
        $table->foreign('id_produk')->references('id_produk')->on('produk');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan_detail');
    }
};
