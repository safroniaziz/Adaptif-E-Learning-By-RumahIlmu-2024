@extends('mahasiswa/kelas_saya.detail_materi_template')

@section('contentMateri')
<div class="container-fluid">
    <div class="card card-flush pt-3 mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Card title-->
            <div class="card-title">
                <h2>Invoices</h2>
            </div>
            <!--end::Card title-->
            <!--begin::Toolbar-->
            <div class="card-toolbar">
                <!--begin::Tab nav-->
                <ul class="nav nav-stretch fs-5 fw-semibold nav-line-tabs nav-line-tabs-2x border-transparent" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a id="kt_referrals_year_tab" class="nav-link text-active-primary active" data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_1">This Year</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a id="kt_referrals_2019_tab" class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_2">2020</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a id="kt_referrals_2018_tab" class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_3">2019</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a id="kt_referrals_2017_tab" class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_4">2018</a>
                    </li>
                </ul>
                <!--end::Tab nav-->
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-2">
            <!--begin::Tab Content-->
            <div id="kt_referred_users_tab_content" class="tab-content">
                <!--begin::Tab panel-->
                <div id="kt_customer_details_invoices_1" class="tab-pane fade show active" role="tabpanel">
                    <!--begin::Table wrapper-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table id="kt_customer_details_invoices_table_1" class="table align-middle table-row-dashed fs-6 fw-bold gs-0 gy-4 p-0 m-0">
                            <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bold">
                                <tr class="text-start text-gray-500">
                                    <th class="min-w-100px">Order ID</th>
                                    <th class="min-w-100px">Amount</th>
                                    <th class="min-w-100px">Status</th>
                                    <th class="min-w-125px">Date</th>
                                    <th class="w-100px">Invoice</th>
                                </tr>
                            </thead>
                            <tbody class="fs-6 fw-semibold text-gray-600">
                                <tr>
                                    <td>
                                        <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                    </td>
                                    <td class="text-success">$38.00</td>
                                    <td>
                                        <span class="badge badge-light-warning">Pending</span>
                                    </td>
                                    <td>Nov 01, 2020</td>
                                    <td class="">
                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                    </td>
                                    <td class="text-danger">$-2.60</td>
                                    <td>
                                        <span class="badge badge-light-danger">Rejected</span>
                                    </td>
                                    <td>Oct 24, 2020</td>
                                    <td class="">
                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                    </td>
                                    <td class="text-success">$76.00</td>
                                    <td>
                                        <span class="badge badge-light-info">In progress</span>
                                    </td>
                                    <td>Oct 08, 2020</td>
                                    <td class="">
                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                    </td>
                                    <td class="text-success">$5.00</td>
                                    <td>
                                        <span class="badge badge-light-info">In progress</span>
                                    </td>
                                    <td>Sep 15, 2020</td>
                                    <td class="">
                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#" class="text-gray-600 text-hover-primary">523445943</a>
                                    </td>
                                    <td class="text-danger">$-1.30</td>
                                    <td>
                                        <span class="badge badge-light-danger">Rejected</span>
                                    </td>
                                    <td>May 30, 2020</td>
                                    <td class="">
                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table wrapper-->
                </div>
                <!--end::Tab panel-->
                <!--begin::Tab panel-->
                <div id="kt_customer_details_invoices_2" class="tab-pane fade" role="tabpanel">
                    <!--begin::Table wrapper-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table id="kt_customer_details_invoices_table_2" class="table align-middle table-row-dashed fs-6 fw-bold gs-0 gy-4 p-0 m-0">
                            <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bold">
                                <tr class="text-start text-gray-500">
                                    <th class="min-w-100px">Order ID</th>
                                    <th class="min-w-100px">Amount</th>
                                    <th class="min-w-100px">Status</th>
                                    <th class="min-w-125px">Date</th>
                                    <th class="w-100px">Invoice</th>
                                </tr>
                            </thead>
                            <tbody class="fs-6 fw-semibold text-gray-600">
                                <tr>
                                    <td>
                                        <a href="#" class="text-gray-600 text-hover-primary">523445943</a>
                                    </td>
                                    <td class="text-danger">$-1.30</td>
                                    <td>
                                        <span class="badge badge-light-danger">Rejected</span>
                                    </td>
                                    <td>May 30, 2020</td>
                                    <td class="">
                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#" class="text-gray-600 text-hover-primary">231445943</a>
                                    </td>
                                    <td class="text-success">$204.00</td>
                                    <td>
                                        <span class="badge badge-light-danger">Rejected</span>
                                    </td>
                                    <td>Apr 22, 2020</td>
                                    <td class="">
                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                    </td>
                                    <td class="text-success">$31.00</td>
                                    <td>
                                        <span class="badge badge-light-info">In progress</span>
                                    </td>
                                    <td>Feb 09, 2020</td>
                                    <td class="">
                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                    </td>
                                    <td class="text-success">$52.00</td>
                                    <td>
                                        <span class="badge badge-light-danger">Rejected</span>
                                    </td>
                                    <td>Nov 01, 2020</td>
                                    <td class="">
                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                    </td>
                                    <td class="text-danger">$-0.80</td>
                                    <td>
                                        <span class="badge badge-light-warning">Pending</span>
                                    </td>
                                    <td>Jan 04, 2020</td>
                                    <td class="">
                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table wrapper-->
                </div>
                <!--end::Tab panel-->
                <!--begin::Tab panel-->
                <div id="kt_customer_details_invoices_3" class="tab-pane fade" role="tabpanel">
                    <!--begin::Table wrapper-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table id="kt_customer_details_invoices_table_3" class="table align-middle table-row-dashed fs-6 fw-bold gs-0 gy-4 p-0 m-0">
                            <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bold">
                                <tr class="text-start text-gray-500">
                                    <th class="min-w-100px">Order ID</th>
                                    <th class="min-w-100px">Amount</th>
                                    <th class="min-w-100px">Status</th>
                                    <th class="min-w-125px">Date</th>
                                    <th class="w-100px">Invoice</th>
                                </tr>
                            </thead>
                            <tbody class="fs-6 fw-semibold text-gray-600">
                                <tr>
                                    <td>
                                        <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                    </td>
                                    <td class="text-success">$31.00</td>
                                    <td>
                                        <span class="badge badge-light-warning">Pending</span>
                                    </td>
                                    <td>Feb 09, 2020</td>
                                    <td class="">
                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                    </td>
                                    <td class="text-success">$52.00</td>
                                    <td>
                                        <span class="badge badge-light-success">Approved</span>
                                    </td>
                                    <td>Nov 01, 2020</td>
                                    <td class="">
                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                    </td>
                                    <td class="text-danger">$-0.80</td>
                                    <td>
                                        <span class="badge badge-light-success">Approved</span>
                                    </td>
                                    <td>Jan 04, 2020</td>
                                    <td class="">
                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                    </td>
                                    <td class="text-success">$5.00</td>
                                    <td>
                                        <span class="badge badge-light-success">Approved</span>
                                    </td>
                                    <td>Sep 15, 2020</td>
                                    <td class="">
                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                    </td>
                                    <td class="text-success">$38.00</td>
                                    <td>
                                        <span class="badge badge-light-danger">Rejected</span>
                                    </td>
                                    <td>Nov 01, 2020</td>
                                    <td class="">
                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table wrapper-->
                </div>
                <!--end::Tab panel-->
                <!--begin::Tab panel-->
                <div id="kt_customer_details_invoices_4" class="tab-pane fade" role="tabpanel">
                    <!--begin::Table wrapper-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table id="kt_customer_details_invoices_table_4" class="table align-middle table-row-dashed fs-6 fw-bold gs-0 gy-4 p-0 m-0">
                            <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bold">
                                <tr class="text-start text-gray-500">
                                    <th class="min-w-100px">Order ID</th>
                                    <th class="min-w-100px">Amount</th>
                                    <th class="min-w-100px">Status</th>
                                    <th class="min-w-125px">Date</th>
                                    <th class="w-100px">Invoice</th>
                                </tr>
                            </thead>
                            <tbody class="fs-6 fw-semibold text-gray-600">
                                <tr>
                                    <td>
                                        <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                    </td>
                                    <td class="text-success">$38.00</td>
                                    <td>
                                        <span class="badge badge-light-danger">Rejected</span>
                                    </td>
                                    <td>Nov 01, 2020</td>
                                    <td class="">
                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                    </td>
                                    <td class="text-danger">$-2.60</td>
                                    <td>
                                        <span class="badge badge-light-danger">Rejected</span>
                                    </td>
                                    <td>Oct 24, 2020</td>
                                    <td class="">
                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                    </td>
                                    <td class="text-success">$38.00</td>
                                    <td>
                                        <span class="badge badge-light-danger">Rejected</span>
                                    </td>
                                    <td>Nov 01, 2020</td>
                                    <td class="">
                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                    </td>
                                    <td class="text-danger">$-2.60</td>
                                    <td>
                                        <span class="badge badge-light-danger">Rejected</span>
                                    </td>
                                    <td>Oct 24, 2020</td>
                                    <td class="">
                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                    </td>
                                    <td class="text-success">$31.00</td>
                                    <td>
                                        <span class="badge badge-light-success">Approved</span>
                                    </td>
                                    <td>Feb 09, 2020</td>
                                    <td class="">
                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table wrapper-->
                </div>
                <!--end::Tab panel-->
            </div>
            <!--end::Tab Content-->
        </div>
        <!--end::Card body-->
    </div>
</div>
@endsection
