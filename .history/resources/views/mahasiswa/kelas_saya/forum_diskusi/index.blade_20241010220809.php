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
                                    <span class="text-gray-500 fw-bold">{{ auth()->user()->username }} - {{ auth()->user()->email }}</span>
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

        <div class="mb-10" id="kt_social_feeds_posts">
            @foreach ($diskusis as $diskusi)
                <div class="card card-flush mb-10">
                    <!--begin::Card header-->
                    <div class="card-header pt-9">
                        <!--begin::Author-->
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-50px me-5">
                                <img src="{{ $diskusi->mahasiswa->foto ? asset('storage/' . $diskusi->mahasiswa->foto) : asset('storage/fotos/profil.jpg') }}" alt="{{ $diskusi->mahasiswa->nama_lengkap }}" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Info-->
                            <div class="flex-grow-1">
                                <!--begin::Name-->
                                <a href="#" class="text-gray-800 text-hover-primary fs-4 fw-bold">{{ $diskusi->mahasiswa->nama_lengkap }}</a>
                                <!--end::Name-->
                                <!--begin::Date-->
                                <span class="text-gray-500 fw-semibold d-block">
                                    {{ $diskusi->mahasiswa->username }} - {{ $diskusi->mahasiswa->email }}
                                </span>
                                <!--end::Date-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Author-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Menu wrapper-->
                            <div class="m-0">
                                <!--begin::Menu toggle-->
                                <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary me-n4" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                    <i class="ki-duotone ki-dots-square fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--end::Menu toggle-->
                            </div>
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body">
                        <!--begin::Post content-->
                        <div class="fs-6 fw-normal text-gray-700">You can either decide on your final headline before outstanding you write the most of the rest of your creative post</div>
                        <!--end::Post content-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Card footer-->
                    <div class="card-footer pt-0">
                        <!--begin::Info-->
                        <div class="mb-6">
                            <!--begin::Separator-->
                            <div class="separator separator-solid"></div>
                            <!--end::Separator-->
                            <!--begin::Nav-->
                            <ul class="nav py-3">
                                <!--begin::Item-->
                                <li class="nav-item">
                                    <a class="nav-link btn btn-sm btn-color-gray-600 btn-active-color-primary btn-active-light-primary fw-bold px-4 me-1 collapsible" data-bs-toggle="collapse" href="#kt_social_feeds_comments_2">
                                    <i class="ki-duotone ki-message-text-2 fs-2 me-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>{{ $diskusi->diskusi_respons_count }} Komentar</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item">
                                    <a href="#" class="nav-link btn btn-sm btn-color-gray-600 btn-active-color-primary fw-bold px-4 me-1">
                                    <i class="ki-duotone ki-heart fs-2 me-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>{{ Carbon\Carbon::parse($diskusi->created_at)->translatedFormat('l, d F Y H:i:s') }}</a>
                                </li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Nav-->
                            <!--begin::Separator-->
                            <div class="separator separator-solid mb-1"></div>
                            <!--end::Separator-->
                            <!--begin::Comments-->
                            <div class="collapse" id="kt_social_feeds_comments_2">
                                <!--begin::Comment-->
                                <div class="d-flex pt-6">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-45px me-5">
                                        <img src="assets/media/avatars/300-13.jpg" alt="" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column flex-row-fluid">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center flex-wrap mb-0">
                                            <!--begin::Name-->
                                            <a href="#" class="text-gray-800 text-hover-primary fw-bold me-6">Mr. Anderson</a>
                                            <!--end::Name-->
                                            <!--begin::Date-->
                                            <span class="text-gray-500 fw-semibold fs-7 me-5">1 Day ago</span>
                                            <!--end::Date-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Text-->
                                        <span class="text-gray-800 fs-7 fw-normal pt-1">Long before you sit dow to put digital pen to paper you need to make sure you have to sit down and write.</span>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Comment-->
                            </div>
                            <!--end::Collapse-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Comment form-->
                        <div class="d-flex align-items-center">
                            <!--begin::Author-->
                            <div class="symbol symbol-35px me-3">
                                <img src="assets/media/avatars/300-3.jpg" alt="" />
                            </div>
                            <!--end::Author-->
                            <!--begin::Input group-->
                            <div class="position-relative w-100">
                                <!--begin::Input-->
                                <textarea type="text" class="form-control form-control-solid border ps-5" rows="1" name="search" value="" data-kt-autosize="true" placeholder="Write your comment.."></textarea>
                                <!--end::Input-->
                                <!--begin::Actions-->
                                <div class="position-absolute top-0 end-0 translate-middle-x mt-1 me-n14">
                                    <!--begin::Btn-->
                                    <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                        <i class="ki-duotone ki-paper-clip fs-2"></i>
                                    </button>
                                    <!--end::Btn-->
                                    <!--begin::Btn-->
                                    <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                        <i class="ki-duotone ki-like fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </button>
                                    <!--end::Btn-->
                                    <!--begin::Btn-->
                                    <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                        <i class="ki-duotone ki-badge fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                        </i>
                                    </button>
                                    <!--end::Btn-->
                                    <!--begin::Btn-->
                                    <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                        <i class="ki-duotone ki-geolocation fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </button>
                                    <!--end::Btn-->
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Comment form-->
                    </div>
                    <!--end::Card footer-->
                </div>
            @endforeach
        </div>
    </div>
@endsection
