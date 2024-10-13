@extends('mahasiswa/kelas_saya.detail_materi_template')
@section('contentMateri')
<div class="flex-lg-row-fluid">
    <div class="mb-17">
        <div class="d-flex flex-stack mb-2">
            <h4 class="fs-2x text-gray-800 w-bolder mb-2">Kuis Post Test</h4>
        </div>
        <div class="separator separator-dashed mb-9"></div>
        @if($alertDiskusi)
            <div class="alert alert-dismissible bg-light-danger border border-danger border-dashed d-flex flex-column flex-sm-row w-100 p-5 mb-10">
                <i class="ki-duotone ki-message-text-2 fs-2hx text-danger me-4 mb-5 mb-sm-0">
                    <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                </i>
                <div class="d-flex flex-column pe-0 pe-sm-10">
                    <h5 class="mb-1">Tidak Ada Diskusi</h5>
                    <span>Anda belum mengikuti diskusi apa pun. Harap ikuti diskusi untuk melanjutkan.</span>
                </div>
                <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" >
                    <i class="ki-duotone ki-cross fs-1 text-danger">
                        <span class="path1"></span><span class="path2"></span>
                    </i>
                </button>
            </div>
        @else
            @if ($alertTugasKelompok)
                <div class="alert alert-dismissible bg-light-danger border border-danger border-dashed d-flex flex-column flex-sm-row w-100 p-5 mb-10">
                    <i class="ki-duotone ki-message-text-2 fs-2hx text-danger me-4 mb-5 mb-sm-0">
                        <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                    </i>
                    <div class="d-flex flex-column pe-0 pe-sm-10">
                        <h5 class="mb-1">Tidak Ada Tu</h5>
                        <span>Anda belum mengikuti diskusi apa pun. Harap ikuti diskusi untuk melanjutkan.</span>
                    </div>
                    <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" >
                        <i class="ki-duotone ki-cross fs-1 text-danger">
                            <span class="path1"></span><span class="path2"></span>
                        </i>
                    </button>
                </div>
            @endif
        @endif
    </div>
</div>
@endsection
