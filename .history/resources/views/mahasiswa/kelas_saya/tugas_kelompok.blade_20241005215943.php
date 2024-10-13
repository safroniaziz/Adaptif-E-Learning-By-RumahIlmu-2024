@extends('mahasiswa/kelas_saya.detail_materi_template')
@section('contentMateri')
<div class="flex-lg-row-fluid">
    <!--begin::Extended content-->
    @foreach ($materi->tugasKelompoks as $tugas)
        <div class="mb-1">
            <!--begin::Content-->
            <div class="mb-15">
                <!--begin::Title-->
                <h4 class="fs-2x text-gray-800 w-bolder mb-6">{{ $tugas->judul_tugas }}</h4>
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
                <!--begin::Form-->
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
            <div class="dropzone dropzone-queue mb-2" id="kt_tambah_tugas_kelompok_file">
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

            <!-- Add this block to display the alert if the deadline has passed -->
            @php
                $currentTime = new DateTime();
                $deadlineTime = new DateTime($tugas->waktu_selesai);
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
            @endif
        </div>
        <!--end::Col-->
    </div>
    <!--end::Input group-->
</form>
<!--end::Form-->
                <!--end::Form-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Extended content-->
    @endforeach
</div>
@endsection

@push('scripts')
    <script>
        // set the dropzone container id
        const id = "#kt_tambah_tugas_kelompok_file";
        const dropzone = document.querySelector(id);

        // set the preview element template
        var previewNode = dropzone.querySelector(".dropzone-item");
        previewNode.id = "";
        var previewTemplate = previewNode.parentNode.innerHTML;
        previewNode.parentNode.removeChild(previewNode);

        var myDropzone = new Dropzone(id, { // Make the whole body a dropzone
            url: "{{ route('mahasiswa.kelas_saya.upload_tugas_kelompok', [$kelas->id, $materi->id]) }}", // URL upload
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}" // Kirim CSRF token untuk keamanan
            },
            parallelUploads: 1,
            maxFilesize: 1, // Max filesize in MB
            previewTemplate: previewTemplate,
            previewsContainer: id + " .dropzone-items", // Define the container to display the previews
            clickable: id + " .dropzone-select" // Define the element that should be used as click trigger to select files.
        });

        myDropzone.on("addedfile", function (file) {
            // Hookup the start button
            const dropzoneItems = dropzone.querySelectorAll('.dropzone-item');
            dropzoneItems.forEach(dropzoneItem => {
                dropzoneItem.style.display = '';
            });
        });

        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function (progress) {
            const progressBars = dropzone.querySelectorAll('.progress-bar');
            progressBars.forEach(progressBar => {
                progressBar.style.width = progress + "%";
            });
        });

        myDropzone.on("sending", function (file) {
            // Show the total progress bar when upload starts
            const progressBars = dropzone.querySelectorAll('.progress-bar');
            progressBars.forEach(progressBar => {
                progressBar.style.opacity = "1";
            });
        });

        // Hide the total progress bar when nothing"s uploading anymore
        myDropzone.on("complete", function (progress) {
            const progressBars = dropzone.querySelectorAll('.dz-complete');

            setTimeout(function () {
                progressBars.forEach(progressBar => {
                    progressBar.querySelector('.progress-bar').style.opacity = "0";
                    progressBar.querySelector('.progress').style.opacity = "0";
                });
            }, 300);
        });
    </script>
@endpush
