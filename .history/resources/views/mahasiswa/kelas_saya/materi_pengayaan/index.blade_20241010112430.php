@extends('mahasiswa/kelas_saya.detail_materi_template')

@section('contentMateri')
<div class="container-fluid">
    @foreach ($pengayaans as $pengayaan)
        <div class="card card-flush pt-3 mb-5 mb-xl-10 card-custom">
            <!--begin::Card header-->
            <div class="card-header bg-light-primary">
                <!--begin::Card title-->
                <div class="card-title">
                    <h2 class="text-primary">{{ $pengayaan->judul }}</h2>
                </div>
            </div>
            <!--end::Card header-->

            <!--begin::Card body-->
            <div class="card-body pt-2">
                {!! $pengayaan->isi_materi !!}
            </div>
            <!--end::Card body-->
        </div>
    @endforeach
</div>
@endsection

@push('styles')
<style>
    .card-custom {
        transition: all 0.3s ease; /* Smooth hover effect */
        border: 1px solid #e0e0e0;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }

    .card-custom:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Hover shadow effect */
        transform: translateY(-5px); /* Card moves up a little on hover */
    }

    .card-header {
        padding: 15px;
    }

    .card-body {
        padding: 20px;
        background-color: #f9f9f9; /* Light background to distinguish content */
        font-size: 16px;
        line-height: 1.7;
    }

    .card-title h2 {
        font-weight: 700;
        font-size: 24px;
    }
</style>
@endpush
