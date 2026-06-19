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
    Schema::create('pesanan', function (Blueprint $table) {
        $table->id('id_pesanan');
        $table->integer('id_user')->nullable(); // Sesuaikan jika ingin relasi ke users
        $table->string('nama_customer', 100);
        $table->string('email_customer', 100);
        $table->string('hp_customer', 20);
        $table->text('alamat');
        $table->dateTime('tanggal_pesanan')->useCurrent();
        $table->integer('total_bayar');
        $table->string('status_pesanan', 50)->default('Menunggu Pembayaran');
        $table->string('ekspedisi', 50)->nullable();
        $table->string('no_resi', 50)->nullable();
        $table->string('bukti_pembayaran', 255)->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
};
