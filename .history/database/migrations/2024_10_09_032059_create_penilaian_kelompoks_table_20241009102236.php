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
        Schema::create('penilaian_kelompoks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('topik_pembahasan_kelas_id');
            $table->unsignedBigInteger('penilai_id');
            $table->unsignedBigInteger('mahasiswa_id');
            $table->text('pengalaman');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penilaian_kelompoks');
    }
};
