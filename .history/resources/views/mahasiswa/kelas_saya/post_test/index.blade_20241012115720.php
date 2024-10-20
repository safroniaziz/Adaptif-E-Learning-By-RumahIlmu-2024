@extends('mahasiswa/kelas_saya.detail_materi_template')
@section('contentMateri')
<div class="flex-lg-row-fluid">
    <div class="mb-17">
        <div class="d-flex flex-stack mb-2">
            <h4 class="fs-2x text-gray-800 w-bolder mb-2">Kuis Post Test</h4>
        </div>
        <div class="separator separator-dashed mb-9"></div>

        @php
            $alertMessage = null;
            $alertTitle = null;
            $alertType = 'danger';

            if ($alertDiskusi) {
                $alertMessage = "Anda belum mengikuti diskusi apa pun. Harap ikuti diskusi untuk melanjutkan.";
                $alertTitle = "Tidak Ada Diskusi";
            } elseif ($alertTugasKelompok) {
                $alertMessage = "Anda belum mengumpulkan tugas kelompok. Harap mengumpulkan tugas kelompok terlebih dahulu untuk melanjutkan.";
                $alertTitle = "Tidak Ada Tugas Kelompok";
            } elseif ($alertTugasIndividu) {
                $alertMessage = "Anda belum mengumpulkan tugas individu. Harap mengumpulkan tugas individu terlebih dahulu untuk melanjutkan.";
                $alertTitle = "Tidak Ada Tugas Individu";
            } elseif ($isSelesai) {
                $alertMessage = "Anda telah menyelesaikan kuis post test ini.";
                $alertTitle = "Kuis Selesai";
                $alertType = 'success';
            } elseif ($alertKuis) {
                $alertMessage = "Kuis post test belum tersedia untuk materi ini.";
                $alertTitle = "Kuis Belum Tersedia";
                $alertType = 'warning';
            }
        @endphp

        @if($alertMessage)
            <div class="alert alert-dismissible bg-light-{{ $alertType }} border border-{{ $alertType }} border-dashed d-flex flex-column flex-sm-row w-100 p-5 mb-10">
                <i class="ki-duotone ki-message-text-2 fs-2hx text-{{ $alertType }} me-4 mb-5 mb-sm-0">
                    <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                </i>
                <div class="d-flex flex-column pe-0 pe-sm-10">
                    <h5 class="mb-1">{{ $alertTitle }}</h5>
                    <span>{{ $alertMessage }}</span>
                </div>
                <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto">
                    <i class="ki-duotone ki-cross fs-1 text-{{ $alertType }}">
                        <span class="path1"></span><span class="path2"></span>
                    </i>
                </button>
            </div>
        @else
        <form action="{{ route('mahasiswa.kelas_saya.simpan_kuis_posttest', [$materi->topikPembahasanKelas->kelas->id, $materi->id]) }}" method="POST">
            @csrf
            @method('POST')
            <div class="tab-content">
                <div id="kt_activity_today" class="card-body p-0 tab-pane fade show active" role="tabpanel" aria-labelledby="kt_activity_today_tab">
                    <div class="timeline timeline-border-dashed">
                        @foreach ($soalKuis as $index => $soal)
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
                                                {!! $soal->bankSoalPembahasan->pertanyaan !!}
                                            </div>
                                        </div>
                                        <div class="overflow-auto mt-3">
                                            <div class="d-flex flex-column align-items-start">
                                                @foreach ($soal->bankSoalPembahasan->jawabans as $jawaban)
                                                    <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex flex-stack text-start p-1 mb-2 w-100">
                                                        <div class="d-flex align-items-center me-2">
                                                            <div class="form-check form-check-custom form-check-solid form-check-primary me-2">
                                                                <input type="hidden" name="kuis_{{ $index }}" value="{{ $soal->bankSoalPembahasan->id }}">
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
        @endif
    </div>
</div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const submitButton = document.getElementById('submitKuis');

    submitButton.addEventListener('click', function(e) {
        e.preventDefault();

        Swal.fire({
            title: 'Apakah Anda yakin ingin menyimpan jawaban?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya, simpan',
            cancelButtonText: 'Tidak, batal simpan!',
            customClass: {
                confirmButton: "btn btn-primary",
                cancelButton: 'btn btn-danger'
            }
        }).then((result) => {
            if (result.isConfirmed) {
                submitForm();
            }
        });
    });

    function submitForm() {
        const formData = new FormData(form);
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        formData.append('_token', csrfToken);

        fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': csrfToken,
                'Accept': 'application/json'
            },
            credentials: 'same-origin'
        })
        .then(response => {
            const contentType = response.headers.get("content-type");
            if (contentType && contentType.indexOf("application/json") !== -1) {
                return response.json().then(data => ({ok: response.ok, status: response.status, body: data}));
            } else {
                return response.text().then(text => ({ok: response.ok, status: response.status, body: text}));
            }
        })
        .then(({ok, status, body}) => {
            if (ok) {
                if (typeof body === 'object' && body.success) {
                    Swal.fire({
                        title: 'Berhasil!',
                        text: body.message,
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        window.location.href = body.redirect;
                    });
                } else {
                    throw new Error('Respons tidak valid dari server');
                }
            } else {
                let errorMessage = 'Terjadi kesalahan pada server';
                if (typeof body === 'object' && body.message) {
                    errorMessage = body.message;
                } else if (typeof body === 'string') {
                    // Coba ekstrak pesan error dari HTML
                    const parser = new DOMParser();
                    const htmlDoc = parser.parseFromString(body, 'text/html');
                    const errorElement = htmlDoc.querySelector('.message') || htmlDoc.querySelector('title');
                    if (errorElement) {
                        errorMessage = errorElement.textContent;
                    }
                }
                throw new Error(errorMessage);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            Swal.fire('Error!', error.message, 'error');
        });
    }
});

    </script>
@endpush
