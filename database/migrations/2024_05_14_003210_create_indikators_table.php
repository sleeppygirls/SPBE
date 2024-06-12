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
        Schema::create('indikators', function (Blueprint $table) {
            $table->id();
            $table->integer('no')->nullable();
            $table->string('name');
            $table->decimal('bobot', 5,2)->default(0);
            $table->decimal('bobot_aspek', 5,2)->default(0);
            $table->integer('id_keterangan')->nullable();
            $table->integer('aspek')->nullable();
            $table->integer('domain')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('indikators');
    }
};
