<?php

namespace App\Http\Controllers;

use App\Models\Diskusi;
use App\Models\DiskusiRespon;
use App\Models\KelasMahasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class MahasiswaProfilController extends Controller
{
    public function dashboard(){
        $kelas = KelasMahasiswa::where('mahasiswa_id',Auth::user()->id)->count();
        $diskusi = Diskusi::where('mahasiswa_id',Auth::user()->id)->count();
        $komentar = DiskusiRespon::where('mahasiswa_id',Auth::user()->id)->count();
        return view('mahasiswa.dashboard');
    }

    public function pengaturanProfil(){
        return view('mahasiswa.pengaturan_profil');
    }

    public function logAktivitas(){
        return view('mahasiswa.logs');
    }

    public function pengaturanProfilUpdate(Request $request)
    {
        Log::info('Request received:', $request->all());

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
            Log::error('Validation failed:', $validator->errors()->toArray());
            return response()->json(['success' => false, 'errors' => $validator->errors()], 422);
        }

        DB::beginTransaction();
        try {
            $user = User::findOrFail(Auth::id());

            if ($request->hasFile('avatar')) {
                if ($user->foto && Storage::disk('public')->exists($user->foto)) {
                    Storage::disk('public')->delete($user->foto);
                }
                $avatarPath = $request->file('avatar')->store('fotos', 'public');
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

            $user->save();

            DB::commit();
            Log::info('Profile updated successfully for user: ' . $user->id);
            return response()->json(['success' => true, 'message' => 'Profil berhasil diperbarui.']);
        } catch (\Exception $e) {
            DB::rollback();
            Log::error('Profile update failed: ' . $e->getMessage());
            return response()->json(['success' => false, 'errors' => ['general' => ['Terjadi kesalahan saat memperbarui profil: ' . $e->getMessage()]]], 500);
        }
    }
}
