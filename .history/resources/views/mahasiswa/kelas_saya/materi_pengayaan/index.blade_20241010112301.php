@extends('mahasiswa/kelas_saya.detail_materi_template')

@section('contentMateri')
<div class="container-fluid">
    @foreach ($pengayaans as $pengayaan)
        <div class="card card-flush pt-3 mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header">
                <!--begin::Card title-->
                <div class="card-title">
                    <h2>{{ $pengayaan->judul }}</h2>
                </div>
            </div>
            <!--end::Card header-->

            <!--begin::Card body-->
            <div class="card-body pt-2">
                {{ $pengayaan->isi_materi !!}
            </div>
            <!--end::Card body-->
        </div>
    @endforeach
</div>
@endsection
