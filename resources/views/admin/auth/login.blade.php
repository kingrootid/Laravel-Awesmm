<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Login | Borex - Admin & Dashboard Template</title>
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

</head>

<body>
    <div class="auth-page">
        <div class="container-fluid p-0">
            <div class="row g-0 align-items-center">
                <div class="col-md-8 m-auto">
                    <div class="row justify-content-center g-0">
                        <div class="col-xl-9">
                            <div class="p-4">
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <div class="auth-full-page-content rounded d-flex p-3 my-2">
                                            <div class="w-100">
                                                <div class="d-flex flex-column h-100">
                                                    <div class="mb-4 mb-md-5">
                                                        <a href="index.html" class="d-block auth-logo">
                                                            <img src="{{ asset('assets') }}/images/logo-dark.png" alt="" height="22" class="auth-logo-dark me-start">
                                                            <img src="{{ asset('assets') }}/images/logo-light.png" alt="" height="22" class="auth-logo-light me-start">
                                                        </a>
                                                    </div>
                                                    <div class="auth-content my-auto">
                                                        <div class="text-center">
                                                            <h5 class="mb-0">Welcome Back !</h5>
                                                            <p class="text-muted mt-2">Sign in to continue to Borex.</p>
                                                        </div>
                                                        <form class="mt-4 pt-2" action="index.html">
                                                            <div class="form-floating form-floating-custom mb-4">
                                                                <input type="text" class="form-control" id="input-username" placeholder="Enter User Name">
                                                                <label for="input-username">Username</label>
                                                                <div class="form-floating-icon">
                                                                    <i data-eva="people-outline"></i>
                                                                </div>
                                                            </div>

                                                            <div class="form-floating form-floating-custom mb-4 auth-pass-inputgroup">
                                                                <input type="password" class="form-control pe-5" id="password-input" placeholder="Enter Password">

                                                                <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0" id="password-addon">
                                                                    <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                                                                </button>
                                                                <label for="password-input">Password</label>
                                                                <div class="form-floating-icon">
                                                                    <i data-eva="lock-outline"></i>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-4">
                                                                <div class="col">
                                                                    <div class="form-check font-size-15">
                                                                        <input class="form-check-input" type="checkbox" id="remember-check">
                                                                        <label class="form-check-label font-size-13" for="remember-check">
                                                                            Remember me
                                                                        </label>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="mb-3">
                                                                <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log In</button>
                                                            </div>
                                                        </form>

                                                        <div class="mt-4 pt-3 text-center">
                                                            <div class="signin-other-title">
                                                                <h5 class="font-size-14 mb-4 text-muted fw-medium">- Or you can join with -</h5>
                                                            </div>

                                                            <div class="d-flex gap-2">
                                                                <button type="button" class="btn btn-soft-primary waves-effect waves-light w-100">
                                                                    <i class="bx bxl-facebook font-size-16 align-middle"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-soft-info waves-effect waves-light w-100">
                                                                    <i class="bx bxl-linkedin font-size-16 align-middle"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-soft-danger waves-effect waves-light w-100">
                                                                    <i class="bx bxl-google font-size-16 align-middle"></i>
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="mt-4 pt-3 text-center">
                                                            <p class="text-muted mb-0">Don't have an account ? <a href="auth-register.html" class="text-primary fw-semibold"> Signup now </a> </p>
                                                        </div>
                                                    </div>
                                                    <div class="mt-4 text-center">
                                                        <p class="mb-0">© <script>
                                                                document.write(new Date().getFullYear())
                                                            </script> Borex . Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end auth full page content -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container fluid -->
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/libs/metismenujs/metismenujs.min.js"></script>
    <script src="{{ asset('assets') }}/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('assets') }}/libs/eva-icons/eva.min.js"></script>

    <script src="{{ asset('assets') }}/js/pages/pass-addon.init.js"></script>

    <script src="{{ asset('assets') }}/js/pages/eva-icon.init.js"></script>

</body>

</html>