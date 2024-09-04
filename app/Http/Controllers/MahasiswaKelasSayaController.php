<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\KuisMateri;
use App\Models\Materi;
use App\Models\User;
use Illuminate\Http\Request;

class MahasiswaKelasSayaController extends Controller
{
    public function daftarKelasSaya(){
        $daftarKelasSaya = User::with(['kelas'])->where('id',auth()->user()->id)->first();
        return view('mahasiswa/kelas_saya/index',compact('daftarKelasSaya'));
    }

    public function detailKelas(Kelas $kelas){
        $kelas = Kelas::with(['pengampu','topikPembahasanKelas.materis','capaianLulusans','mahasiswas'])->where('id',$kelas->id)->first();
        return view('mahasiswa/kelas_saya.detail_kelas',compact('kelas'));
    }

    public function detailMateri(Kelas $kelas, Materi $materi){
        $preTest = KuisMateri::where('materi_id',$materi->id)->select('id')->where('jenis_kuis','pretest')->first();
        if(empty($preTest)){
            return redirect()->route('mahasiswa.kelas_saya.detail_kelas', $kelas->id)
                    ->with('error', 'Pre Test belum ditambahkan!');
        }

        $sudahPreTest = Materi::where('id',$materi->id)->

        $materi = Materi::with(['topikPembahasanKelas.kelas'])
                ->where('id', $materi->id)
                ->whereHas('topikPembahasanKelas.kelas', function ($query) use ($kelas) {
                    $query->where('id', $kelas->id);
                })
                ->first();
        return view('mahasiswa/kelas_saya.detail_materi',compact('kelas','materi'));
    }

    public function tugasKelompok(Kelas $kelas, Materi $materi){
        $materi = Materi::with(['tugasKelompoks'])
                ->where('id', $materi->id)
                ->whereHas('topikPembahasanKelas.kelas', function ($query) use ($kelas) {
                    $query->where('id', $kelas->id);
                })
                ->first();
        return view('mahasiswa/kelas_saya.tugas_kelompok',compact('kelas','materi'));
    }
}
