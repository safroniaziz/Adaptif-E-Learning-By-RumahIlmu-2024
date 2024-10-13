<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = Auth::user();

        if ($request->hasFile('avatar')) {
            // Hapus file avatar lama jika ada
            if ($user->foto && Storage::exists($user->foto)) {
                Storage::delete($user->foto);
            }

            // Simpan avatar baru dan update path-nya ke database
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $user->foto = $avatarPath;
        }

        $user->nama_lengkap = $request->input('nama_lengkap');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->jenis_kelamin = $request->input('jenis_kelamin');
        $user->jalur_masuk = $request->input('jalur_ujian');
        $user->rata_ujian = $request->input('rata_ujian');
        $user->asal_sekolah = $request->input('asal_sekolah');
        $user->asal_provinsi_sma = $request->input('asal_provinsi_sma');

        // Simpan perubahan ke database
        $user->save();

        return redirect()->route('mahasiswa.dashboard.pengaturan_profil')->with('success', 'Profil berhasil diperbarui.');
    }
}
