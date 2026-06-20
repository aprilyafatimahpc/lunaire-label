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
    Schema::create('users', function (Blueprint $table) {
        $table->id('id_user'); // ID unik
        $table->string('username', 50);
        $table->string('password', 255);
        $table->string('email', 100)->nullable();
        $table->string('nama_lengkap', 100)->nullable();
        $table->string('telepon', 20)->nullable();
        $table->text('alamat')->nullable();
        $table->enum('role', ['admin', 'pembeli'])->default('pembeli');
        $table->timestamps(); // Ini otomatis menambah kolom created_at dan updated_at
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
