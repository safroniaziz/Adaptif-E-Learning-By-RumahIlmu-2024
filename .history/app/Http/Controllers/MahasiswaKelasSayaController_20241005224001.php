<?php

namespace App\Http\Controllers;

use App\Models\JawabanKuisMateri;
use App\Models\Kelas;
use App\Models\KelasMahasiswa;
use App\Models\KuisMateri;
use App\Models\Materi;
use App\Models\NilaiKuisMateri;
use App\Models\PengumpulanTugasKelompok;
use App\Models\PengumpulanTugasKelompokDetail;
use App\Models\PertanyaanKuisMateri;
use App\Models\TopikPembahasanKelas;
use App\Models\TugasKelompokMateri;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

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

    public function detailMateri(Kelas $kelas, Materi $materi)
    {
        // Ambil data materi dan relasinya
        $materi = Materi::with(['topikPembahasanKelas.kelas.pengampu'])
                        ->where('id', $materi->id)
                        ->first();

        // Cek apakah pretest ada
        $preTest = KuisMateri::where('materi_id', $materi->id)
                            ->select('id')
                            ->where('jenis_kuis', 'pretest')
                            ->first();

        // Redirect jika pretest belum ditambahkan
        if (!$preTest) {
            return redirect()->route('mahasiswa.kelas_saya.detail_kelas', $kelas->id)
                            ->with('error', 'Pre Test belum ditambahkan!');
        }

        // Cek apakah user sudah mengerjakan pretest
        $sudahPreTest = NilaiKuisMateri::where('kuis_materi_id', $preTest->id)
                                    ->where('mahasiswa_id', auth()->user()->id)
                                    ->first();

        if ($sudahPreTest) {
            // Return view detail materi jika pretest sudah dikerjakan
            return view('mahasiswa/kelas_saya.detail_materi', compact('kelas', 'materi'));
        } else {
            // Ambil soal pretest dan acak jawabannya
            $kuis = PertanyaanKuisMateri::with('bankSoalPembahasan.jawabans')
                                    ->where('kuis_materi_id', $preTest->id)
                                    ->get();

            // Acak jawaban
            $kuis->each(function ($pertanyaan) {
                if ($pertanyaan->bankSoalPembahasan && $pertanyaan->bankSoalPembahasan->jawabans) {
                    $pertanyaan->bankSoalPembahasan->jawabans = $pertanyaan->bankSoalPembahasan->jawabans->shuffle();
                }
            });
            return view('mahasiswa/kelas_saya.kuis', compact('kuis', 'preTest', 'materi', 'kelas'));
        }
    }

    public function simpanKuis(Request $request, Kelas $kelas, Materi $materi)
    {
        $preTest = KuisMateri::where('materi_id', $materi->id)
                            ->where('jenis_kuis', 'pretest')
                            ->first();
                            // return $preTest;
        $kuis = PertanyaanKuisMateri::with('bankSoalPembahasan.jawabans')
            ->where('kuis_materi_id', $preTest->id)
            ->get();

        $rules = [];
        $messages = [];

        foreach ($kuis as $index => $pertanyaanKuis) {
            $rules["jawaban_{$index}"] = 'required';
            $messages["jawaban_{$index}.required"] = "Pertanyaan nomor " . ($index + 1) . " harus dijawab.";
        }

        $validatedData = $request->validate($rules, $messages);

        $nilais = [];

        foreach ($kuis as $index => $pertanyaanKuis) {
            $kuis_id = $request->input("kuis_{$index}");
            $jawaban_id = $request->input("jawaban_{$index}");
            $alasan = $request->input("alasan_{$index}");

            $jawabanBenar = JawabanKuisMateri::where('bank_soal_pembahasan_id', $kuis_id)
                                            ->where('status_jawaban', true)
                                            ->first();

            $nilai = ($jawaban_id == $jawabanBenar->id) ? 1 : 0;

            $nilais[] = [
                'kuis_materi_id' => $preTest->id,
                'mahasiswa_id' => auth()->user()->id,
                'bank_soal_pembahasan_id'   =>  $kuis_id,
                'jawaban_kuis_materi_id' => $jawaban_id,
                'nilai' => $nilai,
                'alasan' => $alasan,
            ];
        }

        // Simpan nilai ke database
        NilaiKuisMateri::insert($nilais);

        session()->flash('success', 'Jawaban kuis berhasil disimpan!');
        return redirect()->route('mahasiswa.kelas_saya.detail_materi',[$kelas->id, $materi->id]);
    }

    public function tugasKelompok(Kelas $kelas, Materi $materi){
        $materi = Materi::where('id', $materi->id)
        ->whereHas('topikPembahasanKelas.kelas', function ($query) use ($kelas) {
            $query->where('id', $kelas->id);
        })
        ->with([
            'tugasKelompoks.pengumpulanTugas.pengumpulanTugasDetails' => function ($query) {
                $query->where('mahasiswa_id', auth()->user()->id);
            },
            'tugasKelompoks.pengumpulanTugas.pengumpulanTugasDetails.mahasiswa'
        ])
        ->first();

        $tugasKelompoks = TugasKelompokMateri::with(['pengumpulanTugas.pengumpulanTugasDetails.mahasiswa','materi.topikPembahasanKelas'])
                        ->where('materi_id',$materi->id)->get();

        $materi2 = Materi::with([
            'tugasKelompoks.pengumpulanTugas.pengumpulanTugasDetails' // Include PengumpulanTugasDetails within pengumpulanTugas
        ])
        ->where('id', $materi->id)
        ->whereHas('topikPembahasanKelas.kelas', function ($query) use ($kelas) {
            $query->where('id', $kelas->id);
        })
        ->first();
        // return $materi2;

        $submittedMahasiswaIds = $materi2->tugasKelompoks->flatMap(function($tugasKelompok) {
            return $tugasKelompok->pengumpulanTugas->flatMap(function($pengumpulanTugas) {
                return $pengumpulanTugas->pengumpulanTugasDetails->pluck('mahasiswa_id');
            });
        })->toArray();

        $mahasiswas = KelasMahasiswa::with('mahasiswa')
            ->where('kelas_id', $kelas->id) // Where kelas_id sama dengan id kelas saat ini
            ->whereNotIn('mahasiswa_id', $submittedMahasiswaIds) // Kecualikan mahasiswa yang sudah submit tugas
            ->get();
        return view('mahasiswa/kelas_saya.tugas_kelompok',compact('kelas','materi','mahasiswas'));
    }

    public function uploadTugasKelompok(Request $request, Kelas $kelas, Materi $materi, TugasKelompokMateri $tugasKelompok)
    {
        // Validasi file
        $request->validate([
            'file' => 'required|file|mimes:pdf,doc,docx|max:1024', // Maksimal ukuran 1MB dan jenis file
        ]);

        // Format nama path
        $kelasNama = str_replace(' ', '_', strtolower($kelas->nama_kelas));
        $materiNama = str_replace(' ', '_', strtolower($materi->nama_materi));
        $path = 'mahasiswa/pengumpulan_tugas_kelompok/' . $kelasNama . '/' . $materiNama;

        // Simpan file ke storage
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs($path, $filename, 'public');

            // Mendapatkan nomor kelompok berikutnya
            $kelompok = PengumpulanTugasKelompok::max('kelompok');
            $kelompok = $kelompok ? $kelompok + 1 : 1;

            // Simpan informasi ke database
            $pengumpulanTugasKelompok = PengumpulanTugasKelompok::create([
                'tugas_kelompok_id' => $tugasKelompok->id,
                'ketua_kelompok_id' => auth()->user()->id,
                'file_tugas' => $filePath,
                'kelompok' => $kelompok,
            ]);

            PengumpulanTugasKelompokDetail::create([
                'pengumpulan_tugas_kelompok_id' => $pengumpulanTugasKelompok->id,
                'mahasiswa_id'   =>  auth()->user()->id,
                'status_anggota'    =>  'ketua',
                'kelompok'  =>  $kelompok,
            ]);

            session()->flash('success', 'File berhasil diupload!');
            return redirect()->route('mahasiswa.kelas_saya.tugas_kelompok',[$kelas->id, $materi->id, $tugasKelompok->id]);
        }

        session()->flash('error', 'File gagal diupload!');
        return redirect()->route('mahasiswa.kelas_saya.tugas_kelompok',[$kelas->id, $materi->id, $tugasKelompok->id]);
    }

    public function hapusFileTugasKelompok(Kelas $kelas, Materi $materi, TugasKelompokMateri $tugasKelompok)
    {
        $fileRecord = PengumpulanTugasKelompok::where('tugas_kelompok_id', $tugasKelompok->id)
            ->where('ketua_kelompok_id', auth()->user()->id)
            ->first();
        if ($fileRecord) {
            Storage::disk('public')->delete($fileRecord->file_tugas);


            $fileRecord->delete();



            session()->flash('success', 'File berhasil dihapus!');
            return redirect()->route('mahasiswa.kelas_saya.tugas_kelompok',[$kelas->id, $materi->id, $tugasKelompok->id]);
        }

        session()->flash('error', 'File tidak ditemukan!');
        return redirect()->route('mahasiswa.kelas_saya.tugas_kelompok',[$kelas->id, $materi->id, $tugasKelompok->id]);
    }

    public function simpanAnggota(Request $request, Kelas $kelas, Materi $materi, TugasKelompokMateri $tugasKelompok)
    {
        $validator = Validator::make($request->all(), [
            'anggota_id' => 'required|array|min:1',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        if (!empty($invalidStudents)) {
            return response()->json([
                'success' => false,
                'message' => 'Beberapa mahasiswa tidak terdaftar dalam kelas ini.',
                'invalid_students' => $invalidStudents
            ], 422);
        }

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        foreach ($request->anggota_id as $anggotaId) {
            $exists = DB::table('pengumpulan_tugas_kelompok_details')
                ->join('pengumpulan_tugas_kelompoks','pengumpulan_tugas_kelompok_details.pengumpulan_tugas_kelompok_id','pengumpulan_tugas_kelompoks.id')
                ->where('tugas_kelompok_id', $tugasKelompok->id)
                ->where('mahasiswa_id', $anggotaId)
                ->exists();
            if ($exists) {
                return response()->json([
                    'success' => false,
                    'message' => "Mahasiswa dengan ID $anggotaId sudah terdaftar dalam kelompok lain untuk tugas $tugasKelompok->id."
                ], 400);
            }
        }

        try {
            // Simpan anggota ke kelompok

            $pengumpulanTugas = PengumpulanTugasKelompok::where('tugas_kelompok_id',$tugasKelompok->id)
                                ->where('ketua_kelompok_id',auth()->user()->id)->first();

            foreach ($request->anggota_id as $anggotaId) {
                PengumpulanTugasKelompokDetail::create([
                    'pengumpulan_tugas_kelompok_id' => $pengumpulanTugas->id,
                    'mahasiswa_id' => $anggotaId,
                    'status_anggota' => 'anggota',
                    'kelompok' => $pengumpulanTugas->kelompok,
                ]);
            }

            return response()->json([
                'success' => true,
                'message' => 'Anggota kelompok berhasil ditambahkan'
            ], 200);
        } catch (\Exception $e) {
            Log::error('Error in simpanAnggota: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan: ' . $e->getMessage()
            ], 500);
        }
    }

    public function hapusAnggota(Request $request, Kelas $kelas, Materi $materi, TugasKelompokMateri $tugasKelompok, User $anggota, PengumpulanTugasKelompokDetail $pengumpulanTugasDetail){
        $deleted = PengumpulanTugasKelompokDetail::join('pengumpulan_tugas_kelompoks','pengumpulan_tugas_kelompoks.id','pengumpulan_tugas_kelompok_details.pengumpulan_tugas_kelompok_id')
            ->where('pengumpulan_tugas_kelompok_id', $pengumpulanTugasDetail->pengumpulan_tugas_kelompok_id)
            ->where('mahasiswa_id', $anggota->id)
            ->delete();

        if ($deleted) {
            return response()->json([
                'success' => true,
                'message' => 'Anggota kelompok berhasil dihapus.'
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Anggota tidak ditemukan dalam kelompok ini.'
            ], 404);
        }
    }

    public function tugasIndividu(Kelas $kelas, Materi $materi){
        $materi = Materi::with([
            'tugasIndividus.pengumpulanTugas' => function ($query) {
                $query->whereHas('pengumpulanTugasDetails', function ($query) {
                    $query->where('mahasiswa_id', auth()->user()->id);
                });
            },
            'tugasIndividus.pengumpulanTugas.pengumpulanTugasDetails.mahasiswa'
        ])
        ->where('id', $materi->id)
        ->whereHas('topikPembahasanKelas.kelas', function ($query) use ($kelas) {
            $query->where('id', $kelas->id);
        })
        ->first();
    }

}
