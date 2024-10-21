<div class="modal fade" id="modalTambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('soalKuis.jawaban.post',[$kelas->id, $soal->id]) }}" method="POST" class="form">
                {{ csrf_field() }}
                {{ method_field('POST') }}
                <!-- Input Fields -->
                <div class="modal-body">
                    <!-- Status Jawaban Field -->
                    <div class="form-group col-md-12">
                        <label for="status_jawaban">Status Jawaban</label>
                        <select name="status_jawaban" class="form-control" id="status_jawaban" required>
                            <option disabled selected>-- pilih status --</option>
                            <option value="1">Benar</option>
                            <option value="0">Salah</option>
                        </select>
                    </div>
                    <!-- Jawaban Field -->
                    <div class="form-group col-md-12">
                        <label for="jawaban">Jawaban</label>
                        <textarea name="jawaban" class="form-control" id="jawaban" cols="30" rows="10"></textarea>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm btn-flat" data-dismiss="modal">
                        <i class="fa fa-close"></i>&nbsp;Batalkan
                    </button>
                    <button type="submit" class="btn btn-primary btn-sm btn-flat">
                        <i class="fa fa-check-circle"></i>&nbsp;Simpan
                    </button>
                </div>
            </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
