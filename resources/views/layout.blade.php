<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Hyper - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <link href="{{ asset('boxicons-2.1.4/css/boxicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/vendor/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app-modern.min.css') }}" rel="stylesheet" type="text/css" id="light-style" />
    <link href="{{ asset('assets/css/app-modern-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style" />
    @yield('style')
    @livewireStyles

</head>

<body class="loading" data-layout="detached"
    data-layout-config='{"leftSidebarCondensed":false,"darkMode":false, "showRightSidebarOnStart": true}'>

    <div class="navbar-custom topnav-navbar topnav-navbar-dark">
        <div class="container-fluid">
            <a href="#" class="topnav-logo">
                <span class="topnav-logo-lg">
                    <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="16">
                </span>
                <span class="topnav-logo-sm">
                    <img src="{{ asset('assets/images/logo_sm.png') }}" alt="" height="16">
                </span>
            </a>

            <ul class="list-unstyled topbar-right-menu float-right mb-0">


            </ul>
            <a class="button-menu-mobile disable-btn">
                <div class="lines">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </a>
        </div>
    </div>
    <div class="container-fluid">
        <div class="wrapper">

            <div class="left-side-menu left-side-menu-detached">

                <div class="leftbar-user">
                    <a href="javascript: void(0);">
                        <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt="user-image" height="42"
                            class="rounded-circle shadow-sm">
                        <span class="leftbar-user-name">Qrcode Tracking</span>
                    </a>
                </div>

                <!--- Sidemenu -->
                <ul class="metismenu side-nav">

                    <li class="side-nav-item">
                        <a href="{{ route('admin.QrCode') }}" class="side-nav-link">
                            <i class='bx bx-qr-scan' ></i>
                            <span> QR-Code </span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="{{ route('logout') }}" class="side-nav-link">
                            <i class='bx bx-log-out' ></i>
                            <span> Logout </span>
                        </a>
                    </li>

                    {{-- <li class="side-nav-item">
                        <a href="javascript: void(0);" class="side-nav-link">
                            <i class="uil-store"></i>
                            <span> Ecommerce </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="side-nav-second-level" aria-expanded="false">
                            <li>
                                <a href="apps-ecommerce-products.html">Products</a>
                            </li>
                        </ul>
                    </li> --}}

                </ul>

                <div class="clearfix"></div>
            </div>

            <div class="content-page">
                @yield('content')
            </div><!-- content-page -->

        </div>
    </div>



    <div class="rightbar-overlay"></div>
    @yield('script')
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets/js/pages/demo.dashboard.js') }}"></script>
    @livewireScripts

</body>

</html>
