<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>UrbanHub | Real Estate Management Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="icon"
        type="image/png"
        href="{{ asset('assets/images/favicon.png') }}">

    <link rel="apple-touch-icon"
        sizes="180x180"
        href="{{ asset('assets/images/apple-touch-icon.png') }}">

    <!-- Google Fonts -->
    <link rel="preconnect"
        href="https://fonts.googleapis.com">

    <link rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
        href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

    <!-- Remix Icon -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css"/>

    <!-- Flaticon UIcons -->
    <link rel="stylesheet"
        href="https://cdn-uicons.flaticon.com/2.6.0/uicons-bold-rounded/css/uicons-bold-rounded.css">

    <!-- Simplebar -->
    <link rel="stylesheet"
        href="{{ asset('assets/libs/simplebar/simplebar.css') }}">

    <!-- Bootstrap Select -->
    <link rel="stylesheet"
        href="{{ asset('assets/libs/bootstrap-select/css/bootstrap-select.min.css') }}">

    <!-- Jsvector Map -->
    <link rel="stylesheet"
        href="{{ asset('assets/libs/jsvectormap/jsvectormap.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet"
        href="{{ asset('assets/css/styles.css') }}">

</head>

{{-- <head>

    <!-- Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>UrbanHub | Real Estate Management Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/apple-touch-icon.png') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Remix Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css">

    <!-- Flaticon -->
    <link rel="stylesheet"
        href="https://cdn-uicons.flaticon.com/2.3.0/uicons-regular-rounded/css/uicons-regular-rounded.css">

    <!-- Simplebar -->
    <link rel="stylesheet" href="{{ asset('assets/libs/simplebar/simplebar.css') }}">

    <!-- Bootstrap Select -->
    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap-select/css/bootstrap-select.min.css') }}">

    <!-- REMOVE THIS IF YOU DON'T USE MAP -->
    <!--
    <link rel="stylesheet"
        href="{{ asset('assets/libs/jsvectormap/jsvectormap.min.css') }}">
    -->

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

</head> --}}

