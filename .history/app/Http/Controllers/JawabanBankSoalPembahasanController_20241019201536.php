<?php

namespace App\Http\Controllers;

use App\Models\BankSoalPembahasan;
use App\Models\JawabanKuisMateri;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class JawabanBankSoalPembahasanController extends Controller
{
    public function index(Kelas $kelas, BankSoalPembahasan $soalKuis){
        $soal = BankSoalPembahasan::with(['jawabans.bankSoalPembahasan'])->where('id',$soalKuis->id)->first();
        return $soal;
        return view('admin/soal_kuis.jawaban.index',[
            'kelas'   =>  $kelas,
            'soal'   =>  $soal,
        ]);
    }

    public function post(Request $request, Kelas $kelas, BankSoalPembahasan $soalKuis)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'jawaban'   =>  'required|string',
            'status_jawaban'   =>  'required', // Pastikan status jawaban benar
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => 0, 'text' => $validator->errors()->first()], 422);
        }

        DB::beginTransaction();
        try {
            // Menyimpan data jawaban
            $simpan = JawabanKuisMateri::create([
                'bank_soal_pembahasan_id' => $soalKuis->id, // Ambil dari parameter
                'jawaban' => $request->jawaban,
                'status_jawaban' => $request->status_jawaban,
            ]);

            // Log aktivitas
            activity()
                ->causedBy(Auth::user())
                ->performedOn($simpan)
                ->event('admin_created')
                ->withProperties([
                    'created_fields' => $simpan, // Informasi tambahan
                    'log_name' => 'Jawaban Soal Kuis Pembahasan',
                ])
                ->log(Auth::user()->nama_lengkap . ' menginput data jawaban soal kuis pembahasan baru.');

            DB::commit();
            return response()->json([
                'text' => 'Berhasil, penyimpanan data berhasil',
                'url' => route('soalKuis.detail', [$kelas->id]),
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            // Kembalikan pesan error yang lebih jelas untuk debugging
            return response()->json([
                'text' => 'Oopps, penyimpanan data gagal: ' . $e->getMessage(),
            ], 500);
        }
    }


    public function delete(BankSoalPembahasan $soalKuis, Kelas $kelas, JawabanKuisMateri $jawaban){
        $oldData = $jawaban->toArray();
        $jawaban->delete();
        activity()
            ->causedBy(Auth::user())
            ->performedOn($jawaban)
            ->event('admin_deleted')
            ->withProperties([
                'old_data' => $oldData, // Data lama
            ])
            ->log(Auth::user()->nama_lengkap . ' menghapus data jawaban soal kuis pembahasan.');

        $notification = array(
            'message' => 'Data berhasil dihapus!',
            'alert-type' => 'success'
        );
        return redirect()->route('soalKuis.jawaban',[$kelas->id, $soalKuis->id])->with($notification);
    }
}
