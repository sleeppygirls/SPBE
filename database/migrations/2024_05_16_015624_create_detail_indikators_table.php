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
        Schema::create('detail_indikators', function (Blueprint $table) {
            $table->id();
            $table->string('file')->nullable();
            $table->string('username')->nullable();
            $table->string('id_indikator')->nullable();
            $table->string('capaian')->nullable();
            $table->string('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_indikators');
    }
};
