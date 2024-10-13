@php
    $currentTime = new DateTime();
    $deadlineTime = new DateTime($tugas->waktu_selesai);
    $startTime = new DateTime($tugas->waktu_mulai);
    $statusUpload = $tugas->status_upload == 1;

    // Jika sudah ada pengumpulan tugas, cek apakah pengguna adalah ketua kelompok
    $isKetua = $tugas->pengumpulanTugas->isNotEmpty() && $tugas->pengumpulanTugas->contains('ketua_kelompok_id', auth()->id());
@endphp

@if ($currentTime > $deadlineTime && !$statusUpload)
    <div class="alert alert-dismissible bg-light-danger border-danger border-dashed d-flex flex-column flex-sm-row p-5 mb-10">
        <i class="ki-duotone ki-error fs-2hx text-danger me-4 mb-5 mb-sm-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
        <div class="d-flex flex-column pe-0 pe-sm-10">
            <h5 class="mb-1">Batas Waktu Pengumpulan Tugas Telah Berlalu</h5>
            <span>Maaf, Anda sudah tidak dapat mengumpulkan tugas ini karena batas waktu pengumpulan telah berlalu.</span>
        </div>
        <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
            <i class="ki-duotone ki-cross fs-1 text-danger"><span class="path1"></span><span class="path2"></span></i>
        </button>
    </div>
@elseif ($currentTime < $startTime)
    <div class="alert alert-dismissible bg-light-warning border-warning border-dashed d-flex flex-column flex-sm-row p-5 mb-10">
        <i class="ki-duotone ki-warning fs-2hx text-warning me-4 mb-5 mb-sm-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
        <div class="d-flex flex-column pe-0 pe-sm-10">
            <h5 class="mb-1">Pengumpulan Tugas Belum Dimulai</h5>
            <span>Maaf, waktu pengumpulan tugas belum dimulai. Harap tunggu hingga waktu mulai tiba.</span>
        </div>
        <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
            <i class="ki-duotone ki-cross fs-1 text-warning"><span class="path1"></span><span class="path2"></span></i>
        </button>
    </div>
@else
    <!-- Jika sudah ada pengumpulan tugas -->
    @if ($materi && $tugas && $tugas->pengumpulanTugas->isNotEmpty())
        <div class="alert alert-dismissible bg-light-primary border-primary border-dashed d-flex flex-column p-5 mb-2">
            <i class="ki-duotone ki-primary fs-2hx text-primary me-4 mb-5"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
            <div class="d-flex flex-column pe-0 pe-sm-10">
                <h5 class="mb-1">Terimakasih</h5>
                <span>Pengumpulan tugas berhasil dilakukan, silahkan tambahkan anggota kelompok!</span>
                <span class="text-danger" style="font-size:11px; margin-top: 10px;">File Tugas: {{ $tugas->pengumpulanTugas->first()->file_tugas }}</span>
            </div>
            @if ($isKetua && $statusUpload)
                <div class="mt-3">
                    <form action="{{ route('mahasiswa.kelas_saya.hapusFile_tugas_kelompok', [$kelas->id, $materi->id, $tugas->id]) }}" method="POST">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm btn-flat">
                            <i class="fa fa-trash"></i> Hapus
                        </button>
                    </form>
                </div>
            @endif
        </div>

        <!-- Card untuk menampilkan anggota kelompok dan tombol tambah anggota -->
        <div class="col-lg-12">
            <div class="card card-flush h-lg-100">
                <div class="card-header mt-6">
                    <div class="card-title flex-column">
                        <h3 class="fw-bold mb-1">Anggota Kelompok</h3>
                        @if ($isKetua)
                            <div class="fs-6 text-gray-500">Tambahkan mahasiswa yang belum memiliki kelompok</div>
                        @endif
                    </div>
                    @if ($isKetua)
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_tambah_anggota">Tambah Anggota</a>
                        </div>
                    @endif
                </div>
                <div class="card-body d-flex flex-column p-9 pt-3 mb-9">
                    @foreach ($tugas->pengumpulanTugas as $pengumpulanTugas)
                        @foreach ($pengumpulanTugas->pengumpulanTugasDetails as $detail)
                            <div class="d-flex align-items-center mb-5">
                                <div class="me-5 position-relative">
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img src="{{ asset('storage/' . ($detail->mahasiswa->foto ?? 'fotos/profil.jpg')) }}" alt="User Photo" />
                                    </div>
                                </div>
                                <div class="fw-semibold">
                                    <a class="fs-5 fw-bold text-gray-900 text-hover-primary">{{ $detail->mahasiswa->nama_lengkap }}</a>
                                    <div class="text-gray-500" style="text-transform: capitalize">
                                        {{ $detail->status_anggota }} Kelompok
                                    </div>
                                </div>
                                @if ($isKetua)
                                    <div class="badge badge-light ms-auto">
                                        <div class="d-flex align-items-center">
                                            <button class="btn btn-danger btn-sm btn-flat delete-member"
                                                data-member-id="{{ $detail->mahasiswa->id }}"
                                                data-kelas-id="{{ $kelas->id }}"
                                                data-materi-id="{{ $materi->id }}"
                                                data-tugas-id="{{ $tugas->id }}"
                                                data-pengumpulandetail-id="{{ $detail->id }}">
                                                <i class="fa fa-trash"></i>&nbsp;Hapus
                                            </button>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    @else
        <!-- Jika belum ada pengumpulan tugas -->
        @if ($statusUpload)
            <form class="form" action="#" method="post">
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label text-lg-right">Upload Files:</label>
                    <div class="col-lg-10">
                        <div class="dropzone dropzone-queue mb-2" id="kt_tambah_tugas_kelompok_file"
                            data-kelas-id="{{ $kelas->id }}"
                            data-materi-id="{{ $materi->id }}"
                            data-tugas-id="{{ $tugas->id }}">
                            <div class="dropzone-panel mb-lg-0 mb-2">
                                <a class="dropzone-select btn btn-sm btn-primary me-2">Pilih File</a>
                                <a class="dropzone-remove-all btn btn-sm btn-light-primary">Remove All</a>
                            </div>
                            <div class="dropzone-items wm-200px">
                                <div class="dropzone-item" style="display:none">
                                    <div class="dropzone-file">
                                        <div class="dropzone-filename" title="some_image_file_name.jpg">
                                            <span data-dz-name>some_image_file_name.jpg</span>
                                            <strong>(<span data-dz-size>340kb</span>)</strong>
                                        </div>
                                        <div class="dropzone-error" data-dz-errormessage></div>
                                    </div>
                                    <div class="dropzone-progress">
                                        <div class="progress">
                                            <div
                                                class="progress-bar bg-primary"
                                                role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropzone-toolbar">
                                        <span class="dropzone-delete" data-dz-remove><i class="bi bi-x fs-1"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="form-text text-muted">Maksimal ukuran file adalah 1MB, harap mengupload hanya 1 file saja.</span>
                    </div>
                </div>
            </form>
        @endif
    @endif
@endif
