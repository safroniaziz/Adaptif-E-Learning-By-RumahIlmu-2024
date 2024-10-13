<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KuisMateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //quizes

        $quizzes = array(
            array('id' => '2','materi_id' => '71','waktu_mulai' => '2022-08-15 00:00:00','waktu_selesai' => '2022-09-04 00:00:00','jenis_kuis' => 'posttest','created_at' => '2022-08-09 12:39:32','updated_at' => '2022-09-04 09:21:31'),
            array('id' => '4','materi_id' => '73','waktu_mulai' => '2022-08-15 00:00:00','waktu_selesai' => '2022-09-04 00:00:00','jenis_kuis' => 'posttest','created_at' => '2022-08-09 15:29:55','updated_at' => '2022-09-04 09:20:31'),
            array('id' => '5','materi_id' => '74','waktu_mulai' => '2022-08-15 00:00:00','waktu_selesai' => '2022-08-31 00:00:00','jenis_kuis' => 'posttest','created_at' => '2022-08-09 15:35:37','updated_at' => '2022-08-09 15:35:37'),
            array('id' => '6','materi_id' => '75','waktu_mulai' => '2022-08-15 00:00:00','waktu_selesai' => '2022-08-31 00:00:00','jenis_kuis' => 'posttest','created_at' => '2022-08-09 15:44:35','updated_at' => '2022-08-09 15:44:35'),
            array('id' => '7','materi_id' => '76','waktu_mulai' => '2022-08-15 00:00:00','waktu_selesai' => '2022-09-04 00:00:00','jenis_kuis' => 'posttest','created_at' => '2022-08-09 15:44:39','updated_at' => '2022-09-04 09:20:50'),
            array('id' => '9','materi_id' => '74','waktu_mulai' => '2022-08-15 00:00:00','waktu_selesai' => '2022-08-31 00:00:00','jenis_kuis' => 'pretest','created_at' => '2022-08-11 11:38:10','updated_at' => '2022-08-16 18:03:47'),
            array('id' => '10','materi_id' => '73','waktu_mulai' => '2022-08-15 00:00:00','waktu_selesai' => '2022-09-03 00:00:00','jenis_kuis' => 'pretest','created_at' => '2022-08-11 11:41:00','updated_at' => '2022-08-30 08:51:52'),
            array('id' => '11','materi_id' => '71','waktu_mulai' => '2022-08-15 00:00:00','waktu_selesai' => '2022-08-31 00:00:00','jenis_kuis' => 'pretest','created_at' => '2022-08-11 11:49:39','updated_at' => '2022-08-16 18:04:39'),
            array('id' => '12','materi_id' => '76','waktu_mulai' => '2022-08-15 00:00:00','waktu_selesai' => '2022-08-31 00:00:00','jenis_kuis' => 'pretest','created_at' => '2022-08-11 11:52:11','updated_at' => '2022-08-16 18:05:04'),
            array('id' => '13','materi_id' => '75','waktu_mulai' => '2022-08-15 00:00:00','waktu_selesai' => '2022-08-31 00:00:00','jenis_kuis' => 'pretest','created_at' => '2022-08-11 11:55:25','updated_at' => '2022-08-16 18:04:01'),
            array('id' => '14','materi_id' => '77','waktu_mulai' => '2022-08-15 00:00:00','waktu_selesai' => '2022-08-31 00:00:00','jenis_kuis' => 'pretest','created_at' => '2022-08-11 19:48:30','updated_at' => '2022-08-16 18:03:13'),
            array('id' => '15','materi_id' => '77','waktu_mulai' => '2022-08-15 00:00:00','waktu_selesai' => '2022-08-31 00:00:00','jenis_kuis' => 'posttest','created_at' => '2022-08-11 19:48:53','updated_at' => '2022-08-16 18:03:22'),
            array('id' => '17','materi_id' => '82','waktu_mulai' => '2022-08-28 00:00:00','waktu_selesai' => '2022-09-04 00:00:00','jenis_kuis' => 'pretest','created_at' => '2022-08-27 23:03:56','updated_at' => '2022-08-27 23:03:56'),
            array('id' => '18','materi_id' => '82','waktu_mulai' => '2022-08-28 00:00:00','waktu_selesai' => '2022-09-12 00:00:00','jenis_kuis' => 'posttest','created_at' => '2022-08-27 23:04:13','updated_at' => '2022-09-11 18:10:45'),
            array('id' => '19','materi_id' => '84','waktu_mulai' => '2022-08-28 00:00:00','waktu_selesai' => '2022-09-04 00:00:00','jenis_kuis' => 'pretest','created_at' => '2022-08-27 23:15:36','updated_at' => '2022-08-27 23:15:36'),
            array('id' => '20','materi_id' => '84','waktu_mulai' => '2022-08-28 00:00:00','waktu_selesai' => '2022-09-12 00:00:00','jenis_kuis' => 'posttest','created_at' => '2022-08-27 23:16:51','updated_at' => '2022-09-11 18:10:54'),
            array('id' => '21','materi_id' => '86','waktu_mulai' => '2022-08-28 00:00:00','waktu_selesai' => '2022-09-04 00:00:00','jenis_kuis' => 'pretest','created_at' => '2022-08-27 23:17:16','updated_at' => '2022-08-27 23:17:16'),
            array('id' => '22','materi_id' => '86','waktu_mulai' => '2022-08-28 00:00:00','waktu_selesai' => '2022-09-12 00:00:00','jenis_kuis' => 'posttest','created_at' => '2022-08-27 23:17:27','updated_at' => '2022-09-11 18:11:03'),
            array('id' => '23','materi_id' => '81','waktu_mulai' => '2022-09-04 00:00:00','waktu_selesai' => '2022-09-08 00:00:00','jenis_kuis' => 'pretest','created_at' => '2022-09-05 10:02:23','updated_at' => '2022-09-05 10:02:23'),
            array('id' => '24','materi_id' => '81','waktu_mulai' => '2022-09-07 00:00:00','waktu_selesai' => '2022-09-12 00:00:00','jenis_kuis' => 'posttest','created_at' => '2022-09-05 10:03:56','updated_at' => '2022-09-11 18:11:12'),
            array('id' => '25','materi_id' => '83','waktu_mulai' => '2022-09-04 00:00:00','waktu_selesai' => '2022-09-07 00:00:00','jenis_kuis' => 'pretest','created_at' => '2022-09-05 10:08:56','updated_at' => '2022-09-05 10:08:56'),
            array('id' => '26','materi_id' => '85','waktu_mulai' => '2022-09-04 00:00:00','waktu_selesai' => '2022-09-08 00:00:00','jenis_kuis' => 'pretest','created_at' => '2022-09-05 10:13:59','updated_at' => '2022-09-05 10:13:59'),
            array('id' => '27','materi_id' => '85','waktu_mulai' => '2022-09-07 00:00:00','waktu_selesai' => '2022-09-12 00:00:00','jenis_kuis' => 'posttest','created_at' => '2022-09-05 10:17:53','updated_at' => '2022-09-11 18:11:30'),
            array('id' => '28','materi_id' => '83','waktu_mulai' => '2022-09-07 00:00:00','waktu_selesai' => '2022-09-12 00:00:00','jenis_kuis' => 'posttest','created_at' => '2022-09-05 10:19:57','updated_at' => '2022-09-11 18:11:21'),
            array('id' => '29','materi_id' => '87','waktu_mulai' => '2022-09-10 00:00:00','waktu_selesai' => '2022-09-14 00:00:00','jenis_kuis' => 'pretest','created_at' => '2022-09-10 09:12:44','updated_at' => '2022-09-10 09:12:44'),
            array('id' => '30','materi_id' => '88','waktu_mulai' => '2022-09-10 00:00:00','waktu_selesai' => '2022-09-14 00:00:00','jenis_kuis' => 'pretest','created_at' => '2022-09-10 09:13:10','updated_at' => '2022-09-10 09:13:10'),
            array('id' => '31','materi_id' => '87','waktu_mulai' => '2022-09-14 00:00:00','waktu_selesai' => '2022-09-19 00:00:00','jenis_kuis' => 'posttest','created_at' => '2022-09-10 09:19:14','updated_at' => '2022-09-10 09:19:14'),
            array('id' => '32','materi_id' => '88','waktu_mulai' => '2022-09-14 00:00:00','waktu_selesai' => '2022-09-19 00:00:00','jenis_kuis' => 'posttest','created_at' => '2022-09-10 09:21:44','updated_at' => '2022-09-10 09:21:44'),
            array('id' => '33','materi_id' => '89','waktu_mulai' => '2022-09-10 00:00:00','waktu_selesai' => '2022-09-14 00:00:00','jenis_kuis' => 'pretest','created_at' => '2022-09-10 09:33:55','updated_at' => '2022-09-10 09:33:55'),
            array('id' => '34','materi_id' => '89','waktu_mulai' => '2022-09-15 00:00:00','waktu_selesai' => '2022-09-19 00:00:00','jenis_kuis' => 'posttest','created_at' => '2022-09-10 09:34:17','updated_at' => '2022-09-10 09:34:17'),
            array('id' => '35','materi_id' => '90','waktu_mulai' => '2022-09-10 00:00:00','waktu_selesai' => '2022-09-14 00:00:00','jenis_kuis' => 'pretest','created_at' => '2022-09-10 09:34:56','updated_at' => '2022-09-10 09:34:56'),
            array('id' => '36','materi_id' => '90','waktu_mulai' => '2022-09-15 00:00:00','waktu_selesai' => '2022-09-19 00:00:00','jenis_kuis' => 'posttest','created_at' => '2022-09-10 09:35:16','updated_at' => '2022-09-10 09:35:16'),
            array('id' => '37','materi_id' => '91','waktu_mulai' => '2022-09-10 00:00:00','waktu_selesai' => '2022-09-14 00:00:00','jenis_kuis' => 'pretest','created_at' => '2022-09-10 09:47:16','updated_at' => '2022-09-10 09:47:16'),
            array('id' => '38','materi_id' => '91','waktu_mulai' => '2022-09-14 00:00:00','waktu_selesai' => '2022-09-19 00:00:00','jenis_kuis' => 'posttest','created_at' => '2022-09-10 09:47:29','updated_at' => '2022-09-10 09:47:29'),
            array('id' => '39','materi_id' => '92','waktu_mulai' => '2022-09-10 00:00:00','waktu_selesai' => '2022-09-14 00:00:00','jenis_kuis' => 'pretest','created_at' => '2022-09-10 09:47:45','updated_at' => '2022-09-10 09:47:45'),
            array('id' => '40','materi_id' => '92','waktu_mulai' => '2022-09-14 00:00:00','waktu_selesai' => '2022-09-19 00:00:00','jenis_kuis' => 'posttest','created_at' => '2022-09-10 09:48:04','updated_at' => '2022-09-10 09:48:04'),
            array('id' => '41','materi_id' => '94','waktu_mulai' => '2022-09-18 00:00:00','waktu_selesai' => '2022-09-22 00:00:00','jenis_kuis' => 'pretest','created_at' => '2022-09-18 07:18:50','updated_at' => '2022-09-18 07:18:50'),
            array('id' => '42','materi_id' => '94','waktu_mulai' => '2022-09-24 00:00:00','waktu_selesai' => '2022-09-27 00:00:00','jenis_kuis' => 'posttest','created_at' => '2022-09-18 07:20:32','updated_at' => '2022-10-04 09:53:55'),
            array('id' => '43','materi_id' => '93','waktu_mulai' => '2022-09-18 00:00:00','waktu_selesai' => '2022-09-22 00:00:00','jenis_kuis' => 'pretest','created_at' => '2022-09-18 07:21:05','updated_at' => '2022-09-18 07:21:05'),
            array('id' => '44','materi_id' => '93','waktu_mulai' => '2022-09-24 00:00:00','waktu_selesai' => '2022-09-27 00:00:00','jenis_kuis' => 'posttest','created_at' => '2022-09-18 07:21:29','updated_at' => '2022-09-18 07:21:29'),
            array('id' => '45','materi_id' => '95','waktu_mulai' => '2022-09-18 00:00:00','waktu_selesai' => '2022-09-22 00:00:00','jenis_kuis' => 'pretest','created_at' => '2022-09-18 07:57:45','updated_at' => '2022-09-18 07:57:45'),
            array('id' => '46','materi_id' => '95','waktu_mulai' => '2022-09-24 00:00:00','waktu_selesai' => '2022-09-27 00:00:00','jenis_kuis' => 'posttest','created_at' => '2022-09-18 07:58:00','updated_at' => '2022-09-18 07:58:00'),
            array('id' => '47','materi_id' => '98','waktu_mulai' => '2022-09-18 00:00:00','waktu_selesai' => '2022-09-22 00:00:00','jenis_kuis' => 'pretest','created_at' => '2022-09-18 07:58:16','updated_at' => '2022-09-18 07:58:16'),
            array('id' => '48','materi_id' => '98','waktu_mulai' => '2022-09-24 00:00:00','waktu_selesai' => '2022-09-27 00:00:00','jenis_kuis' => 'posttest','created_at' => '2022-09-18 07:58:32','updated_at' => '2022-09-18 07:58:32'),
            array('id' => '49','materi_id' => '97','waktu_mulai' => '2022-09-18 00:00:00','waktu_selesai' => '2022-09-22 00:00:00','jenis_kuis' => 'pretest','created_at' => '2022-09-18 08:05:50','updated_at' => '2022-09-18 08:05:50'),
            array('id' => '50','materi_id' => '97','waktu_mulai' => '2022-09-24 00:00:00','waktu_selesai' => '2022-09-27 00:00:00','jenis_kuis' => 'posttest','created_at' => '2022-09-18 08:06:30','updated_at' => '2022-09-18 08:06:49'),
            array('id' => '51','materi_id' => '96','waktu_mulai' => '2022-09-18 00:00:00','waktu_selesai' => '2022-09-22 00:00:00','jenis_kuis' => 'pretest','created_at' => '2022-09-18 11:10:31','updated_at' => '2022-09-18 11:10:31'),
            array('id' => '52','materi_id' => '96','waktu_mulai' => '2022-09-24 00:00:00','waktu_selesai' => '2022-09-27 00:00:00','jenis_kuis' => 'posttest','created_at' => '2022-09-18 11:11:05','updated_at' => '2022-10-04 10:05:38'),
            array('id' => '53','materi_id' => '100','waktu_mulai' => '2022-09-25 00:00:00','waktu_selesai' => '2022-09-28 00:00:00','jenis_kuis' => 'pretest','created_at' => '2022-09-24 22:35:18','updated_at' => '2022-09-24 22:35:18'),
            array('id' => '54','materi_id' => '102','waktu_mulai' => '2022-09-25 00:00:00','waktu_selesai' => '2022-09-28 00:00:00','jenis_kuis' => 'pretest','created_at' => '2022-09-24 22:35:37','updated_at' => '2022-09-24 22:35:37'),
            array('id' => '55','materi_id' => '104','waktu_mulai' => '2022-09-25 00:00:00','waktu_selesai' => '2022-09-28 00:00:00','jenis_kuis' => 'pretest','created_at' => '2022-09-24 22:35:48','updated_at' => '2022-09-24 22:35:48'),
            array('id' => '56','materi_id' => '99','waktu_mulai' => '2022-09-25 00:00:00','waktu_selesai' => '2022-09-28 00:00:00','jenis_kuis' => 'pretest','created_at' => '2022-09-24 22:36:02','updated_at' => '2022-09-24 22:36:02'),
            array('id' => '57','materi_id' => '101','waktu_mulai' => '2022-09-25 00:00:00','waktu_selesai' => '2022-09-28 00:00:00','jenis_kuis' => 'pretest','created_at' => '2022-09-24 22:36:12','updated_at' => '2022-09-24 22:36:12'),
            array('id' => '58','materi_id' => '103','waktu_mulai' => '2022-09-25 00:00:00','waktu_selesai' => '2022-09-28 00:00:00','jenis_kuis' => 'pretest','created_at' => '2022-09-24 22:36:24','updated_at' => '2022-09-24 22:36:24'),
            array('id' => '59','materi_id' => '100','waktu_mulai' => '2022-09-30 00:00:00','waktu_selesai' => '2022-10-03 00:00:00','jenis_kuis' => 'posttest','created_at' => '2022-09-24 22:36:53','updated_at' => '2022-09-24 22:38:20'),
            array('id' => '60','materi_id' => '102','waktu_mulai' => '2022-09-30 00:00:00','waktu_selesai' => '2022-10-03 00:00:00','jenis_kuis' => 'posttest','created_at' => '2022-09-24 22:37:56','updated_at' => '2022-09-24 22:38:29'),
            array('id' => '61','materi_id' => '104','waktu_mulai' => '2022-10-28 00:00:00','waktu_selesai' => '2022-10-04 00:00:00','jenis_kuis' => 'posttest','created_at' => '2022-09-24 22:38:50','updated_at' => '2022-09-24 22:38:50'),
            array('id' => '62','materi_id' => '99','waktu_mulai' => '2022-10-28 00:00:00','waktu_selesai' => '2022-10-04 00:00:00','jenis_kuis' => 'posttest','created_at' => '2022-09-24 22:39:07','updated_at' => '2022-09-24 22:39:07'),
            array('id' => '63','materi_id' => '101','waktu_mulai' => '2022-09-30 00:00:00','waktu_selesai' => '2022-10-04 00:00:00','jenis_kuis' => 'posttest','created_at' => '2022-09-24 22:39:20','updated_at' => '2022-09-24 22:39:20'),
            array('id' => '64','materi_id' => '103','waktu_mulai' => '2022-10-28 00:00:00','waktu_selesai' => '2022-10-04 00:00:00','jenis_kuis' => 'posttest','created_at' => '2022-09-24 22:39:40','updated_at' => '2022-09-24 22:39:40'),
            array('id' => '65','materi_id' => '105','waktu_mulai' => '2024-08-19 00:00:00','waktu_selesai' => '2024-08-30 00:00:00','jenis_kuis' => 'pretest','created_at' => '2024-08-16 17:03:35','updated_at' => '2024-08-16 17:03:35'),
            array('id' => '66','materi_id' => '105','waktu_mulai' => '2024-08-19 00:00:00','waktu_selesai' => '2024-08-30 00:00:00','jenis_kuis' => 'posttest','created_at' => '2024-08-16 17:03:48','updated_at' => '2024-08-16 17:03:48'),
            array('id' => '67','materi_id' => '106','waktu_mulai' => '2024-08-19 00:00:00','waktu_selesai' => '2024-08-30 00:00:00','jenis_kuis' => 'pretest','created_at' => '2024-08-16 17:12:56','updated_at' => '2024-08-16 17:12:56'),
            array('id' => '68','materi_id' => '106','waktu_mulai' => '2024-08-19 00:00:00','waktu_selesai' => '2024-08-30 00:00:00','jenis_kuis' => 'posttest','created_at' => '2024-08-16 17:13:42','updated_at' => '2024-08-16 17:13:42'),
            array('id' => '69','materi_id' => '107','waktu_mulai' => '2024-08-19 00:00:00','waktu_selesai' => '2024-08-30 00:00:00','jenis_kuis' => 'pretest','created_at' => '2024-08-16 17:14:26','updated_at' => '2024-08-16 17:14:26'),
            array('id' => '70','materi_id' => '107','waktu_mulai' => '2024-08-19 00:00:00','waktu_selesai' => '2024-08-30 00:00:00','jenis_kuis' => 'posttest','created_at' => '2024-08-16 17:15:09','updated_at' => '2024-08-16 17:15:09'),
            array('id' => '71','materi_id' => '117','waktu_mulai' => '2024-09-01 00:00:00','waktu_selesai' => '2024-08-30 00:00:00','jenis_kuis' => 'pretest','created_at' => '2024-08-20 08:49:42','updated_at' => '2024-08-20 08:49:42'),
            array('id' => '72','materi_id' => '117','waktu_mulai' => '2024-09-02 00:00:00','waktu_selesai' => '2024-08-30 00:00:00','jenis_kuis' => 'posttest','created_at' => '2024-08-20 08:51:20','updated_at' => '2024-08-20 08:51:20'),
            array('id' => '73','materi_id' => '118','waktu_mulai' => '2024-09-02 00:00:00','waktu_selesai' => '2024-08-30 00:00:00','jenis_kuis' => 'pretest','created_at' => '2024-08-20 08:52:16','updated_at' => '2024-08-20 08:52:16'),
            array('id' => '74','materi_id' => '118','waktu_mulai' => '2024-09-02 00:00:00','waktu_selesai' => '2024-09-30 00:00:00','jenis_kuis' => 'posttest','created_at' => '2024-08-20 08:52:35','updated_at' => '2024-08-20 08:52:35'),
            array('id' => '75','materi_id' => '119','waktu_mulai' => '2024-09-02 00:00:00','waktu_selesai' => '2024-08-30 00:00:00','jenis_kuis' => 'pretest','created_at' => '2024-08-20 08:53:39','updated_at' => '2024-08-20 08:53:39'),
            array('id' => '76','materi_id' => '119','waktu_mulai' => '2024-09-02 00:00:00','waktu_selesai' => '2024-08-30 00:00:00','jenis_kuis' => 'posttest','created_at' => '2024-08-20 08:54:18','updated_at' => '2024-08-20 08:54:18'),
            array('id' => '77','materi_id' => '114','waktu_mulai' => '2024-09-02 00:00:00','waktu_selesai' => '2024-09-30 00:00:00','jenis_kuis' => 'pretest','created_at' => '2024-08-20 08:55:02','updated_at' => '2024-08-20 08:58:31'),
            array('id' => '78','materi_id' => '114','waktu_mulai' => '2024-09-02 00:00:00','waktu_selesai' => '2024-09-30 00:00:00','jenis_kuis' => 'posttest','created_at' => '2024-08-20 08:55:40','updated_at' => '2024-08-20 08:55:40'),
            array('id' => '79','materi_id' => '115','waktu_mulai' => '2024-09-02 00:00:00','waktu_selesai' => '2024-09-30 00:00:00','jenis_kuis' => 'pretest','created_at' => '2024-08-20 08:57:09','updated_at' => '2024-08-20 08:57:09'),
            array('id' => '80','materi_id' => '115','waktu_mulai' => '2024-09-02 00:00:00','waktu_selesai' => '2024-09-30 00:00:00','jenis_kuis' => 'posttest','created_at' => '2024-08-20 08:57:31','updated_at' => '2024-08-20 08:57:31'),
            array('id' => '81','materi_id' => '116','waktu_mulai' => '2024-09-02 00:00:00','waktu_selesai' => '2024-09-30 00:00:00','jenis_kuis' => 'pretest','created_at' => '2024-08-20 08:58:56','updated_at' => '2024-08-20 08:58:56'),
            array('id' => '82','materi_id' => '116','waktu_mulai' => '2024-09-02 00:00:00','waktu_selesai' => '2024-09-30 00:00:00','jenis_kuis' => 'posttest','created_at' => '2024-08-20 08:59:17','updated_at' => '2024-08-20 08:59:17'),
            array('id' => '83','materi_id' => '108','waktu_mulai' => '2024-08-26 00:00:00','waktu_selesai' => '2024-09-23 00:00:00','jenis_kuis' => 'pretest','created_at' => '2024-08-20 09:00:40','updated_at' => '2024-08-20 09:00:40'),
            array('id' => '84','materi_id' => '108','waktu_mulai' => '2024-08-26 00:00:00','waktu_selesai' => '2024-09-23 00:00:00','jenis_kuis' => 'posttest','created_at' => '2024-08-20 09:00:54','updated_at' => '2024-08-20 09:00:54'),
            array('id' => '85','materi_id' => '109','waktu_mulai' => '2024-08-26 00:00:00','waktu_selesai' => '2024-09-23 00:00:00','jenis_kuis' => 'pretest','created_at' => '2024-08-20 09:06:19','updated_at' => '2024-08-20 09:06:19'),
            array('id' => '86','materi_id' => '109','waktu_mulai' => '2024-08-26 00:00:00','waktu_selesai' => '2024-09-23 00:00:00','jenis_kuis' => 'posttest','created_at' => '2024-08-20 09:06:34','updated_at' => '2024-08-20 09:06:34'),
            array('id' => '87','materi_id' => '110','waktu_mulai' => '2024-08-26 00:00:00','waktu_selesai' => '2024-09-23 00:00:00','jenis_kuis' => 'pretest','created_at' => '2024-08-20 09:07:31','updated_at' => '2024-08-20 09:07:31'),
            array('id' => '88','materi_id' => '110','waktu_mulai' => '2024-08-26 00:00:00','waktu_selesai' => '2024-09-23 00:00:00','jenis_kuis' => 'posttest','created_at' => '2024-08-20 09:07:46','updated_at' => '2024-08-20 09:07:46'),
            array('id' => '89','materi_id' => '111','waktu_mulai' => '2024-08-26 00:00:00','waktu_selesai' => '2024-09-23 00:00:00','jenis_kuis' => 'pretest','created_at' => '2024-08-20 09:09:21','updated_at' => '2024-08-20 09:09:21'),
            array('id' => '90','materi_id' => '111','waktu_mulai' => '2024-08-26 00:00:00','waktu_selesai' => '2024-09-23 00:00:00','jenis_kuis' => 'pretest','created_at' => '2024-08-20 09:09:38','updated_at' => '2024-08-20 09:09:38'),
            array('id' => '91','materi_id' => '112','waktu_mulai' => '2024-08-26 00:00:00','waktu_selesai' => '2024-09-23 00:00:00','jenis_kuis' => 'pretest','created_at' => '2024-08-20 09:10:53','updated_at' => '2024-08-20 09:10:53'),
            array('id' => '92','materi_id' => '112','waktu_mulai' => '2024-08-26 00:00:00','waktu_selesai' => '2024-09-23 00:00:00','jenis_kuis' => 'posttest','created_at' => '2024-08-20 09:11:05','updated_at' => '2024-08-20 09:11:05'),
            array('id' => '93','materi_id' => '113','waktu_mulai' => '2024-08-26 00:00:00','waktu_selesai' => '2024-09-23 00:00:00','jenis_kuis' => 'pretest','created_at' => '2024-08-20 09:12:03','updated_at' => '2024-08-20 09:12:03'),
            array('id' => '94','materi_id' => '113','waktu_mulai' => '2024-08-26 00:00:00','waktu_selesai' => '2024-09-23 00:00:00','jenis_kuis' => 'posttest','created_at' => '2024-08-20 09:12:15','updated_at' => '2024-08-20 09:12:15'),
            array('id' => '95','materi_id' => '120','waktu_mulai' => '2024-08-25 00:00:00','waktu_selesai' => '2024-09-30 00:00:00','jenis_kuis' => 'pretest','created_at' => '2024-08-25 17:35:58','updated_at' => '2024-08-25 17:36:44'),
            array('id' => '96','materi_id' => '120','waktu_mulai' => '2024-08-24 00:00:00','waktu_selesai' => '2024-09-30 00:00:00','jenis_kuis' => 'posttest','created_at' => '2024-08-25 17:36:27','updated_at' => '2024-08-25 17:36:27'),
            array('id' => '97','materi_id' => '121','waktu_mulai' => '2024-09-08 00:00:00','waktu_selesai' => '2024-09-23 00:00:00','jenis_kuis' => 'pretest','created_at' => '2024-08-25 17:36:27','updated_at' => '2024-08-25 17:36:27'),
            array('id' => '98','materi_id' => '121','waktu_mulai' => '2024-09-08 00:00:00','waktu_selesai' => '2024-10-07 00:00:00','jenis_kuis' => 'posttest','created_at' => '2024-08-25 17:36:27','updated_at' => '2024-08-25 17:36:27'),
        );

        foreach ($quizzes as $kuis) {
            DB::table('kuis_materis')->insert($kuis);
        }
    }
}
