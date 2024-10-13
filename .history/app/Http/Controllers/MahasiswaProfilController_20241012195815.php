<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;

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
        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . Auth::id(),
            'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
            'jenis_kelamin' => 'required|in:L,P',
            'jalur_ujian' => 'required|string',
            'rata_ujian' => 'required|numeric',
            'asal_sekolah' => 'required|string|max:255',
            'asal_provinsi_sma' => 'required|string|max:255',
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
    }
}
