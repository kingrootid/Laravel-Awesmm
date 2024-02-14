<!doctype html>
<html lang="en" data-layout="vertical" data-layout-style="" data-layout-position="fixed" data-topbar="dark">

<head>

    <meta charset="utf-8" />
    <title>{{ $page ." - ". get_config('site_name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ get_config('meta_description') }}" />
    <meta name="keywords" content="{{ get_config('meta_keyword') }}" />
    <meta name="author" content="RootWritter" />
    <meta name="theme-color" content="{{ get_config('meta_color') }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets') }}/images/favicon.ico">

    <!-- plugin css -->
    <link href="{{ asset('assets') }}/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{ asset('assets') }}/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets') }}/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('assets') }}/css/custom.min.css" rel="stylesheet" type="text/css" />
    <link href="https://rawcdn.githack.com/hung1001/font-awesome-pro/4cac1a6/css/all.css" rel="stylesheet" type="text/css" />
    <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <!-- Sweet Alert css-->
    <link href="{{ asset('assets') }}/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />


</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="{{ url('dashboard') }}" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset('/') }}{{ get_config('logo_dark') }}" alt="Logo {{ get_config('site_name') }}" style="height: 3.1rem;">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('/') }}{{ get_config('logo_dark') }}" alt="Logo {{ get_config('site_name') }}" style="height: 3.1rem;">
                                </span>
                            </a>

                            <a href="{{ url('dashboard') }}" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ asset('/') }}{{ get_config('logo') }}" alt="Logo {{ get_config('site_name') }}" style="height: 3.1rem;">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('/') }}{{ get_config('logo') }}" alt="Logo {{ get_config('site_name') }}" style="height: 3.1rem;">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user" src="{{ asset('assets') }}/images/users/avatar-1.jpg" alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{ $user->name }}</span>
                                        <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">{{ $user->super_admin == 1 ? 'Super Admin' : 'Operator'}}</span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <h6 class="dropdown-header">Selamat Datang {{ $user->name }}!</h6>
                                <a class="dropdown-item" href="{{ url('admin/settings') }}"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Pengaturan Akun</span></a>
                                <a class="dropdown-item" href="{{ url('auth/logout') }}"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Keluar Aplikasi</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ url('admin/dashboard') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('/') }}{{ get_config('logo_dark') }}" alt="Logo {{ get_config('site_name') }}" style="height: 2.1rem;">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('/') }}{{ get_config('logo_dark') }}" alt="Logo {{ get_config('site_name') }}" style="height: 2.1rem;">
                    </span>
                </a>

                <a href="{{ url('admin/dashboard') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('/') }}{{ get_config('logo') }}" alt="Logo {{ get_config('site_name') }}" style="height: 2.1rem;">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('/') }}{{ get_config('logo') }}" alt="Logo {{ get_config('site_name') }}" style="height: 2.1rem;">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>
            <div id="scrollbar">
                <div class="container-fluid">
                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span>Menu</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ url('/admin/dashboard') }}">
                                <i class="fas fa-home"></i> <span>Halaman Utama</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ url('/admin/news') }}">
                                <i class="mdi mdi-information"></i> <span>Berita & Informasi</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarDeposits" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDeposits">
                                <i class="mdi mdi-currency-usd"></i> <span>Deposit</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarDeposits">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ url('admin/method') }}" class="nav-link"> Metode </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('admin/history_deposits') }}" class="nav-link"> History Deposit </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLayanan" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayanan">
                                <i class="mdi mdi-server"></i> <span>Layanan</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarLayanan">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ url('admin/category') }}" class="nav-link"> Category </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('admin/provider') }}" class="nav-link"> Provider </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('admin/services') }}" class="nav-link"> List Layanan </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ url('admin/order_social') }}">
                                <i class="mdi mdi-history"></i> <span>History Pemesanan</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ url('admin/order-request') }}">
                                <i class="mdi mdi-history"></i> <span>History Permintaan Pesanan</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarMember" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMember">
                                <i class="fas fa-users"></i> <span>Member</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarMember">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ url('/admin/users') }}" class="nav-link"> Pengguna </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/admin/role') }}" class="nav-link"> Role </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ url('admin/web-config') }}">
                                <i class="mdi mdi-account"></i> <span>Pengaturan Website</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ url('/admin/report-order') }}">
                                <i class="mdi mdi-chart-bar"></i> <span>Report Pesanan</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ url('/admin/tickets') }}">
                                <i class="mdi mdi-note"></i> <span>Tickets Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ url('/admin/pages') }}">
                                <i class="mdi mdi-note"></i> <span>Pages Management</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">{{ $page }}</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    @yield('view')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © {{ get_config('site_name') }}.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Dibuat dengan <i class="mdi mdi-heart text-danger"></i> by RootWritter
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script>
        var base_url = "{{ url('') }}";
        var token = "{{ csrf_token() }}";
    </script>
    <script src="{{ asset('assets') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('assets') }}/libs/node-waves/waves.min.js"></script>
    <script src="{{ asset('assets') }}/libs/feather-icons/feather.min.js"></script>
    <script src="{{ asset('assets') }}/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="{{ asset('assets') }}/js/plugins.js"></script>
    <!-- App js -->
    <script src="{{ asset('assets') }}/js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <!--datatable js-->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <!-- Sweet Alerts js -->
    <script src="{{ asset('assets') }}/libs/sweetalert2/sweetalert2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.1.3/axios.js"></script>
    @yield('script')
</body>

</html>