@extends('layouts.admin')
@section('subTitle','Mahasiswa Mengambil Kelas')
@section('page','Mahasiswa Mengambil Kelas')
@section('login_as')
    Selamat Datang,
@endsection
@section('user-login2')
    {{ Auth::user()->nama_lengkap }}
@endsection
@section('sidebar')
    @include('layouts.partials.sidebar')
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"> Aktivitas Mahasiswa ({{ $mahasiswa->nama_lengkap }})</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12 table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="table" style="width:100%;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Description</th>
                                    <th>Subject Type</th>
                                    <th>Subject</th>
                                    <th>Event</th>
                                    <th>Properties</th>
                                    <th>Created at</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $index => $aktivitas)
                                    <tr>
                                        <td>{{ $index+1 }}</td>
                                        <td>{{ $aktivitas->description }}</td>
                                        <td>{{ $aktivitas->subject_type }}</td>
                                        <td>{{ $aktivitas->subject_id }}</td>
                                        <td>{{ $aktivitas->event }}</td>
                                        <td>{{ $aktivitas->jalur_masuk }}</td>
                                        <td>{{ $aktivitas->asal_sekolah }}</td>
                                        <td>{{ $aktivitas->rata_ujian }}</td>
                                        <td>{{ $aktivitas->asal_provinsi_sma }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
