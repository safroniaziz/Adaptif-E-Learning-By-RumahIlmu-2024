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
        Schema::create('diskusi_respons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('diskusi_id');
            $table->unsignedBigInteger('mahasiswa_id');
            $table->text('subjek');
            $table->text('pesan');
            $table->integer('nilai');
            $table->text('jenis_penilaian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diskusi_respons');
    }
};
