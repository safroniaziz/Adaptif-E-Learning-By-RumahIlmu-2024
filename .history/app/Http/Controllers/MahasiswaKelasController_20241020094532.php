<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MahasiswaKelasController extends Controller
{
    public function index(Kelas $kelas){
        $data = Kelas::with(['mahasiswas' => function($query) {
                        $query->withCount(['activities', 'kelasMahasiswa as details_count' => function($query) {
                            $query->withCount('details'); // Menghitung details dari kelasMahasiswa
                        }]);
                    }])
                    ->whereHas('pengampu', function ($query) {
                        $query->where('pengampu_id', Auth::user()->id);
                    })
                    ->where('id', $kelas->id)
                    ->orderBy('kelas.created_at', 'desc')
                    ->first();
        return view('admin/kelas.mahasiswa.index',compact('data'));
    }

    public function aktivitas(){

    }
}
