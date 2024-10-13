<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengumpulanTugasKelompokDetailNilai extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // SELECT a.id, b.id as pengumpulan_tugas_kelompok_id, a.rubrikId as rubrik_id, a.kelompok, a.grade as nilai, a.created_at, a.updated_at FROM `assignment_grade_histories` a join assignment_answer_files b on a.assignmentId = b.assignmentId WHERE a.kelompok = b.kelompok;

    }
}
