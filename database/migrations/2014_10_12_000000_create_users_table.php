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
            $table->integer('submit')->default(0);
            $table->string('nama_instansi')->nullable();
            $table->string('pass_view')->nullable();
            $table->integer('id_bagian')->nullable();
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
