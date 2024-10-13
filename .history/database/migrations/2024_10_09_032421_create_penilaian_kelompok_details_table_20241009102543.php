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
        Schema::create('penilaian_kelompok_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('penilaian_kelompok_id');
            $table->unsignedBigInteger('rubrik_penilaian_id');
            $table->integer('kelompok');
            $table->integer('nilai');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penilaian_kelompok_details');
    }
};
