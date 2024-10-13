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
            $table->unsignedBigInteger('kuisioner_kelompok_kelas_id');
            $table->integer('nilai');

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('penilaian_kelompok_id', 'fk_penilaian_kelompok')
            ->references('id')->on('penilaian_kelompoks')
            ->onDelete('cascade');

            $table->foreign('rubrik_penilaian_id', 'fk_rubrik_penilaian_kelompok')
                  ->references('id')->on('rubrik_penilaians')
                  ->onDelete('cascade');
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
