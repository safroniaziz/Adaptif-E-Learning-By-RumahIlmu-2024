<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MahasiswaKelasController extends Controller
{
    public function index(Kelas $kelas){
        activity()
        ->causedBy(Auth::user()->id)
        ->event('mengakses')
        ->log(Auth::user()->nama_user . ' mengakses halaman kelas mahasiswa.');
        $data = Kelas::with(['mahasiswas'])
                ->whereHas('pengampu', function ($query) {
                    $query->where('pengampu_id', Auth::user()->id);
                })
                ->where('id', $kelas->id)
                ->orderBy('kelas.created_at', 'desc')
                ->first();
        return view('admin/kelas.mahasiswa.index',compact('data'));
    }
}
