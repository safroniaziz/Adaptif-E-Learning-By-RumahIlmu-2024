<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MahasiswaKelasController extends Controller
{
    public function index(Kelas $kelas){
        activity()
        ->causedBy(auth()->user()->id)
        ->event('accessed')
        ->log(auth()->user()->nama_user . ' has accessed the Generate Point Rubrik value page.');
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
