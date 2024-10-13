@extends('mahasiswa/kelas_saya.detail_materi_template')
@section('contentMateri')
<div class="flex-lg-row-fluid">
    <!--begin::Extended content-->
    <div class="mb-13">
        <!--begin::Content-->
        <div class="mb-15">
            <!--begin::Title-->
            <h4 class="fs-2x text-gray-800 w-bolder mb-6">Materi</h4>
            <!--end::Title-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Extended content-->
    <div class="mb-17">
        <!--begin::Content-->
        <div class="d-flex flex-stack mb-5">
            <!--begin::Title-->
            <h4 class="fs-2x text-gray-900 w-bolder mb-6">Kuis Post Test</h4>
            <!--end::Title-->
        </div>
        <!--end::Content-->
        <!--begin::Separator-->
        <div class="separator separator-dashed mb-9"></div>
        <!--end::Separator-->

    </div>
</div>
@endsection

@push('scripts')
    <script>
        // Jika pengiriman sukses, tampilkan pesan sukses dengan SweetAlert
        @if (session('success'))
            Swal.fire({
                title: 'Berhasil!',
                text: '{{ session("success") }}',
                icon: 'success',
                confirmButtonText: 'Tutup',
                customClass: {
                    confirmButton: "btn btn-primary"
                }
            });
        @endif
    </script>
@endpush
