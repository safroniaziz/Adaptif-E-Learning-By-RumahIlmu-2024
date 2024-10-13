<div class="modal fade" id="modalPenilaian" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Penilaian Anggota</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Tambahkan Informasi Nama Mahasiswa -->
                <p class="fw-semibold">Anda Akan Menilai Kinerja <span id="namaMahasiswa" class="fw-bold"></span></p>
                <p>Isi penilaian kinerja teman dengan memilih satu dari jangkauan pilihan:</p>
                <ul>
                    <li>Nilai 1 = sangat tidak berkontribusi</li>
                    <li>Nilai 10 = sangat berkontribusi</li>
                </ul>

                <form action="{{ route('mahasiswa.kelas_saya.simpan_kuis', [$materi->topikPembahasanKelas->kelas->id, $materi->id]) }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="tab-content">
                        <div id="kt_activity_today" class="card-body p-0 tab-pane fade show active" role="tabpanel" aria-labelledby="kt_activity_today_tab">
                            <div class="timeline timeline-border-dashed">
                                @foreach ($kuis as $index => $pertanyaanKuis)
                                    <div class="form-check" style="padding-left: 0px !important;">
                                        <div class="timeline-item mb-4">
                                            <div class="timeline-line"></div>
                                            <div class="timeline-icon">
                                                <span class="fs-5 text-white d-flex align-items-center justify-content-center"
                                                    style="background-color: #6c5ce7; width: 30px; height: 30px; border-radius: 50%;">
                                                    {{ $index + 1 }}
                                                </span>
                                            </div>
                                            <div class="timeline-content ms-4">
                                                <div class="d-flex align-items-center">
                                                    <div class="fs-5 fw-semibold mb-2">
                                                        {!! $pertanyaanKuis->bankSoalPembahasan->pertanyaan !!}
                                                    </div>
                                                </div>
                                                <div class="overflow-auto mt-3">
                                                    <div class="d-flex flex-column align-items-start">
                                                        @foreach ($pertanyaanKuis->bankSoalPembahasan->jawabans as $jawaban)
                                                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex flex-stack text-start p-1 mb-2 w-100">
                                                                <div class="d-flex align-items-center me-2">
                                                                    <div class="form-check form-check-custom form-check-solid form-check-primary me-2">
                                                                        <input type="hidden" name="kuis_{{ $index }}" value="{{ $pertanyaanKuis->bankSoalPembahasan->id }}">
                                                                        <input class="form-check-input" type="radio"
                                                                               name="jawaban_{{ $index }}"
                                                                               value="{{ $jawaban->id }}"
                                                                               {{ old('jawaban_' . $index) == $jawaban->id ? 'checked' : '' }}
                                                                               style="transform: scale(0.6);"
                                                                                />
                                                                    </div>
                                                                    <div class="fs-7">
                                                                        {{ $jawaban->jawaban }}
                                                                    </div>
                                                                </div>
                                                            </label>
                                                        @endforeach
                                                    </div>
                                                    <div class="fv-row mb-7">
                                                        <label class="fs-6 fw-semibold form-label mt-3">
                                                            <span>Alasan</span>
                                                            <span class="ms-1" data-bs-toggle="tooltip" title="Masukan alasan anda memilih jawaban! (optional).">
                                                                <i class="ki-duotone ki-information fs-7">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                </i>
                                                            </span>
                                                        </label>
                                                        <textarea class="form-control form-control-solid" name="alasan_{{ $index }}"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="card-footer" style="text-align: left;padding: 15px;">
                        <button type="submit" id="submitKuis" class="btn btn-primary mt-3">Simpan Jawaban</button>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary" form="formPenilaian">Simpan Penilaian</button>
            </div>
        </div>
    </div>
</div>