<body>
    <div class="page-layout">
        <!-- begin::UrbanHub Page Header -->
        <header class="app-header">
            <div class="app-header-inner">
                <div class="app-header-start">
                    <button class="app-toggler" type="button">
                        <i class="fi fi-br-angle-small-left"></i>
                    </button>
                    <div class="app-header-brand">
                        <a class="navbar-brand-logo" href="index.html">
                            <img src="{{asset('assets/images/logo.svg')}}" alt="UrbanHub Admin Dashboard" />
                        </a>
                        <a class="navbar-brand-mini visible-light" href="index.html">
                            <img src="{{asset('assets/images/logo-text.svg')}}" alt="UrbanHub Admin Dashboard" />
                        </a>
                        <a class="navbar-brand-mini visible-dark" href="index.html">
                            <img src="{{asset('assets/images/logo-text-white.svg')}}" alt="UrbanHub Admin Dashboard" />
                        </a>
                    </div>
                    <form class="d-none d-xl-flex align-items-center h-100 w-lg-250px w-xxl-300px position-relative"
                        action="#">
                        <input type="text" class="form-control px-sm-3 bg-light" placeholder="Search anything" />
                        <button type="button"
                            class="btn btn-sm text-primary border-0 position-absolute end-0 me-3 p-0">
                            <i class="fi fi-rr-search"></i>
                        </button>
                    </form>
                </div>
                <div class="app-header-end">
                    <div class="d-flex align-items-center gap-sm-1 gap-0 px-lg-2 px-sm-2 px-1">
                        <div class="dropdown text-end">
                            <a href="javascript:void(0);" class="btn btn-icon btn-action-gray" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside" aria-expanded="true">
                                <i class="icon-bell">
                                    <span class="visually-hidden">New alerts</span>
                                </i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg-end p-0 w-300px mt-2">
                                <div class="px-3 py-3 border-bottom d-flex justify-content-between align-items-center">
                                    <h6 class="mb-0">
                                        Notifications
                                        <span class="badge badge-sm rounded-pill bg-primary ms-1">9</span>
                                    </h6>
                                    <i class="bi bi-x-lg cursor-pointer"></i>
                                </div>
                                <div class="p-2" style="height: 300px" data-simplebar>
                                    <ul class="list-group list-group-hover list-group-smooth list-group-unlined">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div class="avatar avatar-xs avatar-status-success rounded-circle me-1">
                                                <img src="{{asset('assets/images/avatar/avatar2.webp')}}" alt="" />
                                            </div>
                                            <div class="ms-2 me-auto">
                                                <h6 class="mb-0">Emma Smith</h6>
                                                <small class="text-body d-block">Need to update the details.</small>
                                                <small class="text-muted position-absolute end-0 top-0 mt-2 me-3">7 hr
                                                    ago</small>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div class="avatar avatar-xs bg-success rounded-circle text-white">
                                                D
                                            </div>
                                            <div class="ms-2 me-auto">
                                                <h6 class="mb-0">Design Team</h6>
                                                <small class="text-body d-block">Check your shared folder.</small>
                                                <small class="text-muted position-absolute end-0 top-0 mt-2 me-3">6 hr
                                                    ago</small>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div class="avatar avatar-xs bg-dark rounded-circle text-white">
                                                <i class="fi fi-rr-lock"></i>
                                            </div>
                                            <div class="ms-2 me-auto">
                                                <h6 class="mb-0">Security Update</h6>
                                                <small class="text-body d-block">Password successfully set.</small>
                                                <small class="text-muted position-absolute end-0 top-0 mt-2 me-3">5 hr
                                                    ago</small>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div class="avatar avatar-xs bg-info rounded-circle text-white">
                                                <i class="fi fi-rr-shopping-cart"></i>
                                            </div>
                                            <div class="ms-2 me-auto">
                                                <h6 class="mb-0">Invoice #1432</h6>
                                                <small class="text-body d-block">has been paid Amount: $899.00</small>
                                                <small class="text-muted position-absolute end-0 top-0 mt-2 me-3">5 hr
                                                    ago</small>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div class="avatar avatar-xs bg-danger rounded-circle text-white">
                                                R
                                            </div>
                                            <div class="ms-2 me-auto">
                                                <h6 class="mb-0">Emma Smith</h6>
                                                <small class="text-body d-block">added you to Dashboard
                                                    Analytics</small>
                                                <small class="text-muted position-absolute end-0 top-0 mt-2 me-3">5 hr
                                                    ago</small>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div class="avatar avatar-xs avatar-status-success rounded-circle me-1">
                                                <img src="{{asset('assets/images/avatar/avatar3.webp')}}" alt="" />
                                            </div>
                                            <div class="ms-2 me-auto">
                                                <h6 class="mb-0">Olivia Clark</h6>
                                                <small class="text-body d-block">You can now view the “Report”.</small>
                                                <small class="text-muted position-absolute end-0 top-0 mt-2 me-3">4 hr
                                                    ago</small>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div class="avatar avatar-xs avatar-status-danger rounded-circle me-1">
                                                <img src="{{asset('assets/images/avatar/avatar5.webp')}}" alt="" />
                                            </div>
                                            <div class="ms-2 me-auto">
                                                <h6 class="mb-0">Isabella Walker</h6>
                                                <small class="text-body d-block">@Isabella please review.</small>
                                                <small class="text-muted position-absolute end-0 top-0 mt-2 me-3">2 hr
                                                    ago</small>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="p-2">
                                    <a href="javascript:void(0);" class="btn w-100 btn-primary">View all
                                        notifications</a>
                                </div>
                            </div>
                        </div>
                        <a href="email/inbox.html" class="btn btn-md btn-icon btn-action-gray">
                            <i class="icon-message-square-text"></i>
                            <span class="visually-hidden">Inbox</span>
                        </a>
                        <a href="calendar.html" class="btn btn-md btn-icon btn-action-gray d-none d-sm-flex">
                            <i class="icon-calendar"></i>
                            <span class="visually-hidden">Calendar</span>
                        </a>
                        <a href="javascript:void(0);" class="btn btn-md btn-icon btn-action-gray theme-btn">
                            <i class="icon-sun-medium icon-light"></i>
                            <i class="icon-moon icon-dark"></i>
                        </a>
                    </div>
                    <div class="d-flex align-items-center gap-sm-2 gap-0 px-lg-2 px-sm-2 px-1">
                        <div class="dropdown text-end">
                            <a href="#" class="d-flex align-items-center py-2" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside" aria-expanded="true">
                                <div class="text-end me-2 d-none d-lg-inline-block">
                                    <div class="fw-bold text-dark">Robert Brown</div>
                                    <small class="text-body d-block lh-sm">
                                        <i class="fi fi-rr-angle-down text-3xs me-1"></i> Manager
                                    </small>
                                </div>
                                <div class="avatar avatar-sm rounded-circle avatar-status-success">
                                    <img src="{{asset('assets/images/avatar/avatar1.webp')}}" alt="" />
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end w-225px mt-1">
                                <li class="d-flex align-items-center p-2">
                                    <div class="avatar avatar-sm rounded-circle">
                                        <img src="{{asset('assets/images/avatar/avatar1.webp')}}" alt="" />
                                    </div>
                                    <div class="ms-2">
                                        <div class="fw-bold text-dark">John Carter</div>
                                        <small class="text-body d-block lh-sm">john@gamil.com</small>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-divider my-1"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center gap-2" href="profile.html">
                                        <i class="fi fi-rr-user scale-1x"></i> View Profile
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center gap-2" href="pages/faq.html">
                                        <i class="fi fi-rs-interrogation scale-1x"></i> Help
                                        Center
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center gap-2" href="profile.html">
                                        <i class="fi fi-rr-settings scale-1x"></i> Account
                                        Settings
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center gap-2"
                                        href="pages/pricing.html">
                                        <i class="fi fi-rr-usd-circle scale-1x"></i> Upgrade Plan
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider my-1"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center gap-2 text-danger"
                                        href="authentication/login.html">
                                        <i class="fi fi-sr-exit scale-1x"></i> Log Out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @yield('contain')

        <!-- begin::UrbanHub Footer -->
        <footer class="footer-wrapper">
            <div class="container-fluid">
                <div class="row g-3">
                    <div class="col-md-8 text-center text-md-start">
                        <p class="mb-0">
                            © <span class="currentYear">2026</span> UrbanHub. Proudly
                            powered by <a href="javascript:void(0);">LayoutDrop</a>.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <ul
                            class="d-flex list-inline mb-0 gap-4 flex-wrap justify-content-center justify-content-md-end">
                            <li>
                                <a class="text-body" href="index.html">Home</a>
                            </li>
                            <li>
                                <a class="text-body" href="pages/faq.html">Faq's</a>
                            </li>
                            <li>
                                <a class="text-body" href="pages/faq.html">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end::UrbanHub Footer -->
    </div>

    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jsvectormap/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jsvectormap/maps/world.js') }}"></script>
    <script src="{{ asset('assets/js/jsvectormap.js') }}"></script>
    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/apexchart.js') }}"></script>
    <script src="{{ asset('assets/js/appSettings.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>


</body>

</html>
