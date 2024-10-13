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
                                $sisaHari = floor(\Carbon\Carbon::now()->diffInDays(\Carbon\Carbon::parse($tugas->waktu_selesai), false));
                            @endphp

                            @if ($sisaHari > 0)
                                Selesai Dalam {{ $sisaHari }} hari
                            @elseif ($sisaHari == 0)
                                Tugas berakhir hari ini
                            @else
                                Waktu pengerjaan sudah berakhir
                            @endif
                        </span>

                        @if ($tugas->status_upload == 1)
                            <span class="fs-7 text-warning d-flex align-items-center mt-1">
                                <span class="bullet bullet-dot bg-warning mx-2"></span>
                                Anda tetap dapat mengunggah meskipun waktu pengerjaan sudah habis
                            </span>
                        @elseif ($tugas->status_upload == 0)
                            <span class="fs-7 text-secondary d-flex align-items-center mt-1">
                                <span class="bullet bullet-dot bg-secondary mx-2"></span>
                                Waktu pengerjaan sudah berakhir, Anda tidak dapat mengunggah lagi
                            </span>
                        @endif
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

                <!-- Modal for uploading assignment -->
                <div class="modal fade" id="kt_modal_upload_tugas" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="fw-bold">Upload Tugas Kelompok</h2>
                                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                                </div>
                            </div>
                            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                <form id="kt_modal_upload_tugas_form" class="form" action="#">
                                    <div class="fv-row mb-7">
                                        <label class="d-block fw-semibold fs-6 mb-5">File Tugas</label>
                                        <div class="dz-dropzone dz-clickable" id="kt_modal_upload_tugas_dropzone">
                                            <div class="dz-message needsclick">
                                                <i class="ki-duotone ki-file-up fs-3hx text-primary"><span class="path1"></span><span class="path2"></span></i>
                                                <div class="ms-4">
                                                    <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
                                                    <span class="fs-7 fw-semibold text-gray-400">Upload up to 10 files</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center pt-15">
                                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" id="kt_modal_upload_tugas_submit" class="btn btn-primary">
                                            <span class="indicator-label">Submit</span>
                                            <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Content-->
        </div>
        <!--end::Extended content-->

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
                        <form id="kt_modal_new_target_form" class="form" action="{{ route('mahasiswa.kelas_saya.simpan_anggota',[$kelas->id, $materi->id, $tugas->id]) }}">
                            <meta name="csrf-token" content="{{ csrf_token() }}">
                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Nama Anggota</span>
                                </label>
                                <select class="form-select form-select-sm form-select-solid" name="anggota_id[]" data-control="select2" data-close-on-select="true" data-placeholder="Pilih anggota" data-allow-clear="true" multiple="multiple">
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
    @endforeach
</div>

@endsection

@push('scripts')
    <script>
        document.querySelectorAll('.delete-member').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const memberId = this.getAttribute('data-member-id');
                const kelasId = this.getAttribute('data-kelas-id'); // Ambil ID kelas
                const materiId = this.getAttribute('data-materi-id'); // Ambil ID materi
                const tugasId = this.getAttribute('data-tugas-id');
                const pengumpulanDetailId = this.getAttribute('data-pengumpulandetail-id');

                const deleteMemberUrl = `{{ route('mahasiswa.kelas_saya.hapus_anggota', ['kelas' => ':kelas', 'materi' => ':materi', 'tugasKelompok' => ':tugas', 'anggota' => ':anggota', 'pengumpulanTugasDetail' => ':pengumpulanDetailId']) }}`.replace(':kelas', kelasId)
                                                                                                                               .replace(':materi', materiId)
                                                                                                                               .replace(':tugas', tugasId)
                                                                                                                               .replace(':anggota', memberId)
                                                                                                                               .replace(':pengumpulanDetailId', pengumpulanDetailId);
                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Klik Ya, Hapus jika anda yakin!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Send delete request
                        fetch(deleteMemberUrl, {
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                'Content-Type': 'application/json'
                            },
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                Swal.fire(
                                    'Terhapus!',
                                    'Anggota kelompok telah dihapus.',
                                    'success'
                                ).then(() => {
                                    // Reload the page or update the UI
                                    location.reload();
                                });
                            } else {
                                Swal.fire(
                                    'Gagal!',
                                    'Terjadi kesalahan saat menghapus anggota.',
                                    'error'
                                );
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            submitButton.removeAttribute('data-kt-indicator');
                            submitButton.disabled = false;

                            Swal.fire({
                                text: error.message || "Terjadi kesalahan jaringan. Silakan coba lagi nanti.",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, mengerti!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });
                        });
                    }
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            // Ambil elemen dropzone dan parameter dari data-attributes
            const dropzone = document.querySelector("#kt_tambah_tugas_kelompok_file");
            if (dropzone) {
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
            }
        });

        // Kode untuk menangani submit modal
        const form = document.querySelector('#kt_modal_new_target_form');
        const submitButton = document.querySelector('#kt_modal_new_target_submit');
        const modal = document.querySelector('#kt_modal_tambah_anggota');

        if (form) {
            form.addEventListener('submit', function (e) {
                e.preventDefault();

                const selectElement = form.querySelector('select.form-select');

                if (!selectElement || selectElement.selectedOptions.length === 0) {
                    Swal.fire({
                        text: "Mohon pilih setidaknya satu anggota kelompok.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, mengerti!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });
                    return;
                }

                submitButton.setAttribute('data-kt-indicator', 'on');
                submitButton.disabled = true;

                const formData = new FormData(form);

                const csrfToken = '{{ csrf_token() }}';

                if (!csrfToken) {
                    console.error('CSRF token not found');
                    return;
                }

                fetch(form.action, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    }
                })
                .then(response => {
                    console.log('Response Status:', response.status);
                    console.log('Response Headers:', response.headers);
                    return response.text().then(text => {
                        console.log('Response Text:', text);
                        try {
                            return JSON.parse(text);
                        } catch (e) {
                            throw new Error('Invalid JSON response: ' + text);
                        }
                    });
                })
                .then(data => {
                    submitButton.removeAttribute('data-kt-indicator');
                    submitButton.disabled = false;

                    if (data.success) {
                        Swal.fire({
                            text: "Anggota kelompok berhasil ditambahkan!",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, mengerti!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        }).then(function () {
                            const modalInstance = bootstrap.Modal.getInstance(modal);
                            modalInstance.hide();
                            location.reload();
                        });
                    } else {
                        let errorMessage = data.message || "Terjadi kesalahan saat menambahkan anggota kelompok.";
                        Swal.fire({
                            text: errorMessage,
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, mengerti!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    submitButton.removeAttribute('data-kt-indicator');
                    submitButton.disabled = false;

                    Swal.fire({
                        text: error.message || "Terjadi kesalahan jaringan. Silakan coba lagi nanti.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, mengerti!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });
                });
            });
        }

        if (cancelButton) {
            cancelButton.addEventListener('click', function (e) {
                e.preventDefault();
                const modal = bootstrap.Modal.getInstance(document.querySelector('#kt_modal_tambah_anggota'));
                modal.hide();
            });
        }

        // Mencegah modal dari menutup ketika mengklik di luar modal
        if (modal) {
            modal.addEventListener('click', function (e) {
                if (e.target === this) {
                    e.preventDefault();
                    e.stopPropagation();
                }
            });
        }

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
