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
        Schema::create('pengumpulan_tugas_kelompok_detail_nilais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pengumpulan_tugas_kelompok_id');
            $table->unsignedBigInteger('rubrik_id');
            $table->unsignedBigInteger('kelompok');
            $table->integer('nilai');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengumpulan_tugas_kelompok_detail_nilais');
    }
};
