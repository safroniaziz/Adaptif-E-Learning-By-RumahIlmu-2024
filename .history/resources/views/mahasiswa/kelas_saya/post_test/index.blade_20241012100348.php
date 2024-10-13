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
        @if($alertDiskusi)
            <!--begin::Alert-->
            <div class="alert alert-dismissible bg-light-primary border border-primary d-flex flex-column flex-sm-row p-5 mb-10">
                <!--begin::Icon-->
                <i class="ki-duotone ki-search-list fs-2hx text-success me-4 mb-5 mb-sm-0">
                    <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                </i>
                <div class="d-flex flex-column pe-0 pe-sm-10">
                    <!--begin::Title-->
                    <h5 class="mb-1">Tidak Ada Diskusi</h5>
                    <!--end::Title-->

                    <!--begin::Content-->
                    <span>Anda belum mengikuti diskusi apa pun. Harap ikuti diskusi untuk melanjutkan.</span>
                    <!--end::Content-->
                </div>
                <!--end::Wrapper-->

                <!--begin::Close-->
                <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                    <i class="ki-duotone ki-cross fs-1 text-success">
                        <span class="path1"></span><span class="path2"></span>
                    </i>
                </button>
                <!--end::Close-->
            </div>
            <!--end::Alert-->
        @endif
    </div>
</div>
@endsection
