<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request;

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

    public function pengaturanProfilUpdate(Request $request){

    }
}
