@extends('mahasiswa/kelas_saya.detail_materi_template')

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
                        <div class="d-flex align-items-center">
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
                                    <span class="text-gray-500 fw-bold">{{ auth()->user()->username }}, {{ auth()->user()->email }}</span>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Form-->
                        <form id="kt_forms_widget_1_form" class="ql-quil ql-quil-plain pb-3">
                            <!--begin::Editor-->
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
                                        <button class="ql-strike"></button>
                                        <button class="ql-link"></button>
                                    </span>
                                </div>
                                <div class="me-n3">
                                    <span class="btn btn-icon btn-sm btn-active-color-primary">
                                        <i class="ki-duotone ki-geolocation fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span>
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
    </div>
@endsection
