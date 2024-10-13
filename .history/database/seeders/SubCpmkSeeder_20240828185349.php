<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCpmkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sub_cpmks = array(
            array('id' => '1','topik_pembahasan_id' => '50','sub_cpmk' => 'Mahasiswa mampu merincikan dasar deklarasi','created_at' => '2022-08-09 11:04:01','updated_at' => '2022-08-27 21:11:30'),
            array('id' => '3','topik_pembahasan_id' => '54','sub_cpmk' => 'Mahasiswa mampu menganalisis masalah operator','created_at' => '2022-08-27 21:10:39','updated_at' => '2022-08-27 21:10:39'),
            array('id' => '4','topik_pembahasan_id' => '54','sub_cpmk' => 'Mahasiswa mampu merekomendasikan ekspresi dan operator dalam menyelesaikan masalah','created_at' => '2022-08-27 21:10:57','updated_at' => '2022-08-27 21:10:57'),
            array('id' => '5','topik_pembahasan_id' => '50','sub_cpmk' => 'Mahasiswa mampu merincikan tipe data, jenis-jenis dan penggunaannya','created_at' => '2022-08-27 21:11:43','updated_at' => '2022-08-27 21:11:43'),
            array('id' => '6','topik_pembahasan_id' => '50','sub_cpmk' => 'Mahasiswa mampu menganalisis konversi tipe data dan implementasinya','created_at' => '2022-08-27 21:11:54','updated_at' => '2022-08-27 21:11:54'),
            array('id' => '7','topik_pembahasan_id' => '50','sub_cpmk' => 'Mahasiswa mampu merancang tipe data untuk permasalahan yang diberikan','created_at' => '2022-08-27 21:11:59','updated_at' => '2022-08-27 21:11:59'),
            array('id' => '8','topik_pembahasan_id' => '55','sub_cpmk' => 'Mahasiswa mampu menganalisis masalah operator','created_at' => '2022-08-27 21:41:21','updated_at' => '2022-09-07 11:40:35'),
            array('id' => '9','topik_pembahasan_id' => '55','sub_cpmk' => 'Mahasiswa mampu merekomendasikan ekspresi dan operator dalam menyelesaikan masalah','created_at' => '2022-08-27 21:41:28','updated_at' => '2022-09-07 11:40:46'),
            array('id' => '11','topik_pembahasan_id' => '51','sub_cpmk' => 'Mahasiswa mampu merincikan dasar deklarasi','created_at' => '2022-08-27 21:43:06','updated_at' => '2022-09-07 11:29:17'),
            array('id' => '12','topik_pembahasan_id' => '51','sub_cpmk' => 'Mahasiswa mampu merincikan tipe data, jenis-jenis dan penggunaannya','created_at' => '2022-08-27 21:43:13','updated_at' => '2022-09-07 11:30:24'),
            array('id' => '13','topik_pembahasan_id' => '51','sub_cpmk' => 'Mahasiswa mampu menganalisis konversi tipe data dan implementasinya','created_at' => '2022-08-27 21:43:20','updated_at' => '2022-09-07 11:30:41'),
            array('id' => '14','topik_pembahasan_id' => '51','sub_cpmk' => 'Mahasiswa mampu merancang tipe data untuk permasalahan yang diberikan','created_at' => '2022-08-27 21:43:28','updated_at' => '2022-09-07 11:31:15'),
            array('id' => '15','topik_pembahasan_id' => '57','sub_cpmk' => 'Mahasiswa mampu menjelaskan kelas, objek, dan method','created_at' => '2022-09-07 11:31:47','updated_at' => '2022-09-07 11:39:54'),
            array('id' => '16','topik_pembahasan_id' => '57','sub_cpmk' => 'Mahasiswa mampu menganalisis deklarasi kelas, objek, dan method','created_at' => '2022-09-07 11:32:01','updated_at' => '2022-09-07 11:40:07'),
            array('id' => '17','topik_pembahasan_id' => '57','sub_cpmk' => 'Jika diberikan permasalahan studi kasus, mahasiswa mampu mengevaluasi dan menyusun kembali kelas dan method berdasarkan permasalahan tersebut','created_at' => '2022-09-07 11:32:18','updated_at' => '2022-09-07 11:40:22'),
            array('id' => '18','topik_pembahasan_id' => '56','sub_cpmk' => 'Mahasiswa mampu menjelaskan kelas, objek, dan method','created_at' => '2022-09-07 11:42:19','updated_at' => '2022-09-07 11:42:19'),
            array('id' => '19','topik_pembahasan_id' => '56','sub_cpmk' => 'Mahasiswa mampu menganalisis deklarasi kelas, objek, dan method','created_at' => '2022-09-07 11:42:38','updated_at' => '2022-09-07 11:42:38'),
            array('id' => '20','topik_pembahasan_id' => '56','sub_cpmk' => 'Jika diberikan permasalahan studi kasus, mahasiswa mampu mengevaluasi dan menyusun kembali kelas dan method berdasarkan permasalahan tersebut','created_at' => '2022-09-07 11:42:59','updated_at' => '2022-09-07 11:42:59'),
            array('id' => '21','topik_pembahasan_id' => '59','sub_cpmk' => '<p>Mahasiswa mampu menganalisis dan membandingkan penggunaan perulangan IF, IF &ndash; ELSE</p>','created_at' => '2022-09-17 12:56:13','updated_at' => '2022-09-17 12:56:13'),
            array('id' => '22','topik_pembahasan_id' => '59','sub_cpmk' => 'Mahasiswa mampu mengembangkan implementasi kondisi dengan perulangan yang tidak bersarang dan bersarang dengan IF, IF ELSE','created_at' => '2022-09-17 12:56:22','updated_at' => '2022-09-24 21:18:32'),
            array('id' => '23','topik_pembahasan_id' => '59','sub_cpmk' => 'Mahasiswa mampu menganalisis dan membandingkan penggunaan perulangan SWITCH dan CAS','created_at' => '2022-09-17 12:56:27','updated_at' => '2022-09-24 21:18:51'),
            array('id' => '24','topik_pembahasan_id' => '59','sub_cpmk' => 'Mahasiswa mampu mengembangkan implementasi kondisi dengan perulangan yang tidak bersarang dan bersarang dengan SWITCH dan CASE','created_at' => '2022-09-17 12:56:32','updated_at' => '2022-09-24 21:18:56'),
            array('id' => '25','topik_pembahasan_id' => '60','sub_cpmk' => 'Mahasiswa mampu menganalisis dan membandingkan penggunaan perulangan IF, IF ELSE','created_at' => '2022-09-17 12:56:51','updated_at' => '2022-09-24 21:18:19'),
            array('id' => '26','topik_pembahasan_id' => '60','sub_cpmk' => 'Mahasiswa mampu mengembangkan implementasi kondisi dengan perulangan yang tidak bersarang dan bersarang dengan IF, IF  ELSE','created_at' => '2022-09-17 12:56:56','updated_at' => '2022-09-24 21:19:38'),
            array('id' => '27','topik_pembahasan_id' => '60','sub_cpmk' => 'Mahasiswa mampu menganalisis dan membandingkan penggunaan perulangan SWITCH dan CASE','created_at' => '2022-09-17 12:57:00','updated_at' => '2022-09-24 21:19:37'),
            array('id' => '28','topik_pembahasan_id' => '60','sub_cpmk' => 'Mahasiswa mampu mengembangkan implementasi kondisi dengan perulangan yang tidak bersarang dan bersarang dengan SWITCH dan CASE','created_at' => '2022-09-17 12:57:05','updated_at' => '2022-09-24 21:19:44'),
            array('id' => '30','topik_pembahasan_id' => '61','sub_cpmk' => 'Mahasiswa mampu menganalisis penggunaan perulangan FOR','created_at' => '2022-09-24 21:10:14','updated_at' => '2022-09-24 21:17:20'),
            array('id' => '31','topik_pembahasan_id' => '61','sub_cpmk' => 'Mahasiswa mampu mengembangkan kondisi dengan perulangan yang tidak bersarang dan bersarang dengan FOR','created_at' => '2022-09-24 21:10:19','updated_at' => '2022-09-24 21:17:32'),
            array('id' => '32','topik_pembahasan_id' => '61','sub_cpmk' => 'Mahasiswa mampu menganalisis penggunaan perulangan WHILE, DO  WHILE','created_at' => '2022-09-24 21:10:24','updated_at' => '2022-09-24 21:17:49'),
            array('id' => '33','topik_pembahasan_id' => '61','sub_cpmk' => 'Mahasiswa mampu mengembangkan kondisi dengan perulangan yang tidak bersarang dan bersarang dengan WHILE, DO  WHILE','created_at' => '2022-09-24 21:10:29','updated_at' => '2022-09-24 21:17:57'),
            array('id' => '34','topik_pembahasan_id' => '62','sub_cpmk' => 'Mahasiswa mampu menganalisis penggunaan perulangan FOR','created_at' => '2022-09-24 21:13:07','updated_at' => '2022-09-24 21:13:07'),
            array('id' => '35','topik_pembahasan_id' => '62','sub_cpmk' => 'Mahasiswa mampu mengembangkan kondisi dengan perulangan yang tidak bersarang dan bersarang dengan FOR','created_at' => '2022-09-24 21:13:21','updated_at' => '2022-09-24 21:13:21'),
            array('id' => '36','topik_pembahasan_id' => '62','sub_cpmk' => 'Mahasiswa mampu menganalisis penggunaan perulangan WHILE, DO  WHILE','created_at' => '2022-09-24 21:13:34','updated_at' => '2022-09-24 21:14:28'),
            array('id' => '37','topik_pembahasan_id' => '62','sub_cpmk' => 'Mahasiswa mampu mengembangkan kondisi dengan perulangan yang tidak bersarang dan bersarang dengan WHILE, DO WHILE','created_at' => '2022-09-24 21:13:49','updated_at' => '2022-09-24 21:14:14'),
            array('id' => '40','topik_pembahasan_id' => '63','sub_cpmk' => '<p>Mahasiswa mampu memahami perbedaan&nbsp;fakta dan opini</p>','created_at' => '2024-04-01 07:24:46','updated_at' => '2024-04-01 07:24:46'),
            array('id' => '41','topik_pembahasan_id' => '63','sub_cpmk' => '<p>Mahasiswa mampu mengidentifikasi kalimat&nbsp;fakta dan opini</p>','created_at' => '2024-04-01 07:25:13','updated_at' => '2024-04-01 07:25:13'),
            array('id' => '42','topik_pembahasan_id' => '63','sub_cpmk' => '<p>Mahasiswa mampu menuliskan kembali dan mengembangkan kalimat opini</p>','created_at' => '2024-04-01 07:25:47','updated_at' => '2024-04-01 07:25:47'),
            array('id' => '43','topik_pembahasan_id' => '103','sub_cpmk' => '<p><span dir="ltr" lang="IN" style="font-size:11.0pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">Mampu menganalisis algoritma, tipe data, dan ekspresi dalam pemrograman Java</span></span></span> <span dir="ltr" lang="EN-US" style="font-size:11.0pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">(C4, A3, P2)</span></span></span></p>','created_at' => '2024-08-16 13:20:31','updated_at' => '2024-08-16 13:20:31'),
            array('id' => '44','topik_pembahasan_id' => '104','sub_cpmk' => '<p><span dir="ltr" lang="IN" style="font-size:11.0pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">Mampu mengevaluasi penggunaan macam-macam operator, konstanta, dan kombinasi konstanta dengan operator pada Java</span></span></span><span dir="ltr" lang="EN-US" style="font-size:11.0pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">&nbsp; (C5, A4, P3)</span></span></span></p>','created_at' => '2024-08-16 13:21:20','updated_at' => '2024-08-16 13:21:20'),
            array('id' => '45','topik_pembahasan_id' => '105','sub_cpmk' => '<p><span dir="ltr" lang="IN" style="font-size:11.0pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">Mampu menganalisis kelas, objek, dan method pemrograman Java</span></span></span><span dir="ltr" lang="EN-US" style="font-size:11.0pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black"> (C4, A3, P2)</span></span></span></p>','created_at' => '2024-08-16 13:21:47','updated_at' => '2024-08-16 13:21:47'),
            array('id' => '46','topik_pembahasan_id' => '106','sub_cpmk' => '<p><span dir="ltr" lang="IN" style="font-size:11.0pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">Mampu menganalisis penggunaan kontrol percabangan dan perulangan Java</span></span></span><span dir="ltr" lang="EN-US" style="font-size:11.0pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black"> (C4, A3, P2)</span></span></span></p>','created_at' => '2024-08-16 13:22:04','updated_at' => '2024-08-16 13:22:04'),
            array('id' => '47','topik_pembahasan_id' => '107','sub_cpmk' => '<p><span dir="ltr" lang="IN" style="font-size:11.0pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">Mampu menganalisis penggunaan kontrol percabangan dan perulangan Java</span></span></span><span dir="ltr" lang="EN-US" style="font-size:11.0pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black"> (C4, A3, P2)</span></span></span></p>','created_at' => '2024-08-16 13:22:15','updated_at' => '2024-08-16 13:22:15')
        );

        foreach ($sub_cpmks as $sub_cpmk) {
            DB::table('sub_cpmks')->insert($sub_cpmk);
        }
    }
}
