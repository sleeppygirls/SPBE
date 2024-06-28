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
        Schema::create('aspeks', function (Blueprint $table) {
            $table->id();
            $table->string('aspek')->nullable();
            $table->bigInteger('id_domain')->nullable();
            // $table->decimal('bobot_a', 5,2)->default(0);
            // $table->decimal('bobot_aspeka', 5,2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aspeks');
    }
};
