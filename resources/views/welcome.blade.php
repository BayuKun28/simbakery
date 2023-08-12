@extends('partials.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center gap-4 mb-4">
                    <div class="position-relative">
                        <div class="border border-2 border-primary rounded-circle">
                            <img src="{{ asset('modern/') }}/dist/images/profile/user-1.jpg" class="rounded-circle m-1"
                                alt="user1" width="60" />
                        </div>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary"> 3
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </div>
                    <div>
                        <h3 class="fw-semibold">Hi, <span class="text-dark">Admin</span>
                        </h3>
                        <span>Cheers, and happy activities - July 6 2023</span>
                    </div>
                </div>
                <div class="card">
                    <div class="border-top">
                        <div class="row gx-0">
                            <div class="col-md-4 border-end">
                                <div class="p-4 py-3 py-md-4">
                                    <p class="fs-4 text-danger mb-0">
                                        <span class="text-danger">
                                            <span class="round-8 bg-danger rounded-circle d-inline-block me-1"></span>
                                        </span>Selling Product
                                    </p>
                                    <h3 class=" mt-2 mb-0">$3,350,00</h3>
                                </div>
                            </div>
                            <div class="col-md-4 border-end">
                                <div class="p-4 py-3 py-md-4">
                                    <p class="fs-4 text-primary mb-0">
                                        <span class="text-primary">
                                            <span class="round-8 bg-primary rounded-circle d-inline-block me-1"></span>
                                        </span>Followers
                                    </p>
                                    <h3 class=" mt-2 mb-0">1,500+</h3>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-4 py-3 py-md-4">
                                    <p class="fs-4 text-info mb-0">
                                        <span class="text-info">
                                            <span class="round-8 bg-info rounded-circle d-inline-block me-1"></span>
                                        </span>Campaign
                                    </p>
                                    <h3 class=" mt-2 mb-0">560</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold">Upcoming Activity</h5>
                        <p class="card-subtitle">Preparation for the Upcoming Activity</p>
                        <div class="mt-9 py-6 d-flex align-items-center">
                            <div
                                class="flex-shrink-0 bg-light-primary rounded-circle round d-flex align-items-center justify-content-center">
                                <i class="ti ti-map-pin text-primary fs-6"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0 fw-semibold">Trip to Singapore</h6>
                                <span class="fs-3">working on</span>
                            </div>
                            <div class="ms-auto">
                                <span class="fs-2">12:00 AM</span>
                            </div>
                        </div>
                        <div class="py-6 d-flex align-items-center">
                            <div
                                class="flex-shrink-0 bg-light-danger rounded-circle round d-flex align-items-center justify-content-center">
                                <i class="ti ti-bookmark fs-6 text-danger"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0 fw-semibold">Archived Data</h6>
                                <span class="fs-3">working on</span>
                            </div>
                            <div class="ms-auto">
                                <span class="fs-2">3:52 PM</span>
                            </div>
                        </div>
                        <div class="py-6 d-flex align-items-center">
                            <div
                                class="flex-shrink-0 bg-light-success rounded-circle round d-flex align-items-center justify-content-center">
                                <i class="ti ti-microphone fs-6 text-success"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0 fw-semibold">Meeting with Client</h6>
                                <span class="fs-3">working on</span>
                            </div>
                            <div class="ms-auto">
                                <span class="fs-2">4:50 PM</span>
                            </div>
                        </div>
                        <div class="py-6 d-flex align-items-center">
                            <div
                                class="flex-shrink-0 bg-light-warning rounded-circle round d-flex align-items-center justify-content-center">
                                <i class="ti ti-cast text-warning fs-6"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0 fw-semibold ">Screening Task Team</h6>
                                <span class="fs-3">working on</span>
                            </div>
                            <div class="ms-auto">
                                <span class="fs-2">5:10 PM</span>
                            </div>
                        </div>
                        <div class="pt-6 d-flex align-items-center">
                            <div
                                class="flex-shrink-0 bg-light-info rounded-circle round d-flex align-items-center justify-content-center">
                                <i class="ti ti-mail text-info fs-6"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0 fw-semibold">Send envelope to John</h6>
                                <span class="fs-3">working on</span>
                            </div>
                            <div class="ms-auto">
                                <span class="fs-2">6:00 PM</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-flex align-items-stretch">
                <div class="card w-100 bg-light-primary overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="card-title fw-semibold">Sales Hourly</h5>
                                <div class="d-flex gap-2">
                                    <span>
                                        <span class="round-8 bg-primary rounded-circle d-inline-block"></span>
                                    </span>
                                    <span>Your data updates every 3 hours</span>
                                </div>
                            </div>
                            <div class="ms-auto d-flex align-items-stretch gap-2">
                                <a href="javascript:void(0)" class="btn btn-primary">
                                    <i class="ti ti-download fs-6"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="activity-status"></div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex align-items-center mb-9">
                            <div>
                                <h5 class="card-title fw-semibold">Order Status</h5>
                                <p class="card-subtitle">How to Check Your Order Status Online</p>
                            </div>
                            <div class="ms-auto mt-4 mt-md-0">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                                            <span>Checkout</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                                            <span>Paid</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#messages" role="tab">
                                            <span>Packed</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Tab panes -->
                        <div class="tab-content mt-3">
                            <div class="tab-pane active" id="home" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table align-middle mb-0 text-nowrap">
                                        <tbody>
                                            <tr>
                                                <td class="ps-0">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="flex-shrink-0">
                                                            <img src="{{ asset('modern/') }}/dist/images/products/product-1.jpg"
                                                                class="rounded" alt="p1" width="80" />
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0 fw-semibold">Irpun Wicaksono</h6>
                                                            <span class="fs-2">irpun@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="ps-0">
                                                    <span>React Js - Online Classes</span>
                                                </td>
                                                <td class="ps-0">
                                                    <h6 class="mb-0">$50.00</h6>
                                                </td>
                                                <td class="text-end ps-0">
                                                    <span class="badge bg-light-warning text-warning rounded-pill">
                                                        <span
                                                            class="round-8 bg-warning rounded-circle d-inline-block me-1"></span>progress
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ps-0">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="flex-shrink-0">
                                                            <img src="{{ asset('modern/') }}/dist/images/products/product-2.jpg"
                                                                class="rounded" alt="p2" width="80" />
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0 fw-semibold">Oyhan Ruhiyan</h6>
                                                            <span class="fs-2">oyhan@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="ps-0">
                                                    <span>Frontend Dev - Online Classes</span>
                                                </td>
                                                <td class="ps-0">
                                                    <h6 class="mb-0">$49.00</h6>
                                                </td>
                                                <td class="text-end ps-0">
                                                    <span class="badge bg-light-success text-success rounded-pill">
                                                        <span
                                                            class="round-8 bg-success rounded-circle d-inline-block me-1"></span>delivered
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ps-0">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="flex-shrink-0">
                                                            <img src="{{ asset('modern/') }}/dist/images/products/product-3.jpg"
                                                                class="rounded" alt="p3" width="80" />
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0 fw-semibold">Dayat Santoso</h6>
                                                            <span class="fs-2">dayat@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="ps-0">
                                                    <span>UX Research - Power Courses</span>
                                                </td>
                                                <td class="ps-0">
                                                    <h6 class="mb-0">$79.00</h6>
                                                </td>
                                                <td class="text-end ps-0">
                                                    <span class="badge bg-light-danger text-danger rounded-pill">
                                                        <span
                                                            class="round-8 bg-danger rounded-circle d-inline-block me-1"></span>cancel
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ps-0">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="flex-shrink-0">
                                                            <img src="{{ asset('modern/') }}/dist/images/products/product-4.jpg"
                                                                class="rounded" alt="p4" width="80" />
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0 fw-semibold">Irpun Wicaksono</h6>
                                                            <span class="fs-2">irpun@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="ps-0">
                                                    <span>React Js - Online Classes</span>
                                                </td>
                                                <td class="ps-0">
                                                    <h6 class="mb-0">$50.00</h6>
                                                </td>
                                                <td class="text-end ps-0">
                                                    <span class="badge bg-light-success text-success rounded-pill">
                                                        <span
                                                            class="round-8 bg-success rounded-circle d-inline-block me-1"></span>delivered
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="profile" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-hover align-middle mb-0 text-nowrap">
                                        <tbody>
                                            <tr>
                                                <td class="ps-0">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="flex-shrink-0">
                                                            <img src="{{ asset('modern/') }}/dist/images/products/product-2.jpg"
                                                                class="rounded" alt="p2" width="80" />
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0 fw-semibold">Oyhan Ruhiyan</h6>
                                                            <span class="fs-2">oyhan@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="ps-0">
                                                    <span>Frontend Dev - Online Classes</span>
                                                </td>
                                                <td class="ps-0">
                                                    <h6 class="mb-0">$49.00</h6>
                                                </td>
                                                <td class="text-end ps-0">
                                                    <span class="badge bg-light-success text-success rounded-pill">
                                                        <span
                                                            class="round-8 bg-success rounded-circle d-inline-block me-1"></span>delivered
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ps-0">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="flex-shrink-0">
                                                            <img src="{{ asset('modern/') }}/dist/images/products/product-1.jpg"
                                                                class="rounded" alt="p1" width="80" />
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0 fw-semibold">Irpun Wicaksono</h6>
                                                            <span class="fs-2">irpun@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="ps-0">
                                                    <span>React Js - Online Classes</span>
                                                </td>
                                                <td class="ps-0">
                                                    <h6 class="mb-0">$50.00</h6>
                                                </td>
                                                <td class="text-end ps-0">
                                                    <span class="badge bg-light-warning text-warning rounded-pill">
                                                        <span
                                                            class="round-8 bg-warning rounded-circle d-inline-block me-1"></span>progress
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ps-0">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="flex-shrink-0">
                                                            <img src="{{ asset('modern/') }}/dist/images/products/product-3.jpg"
                                                                class="rounded" alt="p3" width="80" />
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0 fw-semibold">Dayat Santoso</h6>
                                                            <span class="fs-2">dayat@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="ps-0">
                                                    <span>UX Research - Power Courses</span>
                                                </td>
                                                <td class="ps-0">
                                                    <h6 class="mb-0">$79.00</h6>
                                                </td>
                                                <td class="text-end ps-0">
                                                    <span class="badge bg-light-danger text-danger rounded-pill">
                                                        <span
                                                            class="round-8 bg-danger rounded-circle d-inline-block me-1"></span>cancel
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ps-0">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="flex-shrink-0">
                                                            <img src="{{ asset('modern/') }}/dist/images/products/product-4.jpg"
                                                                class="rounded" alt="p4" width="80" />
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0 fw-semibold">Irpun Wicaksono</h6>
                                                            <span class="fs-2">irpun@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="ps-0">
                                                    <span>React Js - Online Classes</span>
                                                </td>
                                                <td class="ps-0">
                                                    <h6 class="mb-0">$50.00</h6>
                                                </td>
                                                <td class="text-end ps-0">
                                                    <span class="badge bg-light-success text-success rounded-pill">
                                                        <span
                                                            class="round-8 bg-success rounded-circle d-inline-block me-1"></span>delivered
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="messages" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-hover align-middle mb-0 text-nowrap">
                                        <tbody>
                                            <tr>
                                                <td class="ps-0">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="flex-shrink-0">
                                                            <img src="{{ asset('modern/') }}/dist/images/products/product-4.jpg"
                                                                class="rounded" alt="p4" width="80" />
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0 fw-semibold">Irpun Wicaksono</h6>
                                                            <span class="fs-2">irpun@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="ps-0">
                                                    <span>React Js - Online Classes</span>
                                                </td>
                                                <td class="ps-0">
                                                    <h6 class="mb-0">$50.00</h6>
                                                </td>
                                                <td class="text-end ps-0">
                                                    <a href="javascript:void(0)"
                                                        class="badge bg-light-success text-success rounded-pill">
                                                        <span
                                                            class="round-8 bg-success rounded-circle d-inline-block me-1"></span>delivered
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ps-0">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="flex-shrink-0">
                                                            <img src="{{ asset('modern/') }}/dist/images/products/product-1.jpg"
                                                                class="rounded" alt="p1" width="80" />
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0 fw-semibold">Irpun Wicaksono</h6>
                                                            <span class="fs-2">irpun@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="ps-0">
                                                    <span>React Js - Online Classes</span>
                                                </td>
                                                <td class="ps-0">
                                                    <h6 class="mb-0">$50.00</h6>
                                                </td>
                                                <td class="text-end ps-0">
                                                    <span class="badge bg-light-warning text-warning rounded-pill">
                                                        <span
                                                            class="round-8 bg-warning rounded-circle d-inline-block me-1"></span>progress
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ps-0">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="flex-shrink-0">
                                                            <img src="{{ asset('modern/') }}/dist/images/products/product-2.jpg"
                                                                class="rounded" alt="p2" width="80" />
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0 fw-semibold">Oyhan Ruhiyan</h6>
                                                            <span class="fs-2">oyhan@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="ps-0">
                                                    <span>Frontend Dev - Online Classes</span>
                                                </td>
                                                <td class="ps-0">
                                                    <h6 class="mb-0">$49.00</h6>
                                                </td>
                                                <td class="text-end ps-0">
                                                    <span class="badge bg-light-success text-success rounded-pill">
                                                        <span
                                                            class="round-8 bg-success rounded-circle d-inline-block me-1"></span>delivered
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ps-0">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="flex-shrink-0">
                                                            <img src="{{ asset('modern/') }}/dist/images/products/product-3.jpg"
                                                                class="rounded" alt="p3" width="80" />
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0 fw-semibold">Dayat Santoso</h6>
                                                            <span class="fs-2">dayat@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="ps-0">
                                                    <span>UX Research - Power Courses</span>
                                                </td>
                                                <td class="ps-0">
                                                    <h6 class="mb-0">$79.00</h6>
                                                </td>
                                                <td class="text-end ps-0">
                                                    <span class="badge bg-light-danger text-danger rounded-pill">
                                                        <span
                                                            class="round-8 bg-danger rounded-circle d-inline-block me-1"></span>cancel
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold">Tasks</h5>
                        <p class="card-subtitle">The Power of Prioritizing Your Tasks</p>
                        <div class="mt-4 pb-3 border-bottom">
                            <div class="d-flex align-items-center">
                                <span class="bg-light-primary text-primary badge">Inprogress</span>
                                <span class="fs-3 ms-auto">8 March 2020</span>
                            </div>
                            <h6 class="mt-3">NFT Landing Page</h6>
                            <span class="fs-3 lh-sm">Designing an NFT-themed website with a creative concept so
                                th...</span>
                            <div class="hstack gap-3 mt-3">
                                <a href="#" class="fs-3 text-bodycolor d-flex align-items-center">
                                    <i class="ti ti-clipboard fs-6 text-primary me-2 d-flex"></i> 2 Tasks </a>
                                <a href="#" class="fs-3 text-bodycolor d-flex align-items-center">
                                    <i class="ti ti-message-dots fs-6 text-primary me-2 d-flex"></i> 13 Commets </a>
                            </div>
                        </div>
                        <div class="py-3 border-bottom">
                            <div class="d-flex align-items-center">
                                <span class="bg-light-danger text-danger badge">Inpending</span>
                                <span class="fs-3 ms-auto">8 Jan 2023</span>
                            </div>
                            <h6 class="mt-3">Dashboard Finanace Management</h6>
                            <span class="fs-3 lh-sm">Designing an NFT-themed website with a creative concept so
                                th...</span>
                            <div class="hstack gap-3 mt-3">
                                <a href="#" class="fs-3 text-bodycolor d-flex align-items-center">
                                    <i class="ti ti-clipboard fs-6 text-primary me-2 d-flex"></i> 4 Tasks </a>
                                <a href="#" class="fs-3 text-bodycolor d-flex align-items-center">
                                    <i class="ti ti-message-dots fs-6 text-primary me-2 d-flex"></i> 50 Commets </a>
                            </div>
                        </div>
                        <div class="pt-3">
                            <div class="d-flex align-items-center">
                                <span class="bg-light-success text-success badge">Completed</span>
                                <span class="fs-3 ms-auto">8 Feb 2023</span>
                            </div>
                            <h6 class="mt-3">Logo Branding</h6>
                            <span class="fs-3 lh-sm">Designing an NFT-themed website with a creative concept so
                                th...</span>
                            <div class="hstack gap-3 mt-3">
                                <a href="#" class="fs-3 text-bodycolor d-flex align-items-center">
                                    <i class="ti ti-clipboard fs-6 text-primary me-2 d-flex"></i> 1 Task </a>
                                <a href="#" class="fs-3 text-bodycolor d-flex align-items-center">
                                    <i class="ti ti-message-dots fs-6 text-primary me-2 d-flex"></i> 12 Commets </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body border-bottom">
                        <div class="d-md-flex align-items-center">
                            <div>
                                <h5 class="card-title fw-semibold">Team Performance</h5>
                                <p class="card-subtitle">How to Measure Team Performance</p>
                            </div>
                            <div class="ms-auto mt-4 mt-md-0">
                                <div class="hstack">
                                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="John Deo">
                                        <img src="{{ asset('modern/') }}/dist/images/profile/user-1.jpg"
                                            class="rounded-circle border border-2 border-white" width="35"
                                            alt="u1" />
                                    </a>
                                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Mark Smith" class="ms-n2">
                                        <img src="{{ asset('modern/') }}/dist/images/profile/user-2.jpg"
                                            class="rounded-circle border border-2 border-white" width="35"
                                            alt="u2" />
                                    </a>
                                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Jonthan Leo" class="ms-n2">
                                        <img src="{{ asset('modern/') }}/dist/images/profile/user-3.jpg"
                                            class="rounded-circle border border-2 border-white" width="35"
                                            alt="u3" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="hstack p-3 border rounded mb-3 mb-md-0">
                                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="John Deo">
                                        <img src="{{ asset('modern/') }}/dist/images/profile/user-1.jpg"
                                            class="rounded-circle border border-2 border-white" width="30"
                                            alt="u4" />
                                    </a>
                                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Mark Smith" class="ms-n2">
                                        <img src="{{ asset('modern/') }}/dist/images/profile/user-2.jpg"
                                            class="rounded-circle border border-2 border-white" width="30"
                                            alt="u2" />
                                    </a>
                                    <div class="ms-3">
                                        <h6 class="mb-0 fs-3">Monster Dashboard</h6>
                                        <span class="fs-2">46%</span>
                                        <span class="fs-2 ms-4">Due in 3 days</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="hstack p-3 border rounded">
                                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="John Deo">
                                        <img src="{{ asset('modern/') }}/dist/images/profile/user-3.jpg"
                                            class="rounded-circle border border-2 border-white" width="30"
                                            alt="u3" />
                                    </a>
                                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Mark Smith" class="ms-n2">
                                        <img src="{{ asset('modern/') }}/dist/images/profile/user-4.jpg"
                                            class="rounded-circle border border-2 border-white" width="30"
                                            alt="u4" />
                                    </a>
                                    <div class="ms-3">
                                        <h6 class="mb-0 fs-3">Xtreme Dashboard</h6>
                                        <span class="fs-2">87%</span>
                                        <span class="fs-2 ms-4">Due in 7 days</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div id="team-performance"></div>
                        </div>
                        <div class="text-center">
                            <span class="d-block">Your team performance is 5% better this week.</span>
                            <a href="javascript:void(0)" class="btn btn-primary mt-4">View Details</a>
                        </div>
                    </div>
                    <div class="p-3">
                        <div class="hstack gap-3 justify-content-center">
                            <div>
                                <span>
                                    <span class="round-8 bg-primary rounded-circle d-inline-block me-2"></span>
                                </span>
                                <span class="fs-3 text-dark">Completed 124</span>
                            </div>
                            <div>
                                <span>
                                    <span class="round-8 bg-danger rounded-circle d-inline-block me-2"></span>
                                </span>
                                <span class="fs-3 text-dark">Percentage 86%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container-fluid over -->
    </div>
@endsection
