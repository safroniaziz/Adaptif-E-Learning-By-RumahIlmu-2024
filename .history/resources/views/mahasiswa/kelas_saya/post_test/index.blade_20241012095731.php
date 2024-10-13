@extends('mahasiswa/kelas_saya.detail_materi_template')
@section('contentMateri')
<div class="flex-lg-row-fluid">
    <div class="mb-17">
        <!--begin::Content-->
        <div class="d-flex flex-stack mb-2">
            <!--begin::Title-->
            <h4 class="fs-2x text-gray-800 w-bolder mb-2">Kuis Post Test</h4>
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
