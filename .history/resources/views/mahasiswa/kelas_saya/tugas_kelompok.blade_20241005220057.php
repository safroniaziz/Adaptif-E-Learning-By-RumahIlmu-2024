@extends('mahasiswa/kelas_saya.detail_materi_template')

@section('contentMateri')
<div class="flex-lg-row-fluid" id="reload">
    <!--begin::Extended content-->
    @foreach ($materi->tugasKelompoks as $tugas)
        <div class="mb-1">
            <!--begin::Content-->
            <div class="mb-15">
                <!--begin::Title-->
                <h4 class="fs-2x text-gray-800 w-bolder mb-6">
                    <div class="tugas tugas-clickable" data-tugas-id="{{ $tugas->id }}">
                        {{ $tugas->judul_tugas }}
                    </div>
                </h4>
                <!--end::Title-->

                <div class="mb-5">
                    <div class="fw-semibold text-gray-600 fs-5">Waktu Pengerjaan:</div>
                    <div class="fw-bold fs-6 text-gray-800 d-flex flex-column">
                        {{ \Carbon\Carbon::parse($tugas->waktu_mulai)->translatedFormat('l, d F Y') }} -
                        {{ \Carbon\Carbon::parse($tugas->waktu_selesai)->translatedFormat('l, d F Y') }}
                        <br>
                        <span class="fs-7 text-danger d-flex align-items-center mt-2">
                            <span class="bullet bullet-dot bg-danger mx-2"></span>
                            @php
                                $sisaHari = \Carbon\Carbon::now()->diffInDays(\Carbon\Carbon::parse($tugas->waktu_selesai), false);
                            @endphp
                            @if ($sisaHari > 0)
                                Selesai Dalam {{ $sisaHari }} hari
                            @elseif ($sisaHari == 0)
                                Tugas berakhir hari ini
                            @else
                                Waktu pengerjaan sudah berakhir
                            @endif
                        </span>
                    </div>
                </div>
                <a target="_blank" href="{{ asset($tugas->file_tugas) }}" download class="text-white btn btn-success btn-sm my-1">
                    Download File
                </a>

                <!--begin::Text-->
                <p class="fw-semibold fs-4 text-gray-600 mb-2">
                    {!! $tugas->tugas !!}
                </p>
                <!--end::Text-->
                <div class="separator separator-dashed my-5"></div>

                <div class="py-2 mb-5">
                    <h2>Formulir Pengumpulan Tugas Kelompok</h2>
                </div>
                @php
                    $currentTime = new DateTime();
                    $deadlineTime = new DateTime($tugas->waktu_selesai);
                    $startTime = new DateTime($tugas->waktu_mulai);
                @endphp

                @if ($currentTime > $deadlineTime)
                    <div class="alert alert-dismissible bg-light-danger border-danger border-dashed d-flex flex-column flex-sm-row p-5 mb-10">
                        <!--begin::Icon-->
                        <i class="ki-duotone ki-error fs-2hx text-danger me-4 mb-5 mb-sm-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                        <!--end::Icon-->

                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column pe-0 pe-sm-10">
                            <!--begin::Title-->
                            <h5 class="mb-1">Batas Waktu Pengumpulan Tugas Telah Berlalu</h5>
                            <!--end::Title-->

                            <!--begin::Content-->
                            <span>Maaf, Anda sudah tidak dapat mengumpulkan tugas ini karena batas waktu pengumpulan telah berlalu.</span>
                            <!--end::Content-->
                        </div>
                        <!--end::Wrapper-->

                        <!--begin::Close-->
                        <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                            <i class="ki-duotone ki-cross fs-1 text-danger"><span class="path1"></span><span class="path2"></span></i>
                        </button>
                        <!--end::Close-->
                    </div>
                @elseif ($currentTime < $startTime)
                    <div class="alert alert-dismissible bg-light-warning border-warning border-dashed d-flex flex-column flex-sm-row p-5 mb-10">
                        <!--begin::Icon-->
                        <i class="ki-duotone ki-warning fs-2hx text-warning me-4 mb-5 mb-sm-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                        <!--end::Icon-->

                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column pe-0 pe-sm-10">
                            <!--begin::Title-->
                            <h5 class="mb-1">Pengumpulan Tugas Belum Dimulai</h5>
                            <!--end::Title-->

                            <!--begin::Content-->
                            <span>Maaf, waktu pengumpulan tugas belum dimulai. Harap tunggu hingga waktu mulai tiba.</span>
                            <!--end::Content-->
                        </div>
                        <!--end::Wrapper-->

                        <!--begin::Close-->
                        <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                            <i class="ki-duotone ki-cross fs-1 text-warning"><span class="path1"></span><span class="path2"></span></i>
                        </button>
                        <!--end::Close-->
                    </div>
                @else
                    @if ($materi && $tugas && $tugas->pengumpulanTugas->isNotEmpty())
                        <div class="alert alert-dismissible bg-light-primary border-primary border-dashed d-flex flex-column p-5 mb-2">
                            <i class="ki-duotone ki-primary fs-2hx text-primary me-4 mb-5"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                            <div class="d-flex flex-column pe-0 pe-sm-10">
                                <h5 class="mb-1">Terimakasih</h5>
                                <span>Pengumpulan tugas berhasil dilakukan, silahkan tambahkan anggota kelompok!</span>
                                <span class="text-danger" style="font-size:11px; margin-top: 10px;">File Tugas  : {{ $tugas->pengumpulanTugas->first()->file_tugas }}</span>
                            </div>
                            <div class="mt-3"> <!-- Add margin-top to space out from the content above -->
                                <form action="{{ route('mahasiswa.kelas_saya.hapusFile_tugas_kelompok',[$kelas->id,$materi->id,$tugas->id]) }}" method="POST">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-danger btn-sm btn-flat">
                                        <i class="fa fa-trash"></i> Hapus
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <!--begin::Card-->
                            <div class="card  card-flush h-lg-100">
                                <!--begin::Card header-->
                                <div class="card-header mt-6">
                                    <!--begin::Card title-->
                                    <div class="card-title flex-column">
                                        <h3 class="fw-bold mb-1">Anggota Kelompok</h3>

                                        <div class="fs-6 text-gray-500">Tambahkan mahasiswa yang belum memiliki kelompok</div>
                                    </div>
                                    <!--end::Card title-->

                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <a href="#" class="btn btn-sm btn-primary me-3"  data-bs-toggle="modal" data-bs-target="#kt_modal_tambah_anggota" >Tambah Anggota</a>
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end::Card toolbar-->

                                <!--begin::Card body-->
                                <div class="card-body d-flex flex-column p-9 pt-3 mb-9">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-5">
                                        <!--begin::Avatar-->
                                        <div class="me-5 position-relative">
                                            <!--begin::Image-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                                            <img alt="Pic" src="/metronic8/demo22/assets/media/avatars/300-6.jpg" />
                                                                    </div>
                                            <!--end::Image-->

                                                            </div>
                                        <!--end::Avatar-->

                                        <!--begin::Details-->
                                        <div class="fw-semibold">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">Emma Smith</a>

                                            <div class="text-gray-500">
                                                8 Pending & 97 Completed Tasks                    </div>
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Badge-->
                                        <div class="badge badge-light ms-auto">5</div>
                                        <!--end::Badge-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                            </div>
                        </div>
                    @else
                        <!--begin::Form-->
                        <form class="form" action="#" method="post">
                            <!--begin::Input group-->
                            <div class="form-group row">
                                <!--begin::Label-->
                                <label class="col-lg-2 col-form-label text-lg-right">Upload Files:</label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class="col-lg-10">
                                    <!--begin::Dropzone-->
                                    <div class="dropzone dropzone-queue mb-2" id="kt_tambah_tugas_kelompok_file"
                                        data-kelas-id="{{ $kelas->id }}"
                                        data-materi-id="{{ $materi->id }}"
                                        data-tugas-id="{{ $tugas->id }}">
                                        <!--begin::Controls-->
                                        <div class="dropzone-panel mb-lg-0 mb-2">
                                            <a class="dropzone-select btn btn-sm btn-primary me-2">Pilih File</a>
                                            <a class="dropzone-remove-all btn btn-sm btn-light-primary">Remove All</a>
                                        </div>
                                        <!--end::Controls-->

                                        <!--begin::Items-->
                                        <div class="dropzone-items wm-200px">
                                            <div class="dropzone-item" style="display:none">
                                                <!--begin::File-->
                                                <div class="dropzone-file">
                                                    <div class="dropzone-filename" title="some_image_file_name.jpg">
                                                        <span data-dz-name>some_image_file_name.jpg</span>
                                                        <strong>(<span data-dz-size>340kb</span>)</strong>
                                                    </div>

                                                    <div class="dropzone-error" data-dz-errormessage></div>
                                                </div>
                                                <!--end::File-->

                                                <!--begin::Progress-->
                                                <div class="dropzone-progress">
                                                    <div class="progress">
                                                        <div
                                                            class="progress-bar bg-primary"
                                                            role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Progress-->

                                                <!--begin::Toolbar-->
                                                <div class="dropzone-toolbar">
                                                    <span class="dropzone-delete" data-dz-remove><i class="bi bi-x fs-1"></i></span>
                                                </div>
                                                <!--end::Toolbar-->
                                            </div>
                                        </div>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Dropzone-->

                                    <!--begin::Hint-->
                                    <span class="form-text text-muted">Maksimal ukuran file adalah 1MB, harap mengupload hanya 1 file saja.</span>
                                    <!--end::Hint-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                        </form>
                        <!--end::Form-->
                    @endif
                @endif

            </div>
            <!--end::Content-->
        </div>
        <!--end::Extended content-->
    @endforeach
