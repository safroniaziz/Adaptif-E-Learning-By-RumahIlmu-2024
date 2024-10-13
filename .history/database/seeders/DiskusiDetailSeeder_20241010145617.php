<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiskusiDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            // SELECT a.id, a.forumId as diskusi_id, a.userId as mahasiswa_id, a.subject as subjek, a.message as pesan, b.nilai, b.jenis_penilaian, b.updated_at as tanggal_dinilai, a.created_at, a.updated_at FROM `forum_details` a join forum_penilaians b on a.forumId = b.forumId;


    }
}
