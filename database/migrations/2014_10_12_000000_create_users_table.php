<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username', 190)->unique();
            $table->string('password');
            $table->enum('level', ['superadmin','admin','user']);
            $table->string('kd_instansi');
            $table->string('nama_instansi');
            $table->string('kategori_instansi');
            $table->string('akronim');
            $table->integer('status')->default(0);
            $table->string('nm_pengguna');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
