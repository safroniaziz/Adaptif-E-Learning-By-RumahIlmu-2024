@extends('mahasiswa/kelas_saya.detail_materi_template')

@section('contentMateri')
<div class="container-fluid">
    @foreach ($pengayaans as $pengayaan)
        <div class="card card-custom mb-5">
            <!--begin::Card header-->
            <div class="card-header bg-gradient-primary text-white position-relative" style="border-radius: 15px 15px 0 0;">
                <!--begin::Card icon-->
                <div class="card-icon bg-white text-primary position-absolute top-50 start-0 translate-middle-y ms-4 rounded-circle">
                    <i class="fas fa-book-open fa-2x"></i>
                </div>
                <!--end::Card icon-->
                <!--begin::Card title-->
                <div class="card-title ms-5 ps-5">
                    <h2 class="text-white">{{ $pengayaan->judul }}</h2>
                </div>
            </div>
            <!--end::Card header-->

            <!--begin::Card body-->
            <div class="card-body pt-4 pb-5" style="background-color: #f0f4f7; border-radius: 0 0 15px 15px;">
                {!! $pengayaan->isi_materi !!}
            </div>
            <!--end::Card body-->
        </div>
    @endforeach
</div>
@endsection

@push('styles')

@endpush