</div>
<div class="modal fade" id="kt_modal_tambah_anggota" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header align-items-start px-10">
                <!--begin::Modal title-->
                <h2 class="fw-bold">Tambah Anggota Kelompok</h2>
                <!--end::Modal title-->

                <!--begin::Close-->
                <button type="button" class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </button>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 pt-3 pb-5">
                <!--begin::Alert-->
                <div class="alert alert-danger d-flex align-items-center p-5 mb-5">
                    <i class="fas fa-exclamation-triangle fa-2x me-3 text-danger"></i>
                    <div class="d-flex flex-column">
                        <span class="fw-bold">Tambahkan mahasiswa yang belum ditambahkan di kelompok lain.</span>
                    </div>
                </div>
                <!--end::Alert-->

                <!--begin:Form-->
                <form id="kt_modal_new_target_form" class="form" action="#">
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Nama Anggota</span>
                        </label>
                        <select class="form-select form-select-sm form-select-solid" data-control="select2" data-close-on-select="false" data-placeholder="Pilih anggota" data-allow-clear="true" multiple="multiple">
                            <option></option>
                            @foreach($mahasiswas as $mahasiswa)
                                <option value="{{ $mahasiswa->mahasiswa->id }}">{{ $mahasiswa->mahasiswa->nama_lengkap }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" class="btn btn-light btn-sm me-3" data-bs-dismiss="modal">
                            Cancel
                        </button>

                        <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary btn-sm">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>


@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Ambil elemen dropzone dan parameter dari data-attributes
            const dropzone = document.querySelector("#kt_tambah_tugas_kelompok_file");
            const kelasId = dropzone.getAttribute('data-kelas-id');
            const materiId = dropzone.getAttribute('data-materi-id');
            const tugasId = dropzone.getAttribute('data-tugas-id');

            // Hasilkan URL route menggunakan Blade dengan parameter yang benar
            const routeUploadTugasKelompok = `{{ route('mahasiswa.kelas_saya.upload_tugas_kelompok', ['kelas' => 'PLACEHOLDER_KELAS', 'materi' => 'PLACEHOLDER_MATERI', 'tugasKelompok' => 'PLACEHOLDER_TUGAS']) }}`.replace('PLACEHOLDER_KELAS', encodeURIComponent(kelasId))
                                                                                                                    .replace('PLACEHOLDER_MATERI', encodeURIComponent(materiId))
                                                                                                                    .replace('PLACEHOLDER_TUGAS', encodeURIComponent(tugasId));

            // Inisialisasi Dropzone dengan URL dinamis
            var myDropzone = new Dropzone("#kt_tambah_tugas_kelompok_file", {
                url: routeUploadTugasKelompok, // URL upload dinamis
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}" // Kirim CSRF token untuk keamanan
                },
                maxFilesize: 1, // Max filesize in MB
                previewTemplate: document.querySelector("#kt_tambah_tugas_kelompok_file .dropzone-item").parentNode.innerHTML,
                previewsContainer: "#kt_tambah_tugas_kelompok_file .dropzone-items", // Define the container to display the previews
                clickable: "#kt_tambah_tugas_kelompok_file .dropzone-select" // Define the element that should be used as click trigger to select files.
            });

            myDropzone.on("addedfile", function (file) {
                if (myDropzone.files.length > 1) {
                    myDropzone.removeFile(file);
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Anda hanya dapat mengunggah 1 file saja!'
                    });
                } else {
                    const dropzoneItems = document.querySelectorAll('#kt_tambah_tugas_kelompok_file .dropzone-item');
                    if (dropzoneItems.length > 0) {
                        const lastDropzoneItem = dropzoneItems[dropzoneItems.length - 1];

                        // Apply the style only to the last item
                        lastDropzoneItem.style.display = ''; // Uncomment and adjust the style as needed

                        // Set a delay before showing the Swal alert
                        setTimeout(() => {
                            Swal.fire({
                                title: 'Berhasil!',
                                text: '{{ session("success") }}',
                                icon: 'success',
                                confirmButtonText: 'Tutup',
                                allowOutsideClick: false, // Disable closing by clicking outside
                                allowEscapeKey: false, // Disable closing by pressing Esc
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    // Reload only the content inside the div with id="relad"
                                    $.ajax({
                                        url: window.location.href, // Re-fetch current page content
                                        success: function(response) {
                                            // Use jQuery to replace the content of #relad with the new content
                                            $('#reload').html($(response).find('#reload').html());
                                        },
                                        error: function() {
                                            console.error('Failed to reload content');
                                        }
                                    });
                                }
                            });
                        }, 300); // 300ms delay (adjust as needed)
                    }
                }
            });

            myDropzone.on("totaluploadprogress", function (progress) {
                const progressBars = document.querySelectorAll('#kt_tambah_tugas_kelompok_file .progress-bar');
                progressBars.forEach(progressBar => {
                    progressBar.style.width = progress + "%";
                });
            });

            myDropzone.on("sending", function (file) {
                const progressBars = document.querySelectorAll('#kt_tambah_tugas_kelompok_file .progress-bar');
                progressBars.forEach(progressBar => {
                    progressBar.style.opacity = "1";
                });
            });

            myDropzone.on("complete", function (progress) {
                const progressBars = document.querySelectorAll('#kt_tambah_tugas_kelompok_file .dz-complete');

                setTimeout(function () {
                    progressBars.forEach(progressBar => {
                        progressBar.querySelector('.progress-bar').style.opacity = "0";
                        progressBar.querySelector('.progress').style.opacity = "0";
                    });
                }, 300);
            });
        });

        document.querySelector('#cancelButton').addEventListener('click', function(e) {
            const modalElement = document.querySelector('#kt_modal_new_target_form').closest('.modal');
            if (modalElement) {
                const modal = bootstrap.Modal.getInstance(modalElement); // Get the Bootstrap modal instance
                modal.hide(); // Hide the modal
            }
        });

        @if (session('success'))
            Swal.fire({
                title: 'Berhasil!',
                text: '{{ session("success") }}',
                icon: 'success',
                confirmButtonText: 'Tutup',
                allowOutsideClick: false,
                allowEscapeKey: false,
                customClass: {
                    confirmButton: "btn btn-primary"
                }
            });
        @endif

        @if (session('error'))
            Swal.fire({
                title: 'Gagal!',
                text: '{{ session("gagal") }}',
                icon: 'error',
                confirmButtonText: 'Tutup',
                customClass: {
                    confirmButton: "btn btn-danger"
                }
            });
        @endif
    </script>
@endpush
