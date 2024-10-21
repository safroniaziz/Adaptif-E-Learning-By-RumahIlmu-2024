@extends('layouts.admin')
@section('subTitle','Soal Kuis Pembahasan')
@section('page','Soal Kuis Pembahasan')
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
                <h3 class="box-title"> Soal Kuis Pembahasan</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger">
                            <b><i>Perhatian : </i></b><i>Silahkan pilih kelas terlebih dahulu</i>
                        </div>
                    </div>
                    <div class="col-md-12 table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="table" style="width:100%;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Pertanyaan</th>
                                    <th>Jawaban</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($soal->jawabans as $index => $jawaban)
                                    <tr>
                                        <td>{{ $index+1 }}</td>
                                        <td>{!! $jawaban->bankSoalPembahasan->pertanyaan !!}</td>
                                        <td>{!! $jawaban->jawaban !!}</td>
                                        <td>
                                            @if ($jawaban->status_jawaban == "1")
                                                <small class="label label-success">Benar</small>
                                            @else
                                                <small class="label label-danger">Salah</small>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="action-buttons">
                                                <form action="{{ route('soalKuis.jawaban.delete',[$kelas->id, $soal->id,$jawaban->id]) }}" method="POST" style="margin: 0;">
                                                    {{ csrf_field() }} {{ method_field("DELETE") }}
                                                    <button type="submit" class="btn btn-danger btn-sm btn-flat show_confirm"><i class="fa fa-trash"></i>&nbsp; Hapus</button>
                                                </form>
                                            </div>
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
@include('admin/validasi')
@include('admin/soal_kuis/jawaban/modal_tambah')
@push('scripts')
    <script>
        @if(session('success'))
            swal({
                title: "Berhasil!",
                text: "{{ session('success') }}",
                icon: "success",
                button: "OK",
            });
        @endif

        $(document).ready(function() {
            // Inisialisasi CKEditor untuk textarea 'cpmk_create'
            if (typeof ClassicEditor !== 'undefined') {

                var cpmkEditEditor;

                $('#modalTambah').on('shown.bs.modal', function() {
                    if (!cpmkEditEditor) {
                        ClassicEditor
                            .create(document.querySelector('#jawaban'))
                            .then(editor => {
                                cpmkEditEditor = editor;
                            })
                            .catch(error => {
                                console.error(error);
                            });
                    }
                });

                $('#modalTambah').on('hidden.bs.modal', function() {
                    if (cpmkEditEditor) {
                        cpmkEditEditor.destroy()
                            .then(() => {
                                cpmkEditEditor = null;
                            })
                            .catch(error => {
                                console.error(error);
                            });
                    }
                });
            } else {
                console.error('ClassicEditor is not defined');
            }
        });

        function editRubrikPenilaian(id){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            url = "{{ url('rubrik_penilaian') }}/" + id +'/edit';
            $.ajax({
                url : url,
                type : 'GET',
                success : function(data){
                    $('#modalTambah').modal('show');
                    $('#rubrik_penilaian_id_edit').val(data.id);
                    $('#rubrik_penilaian_edit').val(data.rubrik_penilaian);
                },
                error:function(){
                    $('#gagal').show(100);
                }
            });
            return false;
        }

        $('.show_confirm').click(function(event) {
            var form =  $(this).closest("form");
            event.preventDefault();
            swal({
                title: `Apakah Anda Yakin?`,
                text: "Harap untuk memeriksa kembali sebelum menghapus data.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
        });
    </script>
@endpush

