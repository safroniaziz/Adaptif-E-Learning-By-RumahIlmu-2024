@extends('mahasiswa/kelas_saya.detail_materi_template')

@section('contentMateri')
<div class="container-fluid">
    @foreach ($pengayaans as $pengayaan)
        <div class="card card-custom mb-5">
            <!--begin::Card header-->
            <div class="card-header bg-dark text-white position-relative" style="border-radius: 15px 15px 0 0;">
                <!--begin::Card icon-->
                <div class="card-icon bg-white text-primary position-absolute top-50 start-0 translate-middle-y ms-4 rounded-circle">
                    <i class="fas fa-book-open fa-2x"></i>
                </div>
                <!--end::Card icon-->
                <!--begin::Card title-->
                <div class="card-title ms-5 ps-5">
                    <h2 class="text-white">{{ $pengayaan->judul }}</h2> <!-- Teks tetap putih, background gelap -->
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
<style>
    .card-custom {
        border: none;
        border-radius: 15px;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .card-custom:hover {
        transform: translateY(-10px); /* Lift effect on hover */
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1); /* Soft shadow */
    }

    .card-header {
        padding: 20px;
        background-color: #343a40; /* Background gelap */
        border-radius: 15px 15px 0 0; /* Rounded top corners */
        position: relative;
        overflow: hidden;
    }

    .card-title h2 {
        font-weight: 600;
        font-size: 24px;
        margin: 0;
        color: white; /* Teks putih agar terlihat pada background gelap */
    }

    .card-body {
        padding: 20px;
        background-color: #f0f4f7; /* Light background for contrast */
        border-radius: 0 0 15px 15px; /* Rounded bottom corners */
        font-size: 16px;
        line-height: 1.7;
    }

    .card-icon {
        width: 50px;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        border: 2px solid #fff;
        transition: background-color 0.3s ease;
    }

    .card-icon i {
        font-size: 24px;
    }

    .card-custom:hover .card-icon {
        background-color: #007bff; /* Change icon background color on hover */
    }
</style>
@endpush
