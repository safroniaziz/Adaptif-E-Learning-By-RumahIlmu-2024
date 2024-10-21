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
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data->mahasiswas as $index => $mahasiswa)
                                    <tr>
                                        <td>{{ $index+1 }}</td>
                                        <td>{{ $mahasiswa->nama_lengkap }}</td>
                                        <td>{{ $mahasiswa->email }}</td>
                                        <td>{{ $mahasiswa->username }}</td>
                                        <td>{{ $mahasiswa->jenis_kelamin }}</td>
                                        <td>{{ $mahasiswa->jalur_masuk }}</td>
                                        <td>{{ $mahasiswa->asal_sekolah }}</td>
                                        <td>{{ $mahasiswa->rata_ujian }}</td>
                                        <td>{{ $mahasiswa->asal_provinsi_sma }}</td>
                                        <td>
                                            <a href="{{ route('kelas.mahasiswa.aktivitas',[$data->id, $mahasiswa->id]) }}" class="btn btn-primary btn-sm btn-flat">{{ $mahasiswa->activities_count }} Data</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm btn-flat">{{ $mahasiswa->details_count }} Data</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-warning btn-sm btn-flat">{{ $mahasiswa->details_count }} Data</a>
                                        </td>
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
