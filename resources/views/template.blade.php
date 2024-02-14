<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>{{ get_config('site_name'). ' - '. get_config('tag_line') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets') }}/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets') }}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets') }}/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets') }}/css/custom.css" rel="stylesheet" type="text/css" />
    <link href="https://rawcdn.githack.com/hung1001/font-awesome-pro/4cac1a6/css/all.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.10/css/dataTables.jqueryui.min.css" rel="stylesheet">
</head>


<body data-sidebar="dark">

    <!-- <body data-layout="horizontal"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar" class="isvertical-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="{{ url('') }}" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="{{ asset('global') }}/AweSMM.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('global') }}/AweSMM.png" alt="" height="22">
                            </span>
                        </a>

                        <a href="{{ url('') }}" class="logo logo-light">
                            <span class="logo-lg">
                                <img src="{{ asset('global') }}/AweSMM.png" alt="" height="22">
                            </span>
                            <span class="logo-sm">
                                <img src="{{ asset('global') }}/AweSMM.png" alt="" height="22">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn topnav-hamburger">
                        <span class="hamburger-icon open">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>

                    <div class="d-none d-sm-block ms-3 align-self-center">
                        <h4 class="page-title">{{ $page }}</h4>
                    </div>

                </div>

                <div class="d-flex">
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item user text-start d-flex align-items-center" id="page-header-user-dropdown-v" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="{{ asset('assets') }}/images/users/avatar-1.jpg" alt="Header Avatar">
                        </button>
                        <div class="dropdown-menu dropdown-menu-end pt-0">
                            <div class="p-3 border-bottom">
                                <h6 class="mb-0">{{ $user['name'] }}</h6>
                                <p class="mb-0 font-size-11 text-muted">{{ $user['email'] }}</p>
                            </div>
                            <a class="dropdown-item" href="#"><i class="mdi mdi-wallet text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Balance : <b>{{ rupiah($user['balance']) }}</b></span></a>
                            <a class="dropdown-item d-flex align-items-center" href="{{ url('user/settings') }}"><i class="mdi mdi-cog-outline text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Settings</span></a>
                            <a class="dropdown-item" href="{{ url('auth/logout') }}"><i class="mdi mdi-logout text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Logout</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="vertical-menu">

            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ url('') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('global') }}/AweSMM.png" alt="" height="50">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('global') }}/AweSMM.png" alt="" height="50">
                    </span>
                </a>

                <a href="{{ url('') }}" class="logo logo-light">
                    <span class="logo-lg">
                        <img src="{{ asset('global') }}/AweSMM.png" alt="" height="50">
                    </span>
                    <span class="logo-sm">
                        <img src="{{ asset('global') }}/AweSMM.png" alt="" height="50">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 header-item vertical-menu-btn topnav-hamburger">
                <span class="hamburger-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </button>

            <div data-simplebar class="sidebar-menu-scroll">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title" data-key="t-menu">Menu</li>
                        <li>
                            <a href="{{ url('dashboard') }}">
                                <i class="fad fa-home" style="min-width: 1.5rem; font-size: 20px; color:white"></i>
                                <span class="menu-item">Dashboard</span>
                            </a>
                        </li>
                        <li class="menu-title" data-key="t-menu">Pemesanan</li>
                        <li>
                            <a href="{{ url('orders/social-single') }}">
                                <i class="fad fa-cart-plus" style="min-width: 1.5rem; font-size: 20px; color:white"></i>
                                <span class="menu-item">Buat Pesanan</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('orders/history') }}">
                                <i class="fad fa-history" style="min-width: 1.5rem; font-size: 20px; color:white"></i>
                                <span class="menu-item">Riwayat Pesanan</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('orders/request') }}">
                                <i class="fad fa-hand-holding-box" style="min-width: 1.5rem; font-size: 20px; color:white"></i>
                                <span class="menu-item">Riwayat Refill</span>
                            </a>
                        </li>
                        <li class="menu-title" data-key="t-menu">Deposit</li>
                        <li>
                            <a href="{{ url('deposit/new') }}">
                                <i class="fad fa-hands-usd" style="min-width: 1.5rem; font-size: 20px; color:white"></i>
                                <span class="menu-item">Buat Deposit</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('deposit/history') }}">
                                <i class="fad fa-receipt" style="min-width: 1.5rem; font-size: 20px; color:white"></i>
                                <span class="menu-item">Riwayat Deposit</span>
                            </a>
                        </li>
                        <li class="menu-title" data-key="t-menu">Halaman Lainnya</li>
                        <li>
                            <a href="{{ url('daftar-harga') }}">
                                <i class="fad fa-tags" style="min-width: 1.5rem; font-size: 20px; color:white"></i>
                                <span class="menu-item">Daftar Harga</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('api-docs') }}">
                                <i class="fad fa-code" style="min-width: 1.5rem; font-size: 20px; color:white"></i>
                                <span class="menu-item">Dokumentasi API</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('tickets') }}">
                                <i class="fad fa-paper-plane" style="min-width: 1.5rem; font-size: 20px; color:white"></i>
                                <span class="menu-item">TIket Bantuan</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('monitoring_services') }}">
                                <i class="fad fa-eye" style="min-width: 1.5rem; font-size: 20px; color:white"></i>
                                <span class="menu-item">Monitoring Layanan</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->

                <div class="p-3 px-4 sidebar-footer">
                    <p class="mb-1 main-title">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> &copy; {{ get_config('site_name') }}.
                    </p>
                    <p class="mb-0">Design & Develop by RootWritter</p>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    @yield('view')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> &copy; {{ get_config('site_name') }}. Design & Develop by RootWritter
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/libs/metismenujs/metismenujs.min.js"></script>
    <script src="{{ asset('assets') }}/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('assets') }}/libs/eva-icons/eva.min.js"></script>


    <script src="{{ asset('assets') }}/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.10/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.10/js/dataTables.jqueryui.min.js"></script>
    <script>
        var token = "{{ csrf_token() }}"
    </script>
    @yield('script')
</body>

</html>