@extends('server.layout.master')
@section('contain')


        <main class="app-wrapper">
            <div class="container-fluid">
                <div class="app-page-head d-flex flex-wrap gap-3 align-items-center justify-content-between">
                    <div class="clearfix">
                        <h1 class="app-page-title mb-0">Dashboard</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html" class="text-body">
                                        <i class="fi fi-rr-home"></i>Home
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Dashboard
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#addPropertyModal">
                        <i class="fi fi-rr-plus me-2"></i>Add Property
                    </button>
                </div>

                <div class="row">
                    <div class="col-xxl-6">
                        <div class="card gradient-primary welcome-bx overflow-hidden border-0">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5">
                                        <div class="d-flex align-items-center mb-1">
                                            <img src="{{asset('assets/images/icons/hand.svg')}}" alt=""
                                                class="img-fluid me-2" />
                                            <h3 class="mb-0 text-white">Hello, Robert Brown</h3>
                                        </div>
                                        <p class="mb-4">
                                            Track all property performance, availability, pricing
                                            trends, and occupancy easily
                                        </p>
                                        <div class="rounded-2 p-3 bg-body mb-2">
                                            <div class="d-flex align-items-center">
                                                <div class="clearfix me-auto">
                                                    <h6>Total Properties</h6>
                                                    <h2 class="mb-0 fw-bold d-flex align-items-center">
                                                        1,245
                                                        <span
                                                            class="badge bg-success-subtle text-success rounded-pill ms-1">+8%</span>
                                                    </h2>
                                                </div>
                                                <div class="avatar avatar-md rounded-2 bg-primary-subtle text-primary">
                                                    <i class="fi fi-rr-apartment"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rounded-2 p-3 bg-body">
                                            <div class="d-flex align-items-center">
                                                <div class="clearfix me-auto">
                                                    <h6>Sold Properties</h6>
                                                    <h2 class="mb-0 fw-bold d-flex align-items-center">
                                                        1,324
                                                        <span
                                                            class="badge bg-success-subtle text-success rounded-pill ms-1">+2.3%</span>
                                                    </h2>
                                                </div>
                                                <div
                                                    class="avatar avatar-md rounded-2 bg-secondary-subtle text-secondary">
                                                    <i class="fi fi-rr-building"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-6">
                                        <img src="{{asset('assets/images/house.png')}}" alt="" class="img-fluid house" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-6">
                        <div class="row">
                            <div class="col-xxl-6 col-md-6">
                                <div class="card">
                                    <div
                                        class="card-header border-0 pb-0 d-flex justify-content-between align-items-center">
                                        <h6 class="card-title mb-0">Total Client</h6>
                                        <a href="all-agents.html" class="btn btn-sm btn-outline-primary">See
                                            Details</a>
                                    </div>
                                    <div class="card-body d-flex align-items-end justify-content-between pb-0 pt-1">
                                        <div class="d-flex align-items-center mb-3">
                                            <div
                                                class="avatar avatar-md rounded-2 bg-primary-subtle text-primary me-2">
                                                <i class="fi fi-rr-apartment"></i>
                                            </div>
                                            <h2 class="fw-bold mb-0 me-2">1,175</h2>
                                            <span class="badge badge-sm bg-success-subtle text-success">+8%</span>
                                        </div>
                                        <div id="Card1Chart" class="mx-n2 my-n4"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-6 col-md-6">
                                <div class="card">
                                    <div
                                        class="card-header border-0 pb-0 d-flex justify-content-between align-items-center">
                                        <h6 class="card-title mb-0">Total Leads</h6>
                                        <a href="property-list.html" class="btn btn-sm btn-outline-secondary">See
                                            Details</a>
                                    </div>
                                    <div class="card-body d-flex align-items-end justify-content-between pb-0 pt-1">
                                        <div class="d-flex align-items-center mb-3">
                                            <div
                                                class="avatar avatar-md rounded-2 bg-secondary-subtle text-secondary me-2">
                                                <i class="fa-solid fa-house"></i>
                                            </div>
                                            <h2 class="fw-bold mb-0 me-2">1,024</h2>
                                            <span class="badge badge-sm bg-success-subtle text-success">+5%</span>
                                        </div>
                                        <div id="Card2Chart" class="mx-n2 my-n2"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-6 col-md-6">
                                <div class="card">
                                    <div
                                        class="card-header border-0 pb-0 d-flex justify-content-between align-items-center">
                                        <h6 class="card-title mb-0">Active Agents</h6>
                                        <a href="all-agents.html" class="btn btn-sm btn-outline-primary">See
                                            Details</a>
                                    </div>
                                    <div class="card-body d-flex align-items-end justify-content-between pb-0">
                                        <div class="d-flex align-items-center mb-3">
                                            <div
                                                class="avatar avatar-md rounded-2 bg-success-subtle text-success me-2">
                                                <i class="fi fi-rr-users-alt"></i>
                                            </div>
                                            <h2 class="fw-bold mb-0 me-2">757</h2>
                                            <span class="badge badge-sm bg-danger-subtle text-danger">-5%</span>
                                        </div>
                                        <div id="Card3Chart" class="mx-n2 my-n2"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-6 col-md-6">
                                <div class="card">
                                    <div
                                        class="card-header border-0 pb-0 d-flex justify-content-between align-items-center">
                                        <h6 class="card-title mb-0">New Clients</h6>
                                    </div>
                                    <div class="card-body d-flex align-items-end justify-content-between pb-0">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="avatar avatar-md rounded-2 bg-info-subtle text-info me-2">
                                                <i class="fa-solid fa-handshake"></i>
                                            </div>
                                            <h2 class="fw-bold mb-0 me-2">524</h2>
                                            <span class="badge badge-sm bg-danger-subtle text-danger">-2.1%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-xxl-6">
                        <div class="card">
                            <div class="card-header border-0 pb-0 d-flex align-items-center justify-content-between">
                                <h6 class="card-title mb-0">Property Sales</h6>
                                <div class="dropdown d-flex align-items-center gap-2">
                                    <button class="btn dropdown-toggle btn-white btn-shadow btn-sm" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Today
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);">Today</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);">Last Years</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body pb-0 pt-2">
                                <div class="mb-2 d-flex align-items-center gap-2">
                                    <h2 class="mb-0 fw-bold">$345,783</h2>
                                    <span class="text-success">+12.34%</span>
                                </div>
                                <div id="PropertySalesChart" class="mb-n3"></div>
                            </div>
                        </div>
                    </div> --}}


                    {{-- <div class="col-xxl-6">
                        <div class="card">
                            <div class="card-header border-0 pb-0 d-flex align-items-center justify-content-between">
                                <h6 class="card-title mb-0">Revenue Overview</h6>
                                <div class="dropdown d-flex align-items-center gap-2">
                                    <button class="btn dropdown-toggle btn-white btn-shadow btn-sm" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Today
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);">Today</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);">Last Years</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body pb-0 pt-2">
                                <div class="mb-2 d-flex align-items-center gap-2">
                                    <h2 class="mb-0 fw-bold">$236,423</h2>
                                    <span class="text-danger">-10.34%</span>
                                </div>
                            </div>
                            <div class="px-2">
                                <div id="RevenueChart"></div>
                            </div>
                        </div>
                    </div> --}}

                    <div class="col-xxl-8">
                        <div class="card">
                            <div class="card-header border-0 pb-0">
                                <h6 class="card-title mb-0">Most Sales Location</h6>
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-xxl-8 col-xl-7">
                                        <div id="jsVectorMap_Lines" class="jsvectormap"></div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4">
                                        <ul class="list-group list-group-smooth list-group-space list-group-hover">
                                            <li class="list-group-item rounded px-3 py-2">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="clearfix">
                                                        <h6 class="mb-0">Canada</h6>
                                                        <p class="text-body small mb-0">500 Unit</p>
                                                    </div>
                                                    <div class="clearfix">
                                                        <div id="Score1"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item rounded px-3 py-2">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="clearfix">
                                                        <h6 class="mb-1">Brazil</h6>
                                                        <p class="text-body mb-0">600 Unit</p>
                                                    </div>
                                                    <div class="clearfix">
                                                        <div id="Score2"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item rounded px-3 py-2">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="clearfix">
                                                        <h6 class="mb-1">China</h6>
                                                        <p class="text-body mb-0">700 Unit</p>
                                                    </div>
                                                    <div class="clearfix">
                                                        <div id="Score3"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item rounded px-3 py-2">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="clearfix">
                                                        <h6 class="mb-1">Japan</h6>
                                                        <p class="text-body mb-0">450 Unit</p>
                                                    </div>
                                                    <div class="clearfix">
                                                        <div id="Score4"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item rounded px-3 py-2">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="clearfix">
                                                        <h6 class="mb-1">Germany</h6>
                                                        <p class="text-body mb-0">350 Unit</p>
                                                    </div>
                                                    <div class="clearfix">
                                                        <div id="Score5"></div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-4">
                        <div class="card overflow-hidden">
                            <div class="card-header border-0 d-flex align-items-center justify-content-between">
                                <h6 class="card-title mb-0">Customer Review</h6>
                                <div class="btn-group">
                                    <button
                                        class="btn btn-action-primary btn-sm btn-icon btn-outline-light dropdown-toggle"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fi fi-bs-menu-dots"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body gradient-layer pt-0" style="height: 325px" data-simplebar>
                                <div class="d-flex align-items-center border-bottom pb-3 mb-3">
                                    <div class="me-3">
                                        <img src="{{asset('assets/images/avatar/avatar1.webp')}}" class="avatar avatar-xxl"
                                            alt="" />
                                    </div>
                                    <div class="clearfix w-100">
                                        <h5 class="mb-1 fw-bold">Ethan Brown</h5>
                                        <p class="mb-2">
                                            Highly recommend this service! The team was professional
                                            throughout.
                                        </p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex flex-wrap align-items-center gap-2">
                                                <span class="text-1xs">Rating: (4.6)</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <i class="fi fi-ss-star text-warning"></i>
                                                    <i class="fi fi-ss-star text-warning"></i>
                                                    <i class="fi fi-ss-star text-warning"></i>
                                                    <i class="fi fi-ss-star text-warning"></i>
                                                    <i class="fi fi-ss-star"></i>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-2xs">10h ago</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center border-bottom pb-3 mb-3">
                                    <div class="me-3">
                                        <img src="{{asset('assets/images/avatar/avatar2.webp')}}" class="avatar avatar-xxl"
                                            alt="" />
                                    </div>
                                    <div class="clearfix w-100">
                                        <h5 class="mb-1 fw-bold">Sophia Lee</h5>
                                        <p class="mb-2">
                                            Great experience! Everything was smooth and the staff
                                            handled.
                                        </p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex flex-wrap align-items-center gap-2">
                                                <span class="text-1xs">Rating: (4.8)</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <i class="fi fi-ss-star text-warning"></i>
                                                    <i class="fi fi-ss-star text-warning"></i>
                                                    <i class="fi fi-ss-star text-warning"></i>
                                                    <i class="fi fi-ss-star text-warning"></i>
                                                    <i class="fi fi-ss-star text-warning"></i>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-2xs">1d ago</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center border-bottom pb-3 mb-3">
                                    <div class="me-3">
                                        <img src="{{asset('assets/images/avatar/avatar3.webp')}}" class="avatar avatar-xxl"
                                            alt="" />
                                    </div>
                                    <div class="clearfix w-100">
                                        <h5 class="mb-1 fw-bold">Liam Smith</h5>
                                        <p class="mb-2">
                                            Impressed with the quick service and helpful customer
                                            support team.
                                        </p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex flex-wrap align-items-center gap-2">
                                                <span class="text-1xs">Rating: (4.7)</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <i class="fi fi-ss-star text-warning"></i>
                                                    <i class="fi fi-ss-star text-warning"></i>
                                                    <i class="fi fi-ss-star text-warning"></i>
                                                    <i class="fi fi-ss-star text-warning"></i>
                                                    <i class="fi fi-ss-star"></i>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-2xs">2d ago</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center border-bottom pb-3 mb-3">
                                    <div class="me-3">
                                        <img src="{{asset('assets/images/avatar/avatar2.webp')}}" class="avatar avatar-xxl"
                                            alt="" />
                                    </div>
                                    <div class="clearfix w-100">
                                        <h5 class="mb-1 fw-bold">Sophia Lee</h5>
                                        <p class="mb-2">
                                            Great experience! Everything was smooth and the staff
                                            handled.
                                        </p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex flex-wrap align-items-center gap-2">
                                                <span class="text-1xs">Rating: (4.8)</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <i class="fi fi-ss-star text-warning"></i>
                                                    <i class="fi fi-ss-star text-warning"></i>
                                                    <i class="fi fi-ss-star text-warning"></i>
                                                    <i class="fi fi-ss-star text-warning"></i>
                                                    <i class="fi fi-ss-star text-warning"></i>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-2xs">1d ago</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-wrap align-items-center justify-content-between mt-4 mb-3">
                    <h5 class="mb-0">New Property Listings</h5>
                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                        data-bs-target="#addPropertyModal">
                        Add New Property
                    </button>
                </div>

                <div class="row">
                    <div class="col-xxl-3 col-lg-6">
                        <div class="card card-body p-2">
                            <div class="rounded overflow-hidden mb-2">
                                <img src="{{asset('assets/images/properties/pic1.jpg')}}" alt="" class="w-100" />
                            </div>
                            <div class="clearfix p-2">
                                <h5 class="mb-2 fw-bold">
                                    <a href="property-details.html" class="text-dark stretched-link">Luxury
                                        Penthouse</a>
                                </h5>
                                <p class="mb-3">
                                    Elegant penthouse with modern design and stunning city
                                    views.
                                </p>
                                <div class="d-flex align-items-center gap-2 flex-wrap">
                                    <span
                                        class="badge badge-lg bg-gray bg-opacity-10 text-dark d-flex align-items-center">
                                        <i class="fi fi-rs-marker me-2"></i>Dubai, UAE
                                    </span>
                                    <span
                                        class="badge badge-lg bg-gray bg-opacity-10 text-dark d-flex align-items-center">
                                        <i class="fi fi-rs-sack-dollar me-2"></i>$1,200,000
                                    </span>
                                    <span
                                        class="badge badge-lg bg-gray bg-opacity-10 text-dark d-flex align-items-center">
                                        <i class="fi fi-sr-land-layers me-2"></i>2,350 sq.ft
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-3 col-lg-6">
                        <div class="card card-body p-2">
                            <div class="rounded overflow-hidden mb-2">
                                <img src="{{asset('assets/images/properties/pic2.jpg')}}" alt="" class="w-100" />
                            </div>
                            <div class="clearfix p-2">
                                <h5 class="mb-2 fw-bold">
                                    <a href="property-details.html" class="text-dark stretched-link">Modern Family
                                        Home</a>
                                </h5>
                                <p class="mb-3">
                                    Spacious family home featuring a garden, garage, and cozy
                                    interiors.
                                </p>
                                <div class="d-flex align-items-center gap-2 flex-wrap">
                                    <span
                                        class="badge badge-lg bg-gray bg-opacity-10 text-dark d-flex align-items-center">
                                        <i class="fi fi-rs-marker me-2"></i>Los Angeles, USA
                                    </span>
                                    <span
                                        class="badge badge-lg bg-gray bg-opacity-10 text-dark d-flex align-items-center">
                                        <i class="fi fi-rs-sack-dollar me-2"></i>$420,000
                                    </span>
                                    <span
                                        class="badge badge-lg bg-gray bg-opacity-10 text-dark d-flex align-items-center">
                                        <i class="fi fi-sr-land-layers me-2"></i>1,450 sq.ft
                                    </span>
                                    <span
                                        class="badge badge-lg bg-gray bg-opacity-10 text-dark d-flex align-items-center">
                                        <i class="fi fi-rr-bed-alt me-2"></i>3 / 2
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-3 col-lg-6">
                        <div class="card card-body p-2">
                            <div class="rounded overflow-hidden mb-2">
                                <img src="{{asset('assets/images/properties/pic3.jpg')}}" alt="" class="w-100" />
                            </div>
                            <div class="clearfix p-2">
                                <h5 class="mb-2 fw-bold">
                                    <a href="property-details.html" class="text-dark stretched-link">Cozy
                                        Apartment</a>
                                </h5>
                                <p class="mb-3">
                                    Comfortable apartment ideal for couples, located near
                                    shopping and transport.
                                </p>
                                <div class="d-flex align-items-center gap-2 flex-wrap">
                                    <span
                                        class="badge badge-lg bg-gray bg-opacity-10 text-dark d-flex align-items-center">
                                        <i class="fi fi-rs-marker me-2"></i>New York, USA
                                    </span>
                                    <span
                                        class="badge badge-lg bg-gray bg-opacity-10 text-dark d-flex align-items-center">
                                        <i class="fi fi-rs-sack-dollar me-2"></i>$250,000
                                    </span>
                                    <span
                                        class="badge badge-lg bg-gray bg-opacity-10 text-dark d-flex align-items-center">
                                        <i class="fi fi-sr-land-layers me-2"></i>980 sq.ft
                                    </span>
                                    <span
                                        class="badge badge-lg bg-gray bg-opacity-10 text-dark d-flex align-items-center">
                                        <i class="fi fi-rr-bed-alt me-2"></i>2 / 1
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-3 col-lg-6">
                        <div class="card card-body p-2">
                            <div class="rounded overflow-hidden mb-2">
                                <img src="{{asset('assets/images/properties/pic4.jpg')}}" alt="" class="w-100" />
                            </div>
                            <div class="clearfix p-2">
                                <h5 class="mb-2 fw-bold">
                                    <a href="property-details.html" class="text-dark stretched-link">Seaside Villa</a>
                                </h5>
                                <p class="mb-3">
                                    Beautiful seaside villa with private pool and ocean view
                                    balcony.
                                </p>
                                <div class="d-flex align-items-center gap-2 flex-wrap">
                                    <span
                                        class="badge badge-lg bg-gray bg-opacity-10 text-dark d-flex align-items-center">
                                        <i class="fi fi-rs-marker me-2"></i>Malibu, USA
                                    </span>
                                    <span
                                        class="badge badge-lg bg-gray bg-opacity-10 text-dark d-flex align-items-center">
                                        <i class="fi fi-rs-sack-dollar me-2"></i>$850,000
                                    </span>
                                    <span
                                        class="badge badge-lg bg-gray bg-opacity-10 text-dark d-flex align-items-center">
                                        <i class="fi fi-sr-land-layers me-2"></i>1,950 sq.ft
                                    </span>
                                    <span
                                        class="badge badge-lg bg-gray bg-opacity-10 text-dark d-flex align-items-center">
                                        <i class="fi fi-rr-bed-alt me-2"></i>3 / 2
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="addPropertyModal" tabindex="-1" aria-labelledby="addPropertyModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addPropertyModalLabel">
                                    Add New Property
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <form>
                                <div class="modal-body">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Property Title</label>
                                            <input type="text" class="form-control"
                                                placeholder="e.g. Luxury Villa" required />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Property Type</label>
                                            <select class="form-select" required>
                                                <option disabled selected>Select Type</option>
                                                <option>Apartment</option>
                                                <option>Villa</option>
                                                <option>House</option>
                                                <option>Office</option>
                                                <option>Shop</option>
                                                <option>Land</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Price (₹)</label>
                                            <input type="number" class="form-control" placeholder="e.g. 5000000"
                                                required />
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Status</label>
                                            <select class="form-select">
                                                <option>For Sale</option>
                                                <option>For Rent</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Bedrooms</label>
                                            <input type="number" class="form-control" placeholder="e.g. 3" />
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Bathrooms</label>
                                            <input type="number" class="form-control" placeholder="e.g. 2" />
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Area (sq ft)</label>
                                            <input type="number" class="form-control" placeholder="e.g. 1200" />
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Garage</label>
                                            <input type="number" class="form-control" placeholder="e.g. 1" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">City</label>
                                            <input type="text" class="form-control" placeholder="e.g. Dubai" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Address</label>
                                            <input type="text" class="form-control"
                                                placeholder="Full address" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Property Image</label>
                                            <input type="file" class="form-control" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Gallery Images</label>
                                            <input type="file" class="form-control" multiple />
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Description</label>
                                            <textarea class="form-control" rows="3" placeholder="Write property details..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                                        Cancel
                                    </button>
                                    <button type="submit" class="btn btn-primary">
                                        Save Property
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>

@endsection
