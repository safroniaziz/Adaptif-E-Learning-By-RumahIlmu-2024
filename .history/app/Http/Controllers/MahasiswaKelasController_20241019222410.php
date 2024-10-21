<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MahasiswaKelasController extends Controller
{
    public function index(Kelas $kelas){
        $data = Kelas::with(['mahasiswas' => function($query) {
                    $query->withCount('activities'); // Tambahkan withCount untuk menghitung activities
                }])
                ->whereHas('pengampu', function ($query) {
                    $query->where('pengampu_id', Auth::user()->id);
                })
                ->where('id', $kelas->id)
                ->orderBy('kelas.created_at', 'desc')
                ->first();

        return $data;

        return view('admin/kelas.mahasiswa.index',compact('data'));
    }
}
