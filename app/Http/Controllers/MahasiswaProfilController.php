<?php

namespace App\Http\Controllers;

class MahasiswaProfilController extends Controller
{
    public function dashboard(){
        return view('mahasiswa.dashboard');
    }

    public function pengaturanProfil(){
        return view('mahasiswa.pengaturan_profil');
    }

    public function logAktivitas(){
        return view('mahasiswa.logs');
    }
}
