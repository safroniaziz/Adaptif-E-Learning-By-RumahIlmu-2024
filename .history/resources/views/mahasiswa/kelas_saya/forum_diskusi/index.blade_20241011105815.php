@extends('mahasiswa/kelas_saya.detail_materi_template')
@push('styles')
    <style>
       .custom-btn-submit {
            background-color: #007bff !important;
            color: white !important;
            align-items: center !important;
        }

        .custom-btn-submit i {
            margin-right: 8px !important;
        }

    </style>
@endpush
@section('contentMateri')
    <div class="container-fluid">
        <div class="row g-5 g-xxl-8">
            <!--begin::Col-->
            <div class="col-xl-12">
                <!--begin::Feeds Widget 1-->
                <div class="card mb-5 mb-xxl-8">
                    <!--begin::Body-->
                    <div class="card-body pb-0">
                        <!--begin::Header-->
                        <div class="d-flex align-items-center mb-4">
                            <!--begin::User-->
                            <div class="d-flex align-items-center flex-grow-1">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-45px me-5">
                                    <img src="{{ asset('storage/' . (Auth::user()->foto ?? 'fotos/profil.jpg')) }}" alt="User Photo" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Info-->
                                <div class="d-flex flex-column">
                                    <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">{{ auth()->user()->nama_lengkap }}</a>
                                    <span class="text-gray-500 fw-bold">{{ auth()->user()->username }} - {{ auth()->user()->email }}</span>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Form-->
                        <form id="kt_forms_widget_1_form" action="{{ route('mahasiswa.kelas_saya.diskusi.post',[$kelas->id,$materi->id]) }}" method="POST" class="ql-quil ql-quil-plain pb-3">
                            @csrf @method('POST')
                            <!--begin::Title Input-->
                            <input type="text" name="judul" class="title-input" placeholder="Masukkan judul diskusi" style="width: 100% !important; padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important;
            font-size: 13px !important;
            border: none;
            border-bottom: 1px solid #4B5675;
                font-family: Helvetica, Arial, sans-serif !important;
            color:#4B5675 !important;
            outline: none !important; ">
                            <!--end::Title Input-->
                            <!--begin::Editor-->
                            <input type="hidden" name="diskusi" id="quill_content">
                            <div id="kt_forms_widget_1_editor" class="py-6"></div>
                            <!--end::Editor-->
                            <div class="separator"></div>
                            <!--begin::Toolbar-->
                            <div id="kt_forms_widget_1_editor_toolbar" class="ql-toolbar d-flex flex-stack py-2">
                                <div class="me-2">
                                    <span class="ql-formats ql-size ms-0">
                                        <select class="ql-size w-75px"></select>
                                    </span>
                                    <span class="ql-formats">
                                        <button class="ql-bold"></button>
                                        <button class="ql-italic"></button>
                                        <button class="ql-underline"></button>
                                    </span>
                                </div>
                                <div class="me-n3">
                                    <!-- Submit Button with clear layout -->
                                    <button type="submit" class="btn btn-sm" style="width:100px !important; height:35px !important; background-color: #007bff !important; color: white !important; display: flex !important; align-items: center !important;">
                                        <i class="ki-duotone ki-check fs-2 me-2"></i> Kirim
                                    </button>
                                </div>
                            </div>
                            <!--end::Toolbar-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Body-->
                </div>
            </div>
            <!--end::Col-->
        </div>

        <!-- Rest of the code remains the same -->

    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var form = document.getElementById('kt_forms_widget_1_form');
        var quill = new Quill('#kt_forms_widget_1_editor', {
            modules: {
                toolbar: '#kt_forms_widget_1_editor_toolbar'
            },
            placeholder: 'Apa yang anda fikirkan ?',
            theme: 'snow'
        });

        form.onsubmit = function() {
            // Populate hidden form field with editor contents
            var content = document.querySelector('#quill_content');
            content.value = quill.root.innerHTML;

            // Log the content (you can remove this in production)
            console.log("Submitting the following content: ", content.value);

            // Allow the form to submit
            return true;
        };
    });
    </script>
@endpush
