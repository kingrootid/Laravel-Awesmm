<!DOCTYPE html>
<html id="theme_21" lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ get_config('site_name'). ' - '. get_config('tag_line') }}</title>
    <meta name="keywords" content="{{ get_config('meta_keywords') }}">
    <meta name="description" content="{{ get_config('meta_description') }}">
    <meta name="google-site-verification" content="" />
    <link rel="shortcut icon" type="image/ico" href="{{ asset('global') }}/jmi3rw/um1lglruyptzrozs.ico" />
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('global') }}/jmi3rw/um1lglruyptzrozs.ico" />
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('global') }}/jmi3rw/um1lglruyptzrozs.ico" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('global') }}/jmi3rw/um1lglruyptzrozs.ico" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('global') }}/jmi3rw/um1lglruyptzrozs.ico" />
    <link rel="apple-touch-icon" href="{{ asset('global') }}/jmi3rw/um1lglruyptzrozs.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.1.0/remixicon.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('global') }}/v035740468b5dadb6118.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('global') }}/lc7qcy1ueqm57kqm.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('global') }}/jmi3rw/s8ro6fsl7lekrp52.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.min.css" rel="stylesheet">
</head>

<body class="body  body-public">
    <div class="wrapper  wrapper-navbar ">
        <div id="block_28">
            <div class="block-wrapper">
                <div class="component_navbar ">
                    <div class="component-navbar__wrapper">
                        <div class="sidebar-block__top component-navbar component-navbar__navbar-public editor__component-wrapper">
                            <div>
                                <nav class="navbar navbar-expand-lg navbar-light container-fluid">
                                    <div class="navbar-public__header">
                                        <div class="sidebar-block__top-brand">
                                            <div class="component-navbar-logo">
                                                <a href="index.html">
                                                    <img src="{{ asset('global') }}/AweSMM.png" class="sidebar-block__top-logo" alt="{{ get_config('site_name'). ' - '. get_config('tag_line') }}" title="{{  get_config('site_name') }}">
                                                </a>
                                            </div>
                                        </div>
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-28" aria-controls="navbar-collapse-28" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-burger">
                                                <span class="navbar-burger-line"></span>
                                            </span>
                                        </button>
                                    </div>
                                    <div class="collapse navbar-collapse" id="navbar-collapse-28">
                                        <div class="component-navbar-collapse-divider"></div>
                                        <div class="d-flex component-navbar-collapse">
                                            <ul class="navbar-nav">
                                                <li class="nav-item component-navbar-nav-item component_navbar component-navbar-public-nav-item">
                                                    <a class="component-navbar-nav-link component-navbar-nav-link__navbar-public component-navbar-nav-link-active__navbar-public" href="{{ url('') }}">
                                                        <i class="navbar-icon fad fa-angle-double-right"></i> Masuk </a>
                                                </li>
                                                <li class="nav-item component-navbar-nav-item component_navbar component-navbar-public-nav-item">
                                                    <a class="component-navbar-nav-link component-navbar-nav-link__navbar-public " href="{{ url('auth/register') }}">
                                                        <i class="navbar-icon fad fa-external-link"></i> Daftar </a>
                                                </li>
                                                <li class="nav-item component-navbar-nav-item component_navbar component-navbar-public-nav-item">
                                                    <a class="component-navbar-nav-link component-navbar-nav-link__navbar-public " href="{{ url('pages/services') }}">
                                                        <i class="navbar-icon fad fa-th-list"></i> Services </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="component_navbar"></div>
        </div>
        <div class="wrapper-content">
            <div class="wrapper-content__header"></div>
            <div class="wrapper-content__body">
                <!-- Main variables *content* -->
                <div id="block_21">
                    <div class="block-bg"></div>
                    <div class="container">
                        <div class="block-signin ">
                            <div class="row">
                                <div class="col">
                                    <div class="block-signin__content">
                                        <div class="block-signin__title style-text-signin">
                                            <h1 class="text-center">
                                                <span style="color: var(--color-id-199)">
                                                    <span style="text-align: CENTER">
                                                        <strong style="font-weight: bold">{{ get_config('site_name') }} </strong>
                                                    </span>
                                                </span>
                                                <span style="color: var(--color-id-236)">
                                                    <span style="text-align: CENTER">- </span>
                                                </span>
                                                <span style="color: var(--color-id-249)">
                                                    <span style="text-align: CENTER">{{ get_config('tag_line') }}</span>
                                                </span>
                                            </h1>
                                        </div>
                                        <div class="block-signin__description style-text-signin">
                                            <p class="text-center">
                                                <span style="color: var(--color-id-251)">
                                                    <span style="text-align: CENTER">{{ get_config('site_description') }}</span>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="block-signin__card component_card">
                                        <div class="card">
                                            <form method="post" id="login" class="component_form_group component_checkbox_remember_me">
                                                <div class="form-row">
                                                    <div class="custom-col">
                                                        <div class="form-group ">
                                                            <label>Email</label>
                                                            <input class="form-control" type="email" name="email" autocomplete="off" />
                                                        </div>
                                                    </div>
                                                    <div class="custom-col">
                                                        <div class="form-group ">
                                                            <label>Password</label>
                                                            <input class="form-control" type="password" name="password" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="custom-col">
                                                        <div class="sign-in__remember-me ">
                                                            <div class="form-group__checkbox">
                                                                <label class="form-group__checkbox-label">
                                                                    <input type="checkbox" name="remember_me" id="block_21_remember_me">
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                                <label class="form-group__label-title" for="block_21_remember_me">Remember me</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="custom-col">
                                                        <div class="form-group ">
                                                            <div class="sign-in__forgot">
                                                                <a href="{{ url('auth/forgot') }}">Forgot password?</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="custom-col">
                                                        <div class="form-group d-flex component_button_submit ">
                                                            <button id="btn_login" class="btn btn-big-primary" type="submit">Sign in</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="custom-col">
                                                        <div class="form-group d-flex justify-content-center ">
                                                            <div class="block-signin__remember">
                                                                <p>Do not have an account?</p>
                                                                <a class="block-signin__link" href="{{ url('auth/register') }}">Sign up</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="block_8">
                    <div class="block-bg"></div>
                    <div class="container">
                        <div class="header-with-text ">
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-block__title">
                                        <h2 class="text-center">
                                            <span style="color: var(--color-id-249)">
                                                <span style="text-align: CENTER">Mengapa Harus {{ get_config('site_name') }}?</span>
                                            </span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-block__description">
                                        <p class="text-center">
                                            <span style="color: var(--color-id-251)">
                                                <span style="text-align: CENTER">Dapatkan lebih banyak followers, likes, dan views dengan harga terjangkau bersama {{ get_config('site_name') }} - Provider SMM panel terbaik dan murah.</span>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="block_22">
                    <div class="block-bg"></div>
                    <div class="container">
                        <div class="features-block-icons ">
                            <div class="row align-items-start justify-content-start">
                                <div class="col-lg-3 col-md-6 mb-4">
                                    <div class="card features-block__card h-100" style="color: var(--text-dark);border-color: var(--color-id-252);border-top-left-radius: 16px;border-bottom-left-radius: 16px;border-top-right-radius: 16px;          border-bottom-right-radius: 16px;             ">
                                        <div class="features-block__header">
                                            <div class="features-block__header-preview style-bg-primary-alpha-10 style-border-radius-default style-text-primary" style="margin-bottom: 10px;
                         height: 96px;                  font-size: 96px;      background: var(--color-id-258);      border-top-left-radius: 16px;      border-bottom-left-radius: 16px;      border-top-right-radius: 16px;      border-bottom-right-radius: 16px;                                 ">
                                                <span class="feature-block__icon fad fa-check-double" style="
        transform: rotate(0deg);
        color: var(--color-id-199);
        text-shadow: Array;
        border-radius: 0px;
        background: none;
        padding: 10px;
        "></span>
                                            </div>
                                            <div class="features-block__header-title" style="margin-bottom: 8px; padding-left: 0px; padding-right: 0px;">
                                                <p class="text-center">
                                                    <span style="color: var(--color-id-257)">
                                                        <strong style="font-weight: bold">Layanan Berkualitas</strong>
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="features-block__body">
                                            <div class="features-block__body-description" style="padding-left: 0px; padding-right: 0px;">
                                                <p class="text-center">
                                                    <span style="color: var(--color-id-253)">Anda akan menemukan hanya layanan berkualitas tinggi di smm panel kami.</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-4">
                                    <div class="card features-block__card h-100" style="
                      background: var(--color-id-203);          color: var(--text-dark);                  border-color: var(--color-id-252);      border-top-left-radius: 16px;          border-bottom-left-radius: 16px;          border-top-right-radius: 16px;          border-bottom-right-radius: 16px;             ">
                                        <div class="features-block__header">
                                            <div class="features-block__header-preview style-bg-primary-alpha-10 style-border-radius-default style-text-primary" style="margin-bottom: 10px;
                         height: 96px;                  font-size: 96px;      background: var(--color-id-258);      border-top-left-radius: 16px;      border-bottom-left-radius: 16px;      border-top-right-radius: 16px;      border-bottom-right-radius: 16px;                                 ">
                                                <span class="feature-block__icon fad fa-coins" style="
        transform: rotate(0deg);
        color: var(--color-id-199);
        text-shadow: Array;
        border-radius: 0px;
        background: none;
        padding: 10px;
        "></span>
                                            </div>
                                            <div class="features-block__header-title" style="margin-bottom: 8px; padding-left: 0px; padding-right: 0px;">
                                                <p class="text-center">
                                                    <span style="color: var(--color-id-257)">
                                                        <strong style="font-weight: bold">Pembayaran Otomatis</strong>
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="features-block__body">
                                            <div class="features-block__body-description" style="padding-left: 0px; padding-right: 0px;">
                                                <p class="text-center">
                                                    <span style="color: var(--color-id-253)">Tersedia berbagai metode pembayaran otomatis yang siap Anda gunakan.</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-4">
                                    <div class="card features-block__card h-100" style="
                      background: var(--color-id-203);          color: var(--text-dark);                  border-color: var(--color-id-252);      border-top-left-radius: 16px;          border-bottom-left-radius: 16px;          border-top-right-radius: 16px;          border-bottom-right-radius: 16px;             ">
                                        <div class="features-block__header">
                                            <div class="features-block__header-preview style-bg-primary-alpha-10 style-border-radius-default style-text-primary" style="margin-bottom: 10px;
                         height: 96px;                  font-size: 96px;      background: var(--color-id-258);      border-top-left-radius: 16px;      border-bottom-left-radius: 16px;      border-top-right-radius: 16px;      border-bottom-right-radius: 16px;                                 ">
                                                <span class="feature-block__icon fad fa-atom-alt" style="
        transform: rotate(0deg);
        color: var(--color-id-199);
        text-shadow: Array;
        border-radius: 0px;
        background: none;
        padding: 10px;
        "></span>
                                            </div>
                                            <div class="features-block__header-title" style="margin-bottom: 8px; padding-left: 0px; padding-right: 0px;">
                                                <p class="text-center">
                                                    <span style="color: var(--color-id-257)">
                                                        <strong style="font-weight: bold">Harga Termurah</strong>
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="features-block__body">
                                            <div class="features-block__body-description" style="padding-left: 0px; padding-right: 0px;">
                                                <p class="text-center">
                                                    <span style="color: var(--color-id-253)">Nikmati layanan SMM panel terbaik dengan harga termurah hanya di {{ get_config('site_name') }}.</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-4">
                                    <div class="card features-block__card h-100" style="
                      background: var(--color-id-203);          color: var(--text-dark);                      border-top-left-radius: 16px;          border-bottom-left-radius: 16px;          border-top-right-radius: 16px;          border-bottom-right-radius: 16px;             ">
                                        <div class="features-block__header">
                                            <div class="features-block__header-preview style-bg-primary-alpha-10 style-border-radius-default style-text-primary" style="margin-bottom: 10px;
                         height: 96px;                  font-size: 96px;      background: var(--color-id-258);      border-top-left-radius: 16px;      border-bottom-left-radius: 16px;      border-top-right-radius: 16px;      border-bottom-right-radius: 16px;                                 ">
                                                <span class="feature-block__icon fad fa-rocket-launch" style="
        transform: rotate(0deg);
        color: var(--color-id-199);
        text-shadow: Array;
        border-radius: 0px;
        background: none;
        padding: 10px;
        "></span>
                                            </div>
                                            <div class="features-block__header-title" style="margin-bottom: 8px; padding-left: 0px; padding-right: 0px;">
                                                <p class="text-center">
                                                    <span style="color: var(--color-id-257)">
                                                        <strong style="font-weight: bold">Proses Instant</strong>
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="features-block__body">
                                            <div class="features-block__body-description" style="padding-left: 0px; padding-right: 0px;">
                                                <p class="text-center">
                                                    <span style="color: var(--color-id-253)">Di {{ get_config('site_name') }}, semua pesanan masuk otomatis diproses secara instant.</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="block_5">
                    <div class="block-bg"></div>
                    <div class="container">
                        <div class="header-with-text ">
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-block__title">
                                        <h6 class="text-center">
                                            <span style="color: var(--color-id-210)">
                                                <span style="text-align: CENTER">
                                                    <strong style="font-weight: bold">Bagaimana {{ get_config('site_name') }} Bekerja</strong>
                                                </span>
                                            </span>
                                        </h6>
                                        <h2 class="text-center">
                                            <span style="color: var(--color-id-249)">
                                                <span style="text-align: CENTER">4 Langkah Mudah untuk Meningkatkan Popularitas Anda dengan {{ get_config('site_name') }}</span>
                                            </span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-block__description">
                                        <p class="text-center">
                                            <span style="color: var(--color-id-251)">Tingkatkan popularitas platform media sosial Anda dengan 4 langkah mudah di bawah ini.</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="block_24">
                    <div class="block-bg"></div>
                    <div class="container">
                        <div class="how-it-works ">
                            <div class="row how-it-works-row justify-content-start">
                                <div class="col-md-3 how-it-works-col">
                                    <div class="card how-it-works-card" style="
                 background: var(--color-id-203);          color: var(--text-dark); 																																																																																																																																																																																">
                                        <div class="how-it-works-arrow-top style-svg-g-primary">
                                            <svg width="125px" height="31px" viewBox="0 0 125 31" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                                <g id="Landing" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-942.000000, -1387.000000)" fill="#1E79E4" id="Group-10">
                                                        <g transform="translate(165.000000, 1368.000000)">
                                                            <path d="M889.516523,26.5080119 L891.910644,20.9496585 L902,32.9164837 L886.372927,33.807873 L888.723185,28.3469617 C871.347087,21.9210849 854.507984,19.7125409 838.195168,21.7129851 C818.169006,24.1687976 798.907256,32.9719131 780.398868,48.1424468 L779.638673,48.7694781 L778.869195,49.4081513 L777.591849,47.8691952 L778.361327,47.2305219 C797.38492,31.4407805 817.252224,22.2662407 837.951732,19.7278557 C854.622929,17.6834632 871.814783,19.9463129 889.516523,26.5080119 Z" id="Line3"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="how-it-works-arrow-bottom style-svg-g-primary">
                                            <svg width="125px" height="31px" viewBox="0 0 125 31" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                                <g id="Landing" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-657.000000, -1461.000000)" fill="#1E79E4" id="Group-10">
                                                        <g transform="translate(165.000000, 1368.000000)">
                                                            <path d="M493.869195,93.5918487 L494.638673,94.2305219 C513.37968,109.785715 532.894675,118.797561 553.195168,121.287015 C569.507984,123.287459 586.347087,121.078915 603.723185,114.653038 L601.372927,109.192127 L617,110.083516 L606.910644,122.050341 L604.516523,116.491988 C586.814783,123.053687 569.622929,125.316537 552.951732,123.272144 C532.528218,120.767604 512.914862,111.802694 494.12272,96.3975396 L493.361327,95.7694781 L492.591849,95.1308048 L493.869195,93.5918487 Z" id="Line2"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="d-flex justify-content-center how-it-works-preview">
                                            <div class="how-it-works-number style-box-shadow-default style-bg-light style-border-radius-50 style-card-number" style="
                              width: 50px; 															 height: 50px; 															 background: var(--color-id-199); 															 border-color: var(--color-id-199); 															 border-top-left-radius: 20px; 															 border-bottom-left-radius: 20px; 															 border-top-right-radius: 20px; 															 border-bottom-right-radius: 20px; 															 border-left-width: 2px; 															 border-right-width: 2px; 															 border-bottom-width: 2px; 															 border-top-width: 2px; 																														 border-style: solid; 															 font-size: 24px; 															 color: var(--color-id-203); "> 1 </div>
                                        </div>
                                        <div class="how-it-works-title" style="margin-bottom: 8px; padding-left: 0px; padding-right: 0x;">
                                            <p class="text-center">
                                                <span style="color: var(--color-id-257)">
                                                    <span style="letter-spacing: 0.5px">
                                                        <span style="text-transform: uppercase">
                                                            <span style="text-align: CENTER">
                                                                <strong style="font-weight: bold">Register</strong>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="how-it-works-description" style="padding-left: 0px; padding-right: 0x;">
                                            <p class="text-center">
                                                <span style="color: var(--color-id-253)">
                                                    <span style="text-align: CENTER">Mulailah dengan mendaftar gratis dan kemudian masuk ke akun Anda.</span>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 how-it-works-col">
                                    <div class="card how-it-works-card" style="
                        																																																																																																																																																																																">
                                        <div class="how-it-works-arrow-top style-svg-g-primary">
                                            <svg width="125px" height="31px" viewBox="0 0 125 31" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                                <g id="Landing" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-942.000000, -1387.000000)" fill="#1E79E4" id="Group-10">
                                                        <g transform="translate(165.000000, 1368.000000)">
                                                            <path d="M889.516523,26.5080119 L891.910644,20.9496585 L902,32.9164837 L886.372927,33.807873 L888.723185,28.3469617 C871.347087,21.9210849 854.507984,19.7125409 838.195168,21.7129851 C818.169006,24.1687976 798.907256,32.9719131 780.398868,48.1424468 L779.638673,48.7694781 L778.869195,49.4081513 L777.591849,47.8691952 L778.361327,47.2305219 C797.38492,31.4407805 817.252224,22.2662407 837.951732,19.7278557 C854.622929,17.6834632 871.814783,19.9463129 889.516523,26.5080119 Z" id="Line3"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="how-it-works-arrow-bottom style-svg-g-primary">
                                            <svg width="125px" height="31px" viewBox="0 0 125 31" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                                <g id="Landing" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-657.000000, -1461.000000)" fill="#1E79E4" id="Group-10">
                                                        <g transform="translate(165.000000, 1368.000000)">
                                                            <path d="M493.869195,93.5918487 L494.638673,94.2305219 C513.37968,109.785715 532.894675,118.797561 553.195168,121.287015 C569.507984,123.287459 586.347087,121.078915 603.723185,114.653038 L601.372927,109.192127 L617,110.083516 L606.910644,122.050341 L604.516523,116.491988 C586.814783,123.053687 569.622929,125.316537 552.951732,123.272144 C532.528218,120.767604 512.914862,111.802694 494.12272,96.3975396 L493.361327,95.7694781 L492.591849,95.1308048 L493.869195,93.5918487 Z" id="Line2"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="d-flex justify-content-center how-it-works-preview">
                                            <div class="how-it-works-number style-box-shadow-default style-bg-light style-border-radius-50 style-card-number" style="
                              width: 50px; 															 height: 50px; 															 background: var(--color-id-199); 															 border-color: var(--color-id-199); 															 border-top-left-radius: 20px; 															 border-bottom-left-radius: 20px; 															 border-top-right-radius: 20px; 															 border-bottom-right-radius: 20px; 															 border-left-width: 2px; 															 border-right-width: 2px; 															 border-bottom-width: 2px; 															 border-top-width: 2px; 																														 border-style: solid; 															 font-size: 24px; 															 color: var(--color-id-203); "> 2 </div>
                                        </div>
                                        <div class="how-it-works-title" style="margin-bottom: 8px; padding-left: 0px; padding-right: 0x;">
                                            <p class="text-center">
                                                <span style="color: var(--color-id-257)">
                                                    <span style="text-transform: uppercase">
                                                        <span style="letter-spacing: 0.5px">
                                                            <span style="text-align: CENTER">
                                                                <strong style="font-weight: bold">Tambah saldo</strong>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="how-it-works-description" style="padding-left: 0px; padding-right: 0x;">
                                            <p class="text-center">
                                                <span style="color: var(--color-id-253)">Tambahkan saldo menggunakan metode pembayaran yang Anda sukai.</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 how-it-works-col">
                                    <div class="card how-it-works-card" style="
                        																																																																																																																																																																																">
                                        <div class="how-it-works-arrow-top style-svg-g-primary">
                                            <svg width="125px" height="31px" viewBox="0 0 125 31" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                                <g id="Landing" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-942.000000, -1387.000000)" fill="#1E79E4" id="Group-10">
                                                        <g transform="translate(165.000000, 1368.000000)">
                                                            <path d="M889.516523,26.5080119 L891.910644,20.9496585 L902,32.9164837 L886.372927,33.807873 L888.723185,28.3469617 C871.347087,21.9210849 854.507984,19.7125409 838.195168,21.7129851 C818.169006,24.1687976 798.907256,32.9719131 780.398868,48.1424468 L779.638673,48.7694781 L778.869195,49.4081513 L777.591849,47.8691952 L778.361327,47.2305219 C797.38492,31.4407805 817.252224,22.2662407 837.951732,19.7278557 C854.622929,17.6834632 871.814783,19.9463129 889.516523,26.5080119 Z" id="Line3"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="how-it-works-arrow-bottom style-svg-g-primary">
                                            <svg width="125px" height="31px" viewBox="0 0 125 31" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                                <g id="Landing" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-657.000000, -1461.000000)" fill="#1E79E4" id="Group-10">
                                                        <g transform="translate(165.000000, 1368.000000)">
                                                            <path d="M493.869195,93.5918487 L494.638673,94.2305219 C513.37968,109.785715 532.894675,118.797561 553.195168,121.287015 C569.507984,123.287459 586.347087,121.078915 603.723185,114.653038 L601.372927,109.192127 L617,110.083516 L606.910644,122.050341 L604.516523,116.491988 C586.814783,123.053687 569.622929,125.316537 552.951732,123.272144 C532.528218,120.767604 512.914862,111.802694 494.12272,96.3975396 L493.361327,95.7694781 L492.591849,95.1308048 L493.869195,93.5918487 Z" id="Line2"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="d-flex justify-content-center how-it-works-preview">
                                            <div class="how-it-works-number style-box-shadow-default style-bg-light style-border-radius-50 style-card-number" style="
                              width: 50px; 															 height: 50px; 															 background: var(--color-id-199); 															 border-color: var(--color-id-199); 															 border-top-left-radius: 20px; 															 border-bottom-left-radius: 20px; 															 border-top-right-radius: 20px; 															 border-bottom-right-radius: 20px; 															 border-left-width: 2px; 															 border-right-width: 2px; 															 border-bottom-width: 2px; 															 border-top-width: 2px; 																														 border-style: solid; 															 font-size: 24px; 															 color: var(--color-id-203); "> 3 </div>
                                        </div>
                                        <div class="how-it-works-title" style="margin-bottom: 8px; padding-left: 0px; padding-right: 0x;">
                                            <p class="text-center">
                                                <span style="color: var(--color-id-257)">
                                                    <span style="text-transform: uppercase">
                                                        <span style="letter-spacing: 0.5px">
                                                            <strong style="font-weight: bold">Pilih layanan</strong>
                                                        </span>
                                                    </span>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="how-it-works-description" style="padding-left: 0px; padding-right: 0x;">
                                            <p class="text-center">
                                                <span style="color: var(--color-id-253)">Pilih layanan SMM yang Anda inginkan dan buat pesanan dengan mudah.</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 how-it-works-col">
                                    <div class="card how-it-works-card" style="
                        																																																																																																																																																																																">
                                        <div class="how-it-works-arrow-top style-svg-g-primary">
                                            <svg width="125px" height="31px" viewBox="0 0 125 31" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                                <g id="Landing" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-942.000000, -1387.000000)" fill="#1E79E4" id="Group-10">
                                                        <g transform="translate(165.000000, 1368.000000)">
                                                            <path d="M889.516523,26.5080119 L891.910644,20.9496585 L902,32.9164837 L886.372927,33.807873 L888.723185,28.3469617 C871.347087,21.9210849 854.507984,19.7125409 838.195168,21.7129851 C818.169006,24.1687976 798.907256,32.9719131 780.398868,48.1424468 L779.638673,48.7694781 L778.869195,49.4081513 L777.591849,47.8691952 L778.361327,47.2305219 C797.38492,31.4407805 817.252224,22.2662407 837.951732,19.7278557 C854.622929,17.6834632 871.814783,19.9463129 889.516523,26.5080119 Z" id="Line3"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="how-it-works-arrow-bottom style-svg-g-primary">
                                            <svg width="125px" height="31px" viewBox="0 0 125 31" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                                <g id="Landing" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-657.000000, -1461.000000)" fill="#1E79E4" id="Group-10">
                                                        <g transform="translate(165.000000, 1368.000000)">
                                                            <path d="M493.869195,93.5918487 L494.638673,94.2305219 C513.37968,109.785715 532.894675,118.797561 553.195168,121.287015 C569.507984,123.287459 586.347087,121.078915 603.723185,114.653038 L601.372927,109.192127 L617,110.083516 L606.910644,122.050341 L604.516523,116.491988 C586.814783,123.053687 569.622929,125.316537 552.951732,123.272144 C532.528218,120.767604 512.914862,111.802694 494.12272,96.3975396 L493.361327,95.7694781 L492.591849,95.1308048 L493.869195,93.5918487 Z" id="Line2"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="d-flex justify-content-center how-it-works-preview">
                                            <div class="how-it-works-number style-box-shadow-default style-bg-light style-border-radius-50 style-card-number" style="
                              width: 50px; 															 height: 50px; 															 background: var(--color-id-199); 															 border-color: var(--color-id-199); 															 border-top-left-radius: 20px; 															 border-bottom-left-radius: 20px; 															 border-top-right-radius: 20px; 															 border-bottom-right-radius: 20px; 															 border-left-width: 2px; 															 border-right-width: 2px; 															 border-bottom-width: 2px; 															 border-top-width: 2px; 																														 border-style: solid; 															 font-size: 24px; 															 color: var(--color-id-203); "> 4 </div>
                                        </div>
                                        <div class="how-it-works-title" style="margin-bottom: 8px; padding-left: 0px; padding-right: 0x;">
                                            <p class="text-center">
                                                <span style="color: var(--color-id-257)">
                                                    <span style="text-transform: uppercase">
                                                        <span style="letter-spacing: 0.5px">
                                                            <strong style="font-weight: bold">Nikmati hasilnya</strong>
                                                        </span>
                                                    </span>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="how-it-works-description" style="padding-left: 0px; padding-right: 0x;">
                                            <p class="text-center">
                                                <span style="color: var(--color-id-253)">Semua pesanan otomatis langsung diproses dan nikmati hasilnya secara instan.</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="block_186">
                    <div class="block-bg"></div>
                    <div class="container">
                        <div class="header-with-text ">
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-block__title">
                                        <h6 class="text-center">
                                            <span style="color: var(--color-id-210)">
                                                <span style="text-align: CENTER">
                                                    <strong style="font-weight: bold">SMM Panel Terbaik Indonesia</strong>
                                                </span>
                                            </span>
                                        </h6>
                                        <h2 class="text-center">
                                            <span style="color: var(--color-id-249)">
                                                <span style="text-align: CENTER">Mengapa {{ get_config('site_name') }} SMM Panel Terbaik di Indonesia?</span>
                                            </span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-block__description">
                                        <p class="text-center">
                                            <span style="color: var(--color-id-251)">Di {{ get_config('site_name') }}, kami bangga dapat menyediakan SMM panel terbaik di Indonesia. Platform inovatif dan mudah digunakan oleh semua kalangan kami dirancang untuk membantu Anda meningkatkan interaksi di media sosial dan menjangkau lebih banyak orang dengan mudah. Apakah Anda ingin meningkatkan followers Instagram, meningkatkan views di Youtube, atau memperluas audiens TikTok, SMM panel kami memiliki semua yang Anda butuhkan untuk sukses di platform digital.</span>
                                        </p>
                                        <p>
                                            <br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="block_187">
                    <div class="block-bg"></div>
                    <div class="container">
                        <div class="features-block-images ">
                            <div class="row align-items-start justify-content-center">
                                <div class="col-lg-3 col-md-6 mb-4">
                                    <div class="card features-block__card h-100" style="
                      background: var(--color-id-266);                                  color: var(--text-dark);         ">
                                        <div class="features-block__header">
                                            <div class="features-block__header-image" style="margin-bottom: 10px;">
                                                <img src="{{ asset('global') }}/jmi3rw/fg14rj8p2mqtz5jk.png" alt="" title="" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="features-block__header-title" style="margin-bottom: 10px; padding-left: 0px; padding-right: 0px;">
                                            <h5 class="text-center">
                                                <span style="color: var(--color-id-236)">
                                                    <span style="text-align: CENTER">
                                                        <strong style="font-weight: bold">Hasil Instant</strong>
                                                    </span>
                                                </span>
                                            </h5>
                                        </div>
                                        <div class="features-block__body">
                                            <div class="features-block__body-description" style="padding-left: 0px; padding-right: 0px;">
                                                <p class="text-center">
                                                    <span style="color: var(--color-id-264)">
                                                        <span style="text-align: CENTER">Anda tidak perlu menunggu waktu lama untuk mendapatkan hasil followers, likes atau views. Semua pesanan yang masuk akan langsung otomatis diproses oleh sistem kami selama 24 jam nonstop.</span>
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-4">
                                    <div class="card features-block__card h-100" style="
                      background: var(--color-id-267);                                  color: var(--text-dark);         ">
                                        <div class="features-block__header">
                                            <div class="features-block__header-image" style="margin-bottom: 10px;">
                                                <img src="{{ asset('global') }}/jmi3rw/97gh9wsueorbfhaj.png" alt="" title="" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="features-block__header-title" style="margin-bottom: 10px; padding-left: 0px; padding-right: 0px;">
                                            <h5 class="text-center">
                                                <span style="color: var(--color-id-236)">
                                                    <span style="text-align: CENTER">
                                                        <strong style="font-weight: bold">Jaminan Kepuasan</strong>
                                                    </span>
                                                </span>
                                            </h5>
                                        </div>
                                        <div class="features-block__body">
                                            <div class="features-block__body-description" style="padding-left: 0px; padding-right: 0px;">
                                                <p class="text-center">
                                                    <span style="color: var(--color-id-265)">
                                                        <span style="text-align: CENTER">Kami ingin Anda merasa nyaman dan percaya diri melalui seluruh proses order di {{ get_config('site_name') }}. Kami menawarkan pengembalian dana penuh untuk setiap pesanan yang tidak diselesaikan.</span>
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-4">
                                    <div class="card features-block__card h-100" style="
                      background: var(--color-id-268);                                  color: var(--text-white);         ">
                                        <div class="features-block__header">
                                            <div class="features-block__header-image" style="margin-bottom: 10px;">
                                                <img src="{{ asset('global') }}/jmi3rw/gu46s8m1gwprcd3g.png" alt="" title="" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="features-block__header-title" style="margin-bottom: 10px; padding-left: 0px; padding-right: 0px;">
                                            <h5 class="text-center">
                                                <span style="color: var(--color-id-203)">
                                                    <span style="text-align: CENTER">
                                                        <strong style="font-weight: bold">Staf Berpengalaman</strong>
                                                    </span>
                                                </span>
                                            </h5>
                                        </div>
                                        <div class="features-block__body">
                                            <div class="features-block__body-description" style="padding-left: 0px; padding-right: 0px;">
                                                <p class="text-center">
                                                    <span style="color: var(--color-id-271)">
                                                        <span style="text-align: CENTER">Kami memiliki staf dukungan pelanggan yang berpengalaman dan tersedia 24/7 untuk menjawab semua pertanyaan Anda dan memastikan pengalaman order Anda semudah mungkin.</span>
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="block_89">
                    <div class="block-bg"></div>
                    <div class="container">
                        <div class="text-block-with-button ">
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-block-with-button__description">
                                        <p class="text-center">
                                            <span style="color: var(--color-id-261)">
                                                <span style="font-size: 16px">Daftar Gratis Sekarang dan Nikmati Layanan SMM Panel Terbaik!</span>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-block-with-button__button component_button_link">
                                        <div class="">
                                            <a class="btn btn-big-primary" target="_self" href="{{ url('auth/register') }}">
                                                <p>Daftar Gratis</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="block_218">
                    <div class="block-bg"></div>
                    <div class="container">
                        <div class="header-with-text ">
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-block__title">
                                        <h6 class="text-center">
                                            <span style="color: var(--color-id-210)">
                                                <span style="text-align: CENTER">
                                                    <strong style="font-weight: bold">SMM Panel Provider Termurah</strong>
                                                </span>
                                            </span>
                                        </h6>
                                        <h2 class="text-center">
                                            <span style="color: var(--color-id-249)">Beli Layanan SMM Panel Termurah dan Terpercaya untuk Reseller</span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-block__description">
                                        <p class="text-center">
                                            <span style="color: var(--color-id-251)">Dapatkan followers, likes, views, dan layanan lainnya untuk platform seperti Instagram, Youtube, Tiktok, dan Facebook dengan harga terbaik. Nikmati layanan SMM Panel terpercaya untuk meningkatkan popularitas media sosial Anda hari ini!</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="block_85">
                    <div class="block-bg"></div>
                    <div class="container">
                        <div class="text-block-with-image ">
                            <div class="row">
                                <div class="col">
                                    <div class="d-md-flex align-items-start">
                                        <div class="text-block__image">
                                            <img src="{{ asset('global') }}/jmi3rw/pbhcroannplub639.png" alt="Layanan SMM Panel Termurah dan Terpercaya untuk Reseller" title="Layanan SMM Panel Termurah dan Terpercaya untuk Reseller" class="img-fluid">
                                        </div>
                                        <div class="text-block__description">
                                            <h4>
                                                <span style="color: var(--color-id-249)">
                                                    <em style="font-style: italic">Solusi Terjangkau dan Efektif</em>
                                                </span>
                                            </h4>
                                            <p>
                                                <span style="color: var(--color-id-251)">{{ get_config('site_name') }} menawarkan layanan SMM panel terbaik dan termurah di pasaran, yang dapat dinikmati oleh bisnis dan individu dari semua kalangan. Dengan solusi layanan kami yang terjangkau, Anda dapat mencapai sasaran pemasaran digital tanpa menguras kantong.</span>
                                            </p>
                                            <p>
                                                <br>
                                            </p>
                                            <h4>
                                                <span style="color: var(--color-id-249)">
                                                    <em style="font-style: italic">User-Friendly Platform</em>
                                                </span>
                                            </h4>
                                            <p>
                                                <span style="color: var(--color-id-251)">{{ get_config('site_name') }} didesain dengan mempertimbangkan kesederhanaan untuk memudahkan Anda mengelola dan melacak hasil pesanan. Apakah Anda seorang reseller berpengalaman atau pemula, Anda akan menemukan kemudahan dalam menggunakan SMM panel kami.</span>
                                            </p>
                                            <p>
                                                <br>
                                            </p>
                                            <h4>
                                                <span style="color: var(--color-id-249)">
                                                    <em style="font-style: italic">Hasil Terbukti</em>
                                                </span>
                                            </h4>
                                            <p>
                                                <span style="color: var(--color-id-251)">{{ get_config('site_name') }} telah membantu banyak akun bisnis dan individu mencapai tujuan pemasaran media sosial dan meningkatkan visibilitas online mereka. Dengan {{ get_config('site_name') }}, Anda dapat percaya bahwa Anda berada di tangan yang tepat dan akan melihat hasil nyata dari menggunakan platform SMM panel kami.</span>
                                            </p>
                                            <p>
                                                <br>
                                            </p>
                                            <h4>
                                                <span style="color: var(--color-id-249)">
                                                    <em style="font-style: italic">Layanan Lengkap</em>
                                                </span>
                                            </h4>
                                            <p>
                                                <span style="color: var(--color-id-251)">{{ get_config('site_name') }} memberikan solusi untuk Instagram, Youtube, Facebook, dan TikTok, memberikan Anda solusi lengkap dan komprehensif untuk semua kebutuhan </span>
                                                <span style="color: var(--color-id-251)">
                                                    <em style="font-style: italic">social media marketing</em>
                                                </span>
                                                <span style="color: var(--color-id-251)"> Anda. Dengan platform kami, Anda dapat menjangkau lebih banyak orang, meningkatkan interaksi, dan meningkatkan kepercayaan calon konsumen serta kredibilitas brand.</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="block_90">
                    <div class="block-bg"></div>
                    <div class="container">
                        <div class="header-with-text ">
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-block__title">
                                        <h6 class="text-center">
                                            <span style="color: var(--color-id-210)">
                                                <strong style="font-weight: bold">Social Media Engagement</strong>
                                            </span>
                                        </h6>
                                        <h2 class="text-center">
                                            <span style="color: var(--color-id-249)">Tingkatkan Visibilitas Media Sosial Anda dalam Hitungan Menit!</span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-block__description">
                                        <p class="text-center">
                                            <span style="color: var(--color-id-251)">
                                                <span style="text-align: CENTER">Dengan menggunakan layanan SMM panel kami, Anda dapat dengan mudah dan cepat meningkatkan popularitas dan visibilitas akun media sosial Anda, seperti Instagram, TikTok, Youtube, Twitter, Facebook, dan platform media sosial lainnya melalui layanan peningkatan interaksi seperti jasa tambah followers, likes, views, subscribers, komentar, dan insight sehingga dapat menarik perhatian calon pelanggan Anda.</span>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="block_86">
                    <div class="block-bg"></div>
                    <div class="container">
                        <div class="text-block-2-columns-card ">
                            <div class="row">
                                <div class="col-lg-6 text-block-2-columns-col">
                                    <div class="component_card_1">
                                        <div class="card">
                                            <div class="text-block__description">
                                                <h3>
                                                    <span style="color: var(--color-id-200)">Pengiriman Cepat</span>
                                                </h3>
                                                <p>
                                                    <span style="color: var(--color-id-253)">Dengan dukungan teknologi yang serba otomatis, proses pengiriman followers, likes &amp; views akan jauh lebih cepat hanya dalam hitungan menit.</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 text-block-2-columns-col">
                                    <div class="component_card_2">
                                        <div class="card">
                                            <div class="text-block__description">
                                                <h3>
                                                    <span style="color: var(--color-id-200)">High Quality</span>
                                                </h3>
                                                <p>
                                                    <span style="color: var(--color-id-253)">Nikmati layanan berkualitas terbaik dan harga termurah serta bergaransi hingga satu tahun dengan SMM Panel {{ get_config('site_name') }}.</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="block_92">
                    <div class="block-bg"></div>
                    <div class="container">
                        <div class="text-block-with-card ">
                            <div class="row">
                                <div class="col-12">
                                    <div class="component_card_1">
                                        <div class="card">
                                            <div class="text-block__description">
                                                <h3 class="text-center">
                                                    <span style="color: var(--color-id-200)">Tanpa Password</span>
                                                </h3>
                                                <p class="text-center">
                                                    <span style="color: var(--color-id-253)">
                                                        <span style="text-align: CENTER">Semua layanan SMM di {{ get_config('site_name') }} menjamin keamanan data akun Anda. 100% Aman tanpa password dan tanpa menambah following pada akun Anda.</span>
                                                    </span>
                                                </p>
                                                <p class="text-center">
                                                    <span style="color: var(--color-id-253)">Kami tidak pernah meminta informasi sensitif seperti kata sandi atau informasi aman lainnya untuk menambah followers atau likes ke akun Anda. Cukup berikan kami username atau link postingan Anda, dan kami akan segera memulai mengirim pesanan Anda.</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="block_93">
                    <div class="block-bg"></div>
                    <div class="container">
                        <div class="totals ">
                            <div class="row align-items-start justify-content-start">
                                <div class="col-lg-4 col-md-6 mb-2 mt-2">
                                    <div class="card h-100" style="
                background: var(--color-id-199);                                  color: var(--text-white);                          padding-top: 24px;                                  padding-bottom: 24px;                          border-top-left-radius: 16px;                                  border-bottom-left-radius: 16px;                                  border-top-right-radius: 16px;                                  border-bottom-right-radius: 16px;                  box-shadow: 0px 14px 25px 0px var(--color-id-205);                                 ">
                                        <div class="totals-block__card">
                                            <div class="totals-block__card-left">
                                                <div class="totals-block__icon-preview style-bg-primary-alpha-10 style-border-radius-default style-text-primary" style="
                         background: var(--color-id-262);      border-top-left-radius: 18px;      border-bottom-left-radius: 18px;      border-top-right-radius: 18px;      border-bottom-right-radius: 18px;                                 ">
                                                    <span class="totals-block__icon style-text-primary fad fa-layer-plus" style="
                                font-size: 38px;
                                transform: rotate(0deg);
                                color: var(--color-id-203);
                                text-shadow: Array;
                                border-radius: 0px;
                                "></span>
                                                </div>
                                            </div>
                                            <div class="totals-block__card-right">
                                                <style>
                                                    #block_93 .totals-block__count a {
                                                        color: var(--color-id-203) !important;
                                                    }
                                                </style>
                                                <div class="totals-block__count">
                                                    <h2 class="totals-block__count-value style-text-primary" style=" color: var(--color-id-203); "> {{ $serviceCounts }} </h2>
                                                </div>
                                                <div class="totals-block__card-name">
                                                    <p>
                                                        <span style="color: var(--color-id-203)">Total services</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-2 mt-2">
                                    <div class="card h-100" style="
                background: var(--color-id-199);                                  color: var(--text-white);                          padding-top: 24px;                                  padding-bottom: 24px;                          border-top-left-radius: 16px;                                  border-bottom-left-radius: 16px;                                  border-top-right-radius: 16px;                                  border-bottom-right-radius: 16px;                  box-shadow: 0px 14px 25px 0px var(--color-id-205);                                 ">
                                        <div class="totals-block__card">
                                            <div class="totals-block__card-left">
                                                <div class="totals-block__icon-preview style-bg-primary-alpha-10 style-border-radius-default style-text-primary" style="
                         background: var(--color-id-262);      border-top-left-radius: 18px;      border-bottom-left-radius: 18px;      border-top-right-radius: 18px;      border-bottom-right-radius: 18px;                                 ">
                                                    <span class="totals-block__icon style-text-primary fad fa-tasks" style="
                                font-size: 38px;
                                transform: rotate(0deg);
                                color: var(--color-id-203);
                                text-shadow: Array;
                                border-radius: 0px;
                                "></span>
                                                </div>
                                            </div>
                                            <div class="totals-block__card-right">
                                                <style>
                                                    #block_93 .totals-block__count a {
                                                        color: var(--color-id-203) !important;
                                                    }
                                                </style>
                                                <div class="totals-block__count">
                                                    <h2 class="totals-block__count-value style-text-primary" style=" color: var(--color-id-203); "> {{ $orderCounts*1229 }} </h2>
                                                </div>
                                                <div class="totals-block__card-name">
                                                    <p>
                                                        <span style="color: var(--color-id-203)">Total orders</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-2 mt-2">
                                    <div class="card h-100" style="
                background: var(--color-id-199);                                  color: var(--text-white);                          padding-top: 24px;                                  padding-bottom: 24px;                          border-top-left-radius: 16px;                                  border-bottom-left-radius: 16px;                                  border-top-right-radius: 16px;                                  border-bottom-right-radius: 16px;                  box-shadow: 0px 14px 25px 0px var(--color-id-205);                                 ">
                                        <div class="totals-block__card">
                                            <div class="totals-block__card-left">
                                                <div class="totals-block__icon-preview style-bg-primary-alpha-10 style-border-radius-default style-text-primary" style="
                         background: var(--color-id-262);      border-top-left-radius: 18px;      border-bottom-left-radius: 18px;      border-top-right-radius: 18px;      border-bottom-right-radius: 18px;                                 ">
                                                    <span class="totals-block__icon style-text-primary fad fa-users" style="
                                font-size: 38px;
                                transform: rotate(0deg);
                                color: var(--color-id-203);
                                text-shadow: Array;
                                border-radius: 0px;
                                "></span>
                                                </div>
                                            </div>
                                            <div class="totals-block__card-right">
                                                <style>
                                                    #block_93 .totals-block__count a {
                                                        color: var(--color-id-203) !important;
                                                    }
                                                </style>
                                                <div class="totals-block__count">
                                                    <h2 class="totals-block__count-value style-text-primary" style=" color: var(--color-id-203); "> {{ $userCounts * 508 }} </h2>
                                                </div>
                                                <div class="totals-block__card-name">
                                                    <p>
                                                        <span style="color: var(--color-id-203)">Total users</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="block_1">
                    <div class="block-bg"></div>
                    <div class="container">
                        <div class="header-with-text ">
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-block__title">
                                        <h2 class="text-center">
                                            <span style="color: var(--color-id-249)">
                                                <span style="text-align: CENTER">Testimoni Pelanggan Kami</span>
                                            </span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-block__description">
                                        <p class="text-center">
                                            <span style="color: var(--color-id-251)">
                                                <span style="text-align: CENTER">Di {{ get_config('site_name') }}, kami bangga dengan pelayanan yang luar biasa dan harga yang terjangkau. Jangan hanya percaya kata-kata kami - lihat apa yang pelanggan katakan tentang smm panel kami di bawah ini.</span>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="block_34">
                    <div class="block-bg"></div>
                    <div class="container">
                        <div class="reviews-slider ">
                            <div class="reviews-slider">
                                <div data-slider="1" data-slider-options="{'dots':true,'infinite':true,'speed':500,'autoplay':true,'autoplaySpeed':5000,'slidesToShow':2,'slidesToScroll':1,'responsive':[{'breakpoint':991,'settings':{'slidesToShow':1,'slidesToScroll':1}}],'rtl':false}">
                                    <div class="reviews-slider__slide">
                                        <div class="card" style="
                     background: var(--color-id-203);                                  color: var(--text-dark);          border-top-left-radius: 16px;                                  border-bottom-left-radius: 16px;                                  border-top-right-radius: 16px;                                  border-bottom-right-radius: 16px;                  box-shadow: 0px 4px 6px 0px var(--color-id-205);                                  border-style: none; ">
                                            <div class="reviews-slider__slide-photo" style="margin-bottom: 16px; justify-content: flex-start;">
                                                <div class="reviews-slider__slide-avatar" style="background-image: url(img/no_image.png);"></div>
                                            </div>
                                            <div class="reviews-slider__slide-name" style="padding-left: 0px; padding-right: 0px; margin-bottom: 10px;">
                                                <p>
                                                    <span style="color: var(--color-id-257)">
                                                        <strong style="font-weight: bold">Mona</strong>
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="reviews-slider__slide-description" style="padding-left: 0px; padding-right: 0px;">
                                                <p>
                                                    <span style="color: var(--color-id-253)">Experience the best social media marketing with {{ get_config('site_name') }}. I've been using their services for a few months and it's been fantastic. The best decision for my online presence.</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reviews-slider__slide">
                                        <div class="card" style="
                         border-top-left-radius: 16px;                                  border-bottom-left-radius: 16px;                                  border-top-right-radius: 16px;                                  border-bottom-right-radius: 16px;                  box-shadow: 0px 4px 6px 0px var(--color-id-205);                                 ">
                                            <div class="reviews-slider__slide-photo" style="margin-bottom: 16px; justify-content: flex-start;">
                                                <div class="reviews-slider__slide-avatar" style="background-image: url(img/no_image.png);"></div>
                                            </div>
                                            <div class="reviews-slider__slide-name" style="padding-left: 0px; padding-right: 0px; margin-bottom: 8px;">
                                                <p>
                                                    <span style="color: var(--color-id-257)">
                                                        <strong style="font-weight: bold">Bobby Fernando</strong>
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="reviews-slider__slide-description" style="padding-left: 0px; padding-right: 0px;">
                                                <p>
                                                    <span style="color: var(--color-id-253)">Thank you {{ get_config('site_name') }}, hasil likes &amp; jasa viewnya sangat memuaskan! Kami sangat senang bisa mengetahui dan bekerjasama dengan smm panel {{ get_config('site_name') }}.</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reviews-slider__slide">
                                        <div class="card" style="
                         border-top-left-radius: 16px;                                  border-bottom-left-radius: 16px;                                  border-top-right-radius: 16px;                                  border-bottom-right-radius: 16px;                  box-shadow: 0px 4px 6px 0px var(--color-id-205);                                 ">
                                            <div class="reviews-slider__slide-photo" style="margin-bottom: 10px; justify-content: flex-start;">
                                                <div class="reviews-slider__slide-avatar" style="background-image: url(img/no_image.png);"></div>
                                            </div>
                                            <div class="reviews-slider__slide-name" style="padding-left: 0px; padding-right: 0px; margin-bottom: 8px;">
                                                <p>
                                                    <span style="color: var(--color-id-257)">
                                                        <strong style="font-weight: bold">Reza Purnama</strong>
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="reviews-slider__slide-description" style="padding-left: 0px; padding-right: 0px;">
                                                <p>
                                                    <span style="color: var(--color-id-253)">Dengan bantuan website smm panel {{ get_config('site_name') }} kami bisa lebih banyak menjangkau customer, selain itu juga trust atau kepercayaan dari customer juga akan meningkat.</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="block_36">
                    <div class="block-bg"></div>
                    <div class="container">
                        <div class="header-with-text ">
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-block__title">
                                        <h2 class="text-center">
                                            <span style="color: var(--color-id-249)">
                                                <span style="text-align: CENTER">Frequently Asked Questions</span>
                                            </span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-block__description">
                                        <p class="text-center">
                                            <span style="color: var(--color-id-251)">Berikut ini adalah pertanyaan yang sering diajukan oleh pelanggan kami seputar SMM panel.</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="block_13">
                    <div class="block-bg"></div>
                    <div class="container">
                        <div class="faq ">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="faq-block__card">
                                        <div class="card" style="
					 background: var(--color-id-254);color: var(--text-dark);border-color: var(--color-id-255);  padding-top: 16px;  padding-bottom: 16px;  border-top-left-radius: 16px;  border-bottom-left-radius: 16px;  border-top-right-radius: 16px;  border-bottom-right-radius: 16px; ">
                                            <div class="faq-block__header collapsed" data-toggle="collapse" data-target="#faq-block-13-1" aria-expanded="false" aria-controls="#faq-block-13-1">
                                                <div class="faq-block__header-title">
                                                    <h4>
                                                        <span style="font-size: 17px">
                                                            <span style="color: var(--color-id-200)">Apa itu SMM Panel?</span>
                                                        </span>
                                                    </h4>
                                                </div>
                                                <div class="faq-block__header-icon">
                                                    <div class="style-text-dark faq-block__icon" style="color: var(--color-id-210);"></div>
                                                </div>
                                            </div>
                                            <div class="faq-block__body collapse" id="faq-block-13-1">
                                                <div class="faq-block__body-description" style="padding-top: 8px">
                                                    <p>
                                                        <span style="color: var(--color-id-253)">SMM Panel adalah platform yang menyediakan layanan social media marketing untuk berbagai platform media sosial populer seperti Instagram, TikTok, Facebook, dan YouTube. Layanan yang ditawarkan oleh SMM panel biasanya mencakup likes, followers, views, dan layanan peningkatan interaksi lainnya. Tujuan SMM panel adalah untuk membantu bisnis dan individu meningkatkan visibilitas online dan mencapai tujuan pemasaran media sosial mereka dengan menyediakan layanan pemasaran media sosial berkualitas tinggi dan andal dengan harga terjangkau. Dengan antarmuka yang mudah digunakan, teknologi yang modern, dan dukungan dari tim yang berpengalaman, SMM panel adalah alat yang tepat bagi siapa saja yang ingin meningkatkan visibilitas online mereka dan mencapai tujuan pemasaran mereka di dunia digital yang serba cepat dan sangat kompetitif saat ini.</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="faq-block__card">
                                        <div class="card" style="
					 background: var(--color-id-254);color: var(--text-dark);border-color: var(--color-id-255);  padding-top: 16px;  padding-bottom: 16px;  border-top-left-radius: 16px;  border-bottom-left-radius: 16px;  border-top-right-radius: 16px;  border-bottom-right-radius: 16px; ">
                                            <div class="faq-block__header collapsed" data-toggle="collapse" data-target="#faq-block-13-2" aria-expanded="false" aria-controls="#faq-block-13-2">
                                                <div class="faq-block__header-title">
                                                    <h4>
                                                        <span style="font-size: 17px">
                                                            <span style="color: var(--color-id-200)">Apa itu {{ get_config('site_name') }}?</span>
                                                        </span>
                                                    </h4>
                                                </div>
                                                <div class="faq-block__header-icon">
                                                    <div class="style-text-dark faq-block__icon" style="color: var(--color-id-210);"></div>
                                                </div>
                                            </div>
                                            <div class="faq-block__body collapse" id="faq-block-13-2">
                                                <div class="faq-block__body-description" style="padding-top: 8px">
                                                    <p>
                                                        <span style="color: var(--color-id-253)">{{ get_config('site_name') }} adalah penyedia layanan social media marketing (</span>
                                                        <span style="color: var(--color-id-253)">
                                                            <em style="font-style: italic">
                                                                <strong style="font-weight: bold">SMM Panel</strong>
                                                            </em>
                                                        </span>
                                                        <span style="color: var(--color-id-253)">) untuk berbagai platform media sosial populer seperti Instagram, TikTok, Facebook, dan YouTube. Kami menawarkan berbagai layanan untuk membantu bisnis dan individu meningkatkan visibilitas online dan mencapai tujuan pemasaran media sosial mereka. Layanan kami mencakup likes, followers, views, dan masih banyak lagi, semuanya kami sediakan dengan harga kompetitif dan dengan komitmen terhadap kualitas dan kecepatan. Dengan antarmuka yang mudah digunakan, teknologi canggih, dan dukungan andal, {{ get_config('site_name') }} memudahkan Anda untuk meningkatkan visibilitas online dan mencapai tujuan pemasaran Anda. Apakah Anda seorang bisnis yang ingin meningkatkan jangkauan brand Anda atau individu yang ingin mengembangkan followers pribadi Anda, SMM Panel {{ get_config('site_name') }} memiliki solusi yang tepat untuk membantu Anda sukses di dunia digital yang serba cepat dan sangat kompetitif saat ini.</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="faq-block__card">
                                        <div class="card" style="
					 background: var(--color-id-254);color: var(--text-dark);border-color: var(--color-id-255);  padding-top: 16px;  padding-bottom: 16px;  border-top-left-radius: 16px;  border-bottom-left-radius: 16px;  border-top-right-radius: 16px;  border-bottom-right-radius: 16px; ">
                                            <div class="faq-block__header collapsed" data-toggle="collapse" data-target="#faq-block-13-3" aria-expanded="false" aria-controls="#faq-block-13-3">
                                                <div class="faq-block__header-title">
                                                    <h4>
                                                        <span style="font-size: 17px">
                                                            <span style="color: var(--color-id-200)">Apa SMM Panel terbaik di Indonesia?</span>
                                                        </span>
                                                    </h4>
                                                </div>
                                                <div class="faq-block__header-icon">
                                                    <div class="style-text-dark faq-block__icon" style="color: var(--color-id-210);"></div>
                                                </div>
                                            </div>
                                            <div class="faq-block__body collapse" id="faq-block-13-3">
                                                <div class="faq-block__body-description" style="padding-top: 8px">
                                                    <p>
                                                        <span style="color: var(--color-id-253)">Subjektif untuk menentukan SMM panel terbaik di Indonesia karena tergantung pada preferensi dan pandangan pribadi seseorang. Namun, {{ get_config('site_name') }} dianggap oleh banyak orang sebagai salah satu SMM panel terbaik, yang menawarkan rangkaian lengkap layanan pemasaran media sosial, harga bersaing, dan dukungan yang andal. Dengan antarmuka yang ramah pengguna dan teknologi yang canggih, kami berusaha untuk memberikan pengalaman terbaik bagi pelanggan kami. Baik Anda ingin meningkatkan followers, meningkatkan jumlah views, atau sekadar mendapatkan lebih banyak likes di postingan Anda, {{ get_config('site_name') }} memiliki solusi yang tepat untuk membantu Anda mencapai tujuan pemasaran online Anda. Kami berkomitmen untuk menyediakan pelanggan kami dengan layanan dan dukungan berkualitas tinggi, menjadikan kami pilihan utama untuk bisnis dan individu yang ingin meningkatkan visibiltas online mereka.</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="faq-block__card">
                                        <div class="card" style="
					 background: var(--color-id-254);color: var(--text-dark);border-color: var(--color-id-255);  padding-top: 16px;  padding-bottom: 16px;  border-top-left-radius: 16px;  border-bottom-left-radius: 16px;  border-top-right-radius: 16px;  border-bottom-right-radius: 16px; ">
                                            <div class="faq-block__header collapsed" data-toggle="collapse" data-target="#faq-block-13-4" aria-expanded="false" aria-controls="#faq-block-13-4">
                                                <div class="faq-block__header-title">
                                                    <h4>
                                                        <span style="font-size: 17px">
                                                            <span style="color: var(--color-id-200)">Apakah layanan SMM Panel aman?</span>
                                                        </span>
                                                    </h4>
                                                </div>
                                                <div class="faq-block__header-icon">
                                                    <div class="style-text-dark faq-block__icon" style="color: var(--color-id-210);"></div>
                                                </div>
                                            </div>
                                            <div class="faq-block__body collapse" id="faq-block-13-4">
                                                <div class="faq-block__body-description" style="padding-top: 8px">
                                                    <p>
                                                        <span style="color: var(--color-id-253)">Layanan SMM kami dirancang dengan mempertimbangkan keamanan. Kami memahami bahwa hal terakhir yang Anda inginkan saat membeli layanan SMM adalah tidak membahayakan akun media sosial Anda, oleh karena itu kami mengambil langkah-langkah keamanan dan melakukan percobaan untuk memastikan bahwa layanan kami 100% aman. Layanan kami dirancang untuk mematuhi ketentuan layanan dari platform media sosial yang kami dukung, sehingga Anda dapat yakin bahwa layanan tersebut tidak akan membuat akun Anda dibanned. Kami menggunakan teknik dan teknologi terbaru untuk memberi Anda layanan dengan kualitas terbaik, dengan tetap menjaga keamanan akun Anda. Yakinlah, saat Anda menggunakan layanan SMM kami, Anda berada di tangan yang tepat.</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="faq-block__card">
                                        <div class="card" style="
					 background: var(--color-id-254);color: var(--text-dark);border-color: var(--color-id-255);  padding-top: 16px;  padding-bottom: 16px;  border-top-left-radius: 16px;  border-bottom-left-radius: 16px;  border-top-right-radius: 16px;  border-bottom-right-radius: 16px; ">
                                            <div class="faq-block__header collapsed" data-toggle="collapse" data-target="#faq-block-13-5" aria-expanded="false" aria-controls="#faq-block-13-5">
                                                <div class="faq-block__header-title">
                                                    <h4>
                                                        <span style="font-size: 17px">
                                                            <span style="color: var(--color-id-200)">Layanan SMM mana yang tepat untuk saya?</span>
                                                        </span>
                                                    </h4>
                                                </div>
                                                <div class="faq-block__header-icon">
                                                    <div class="style-text-dark faq-block__icon" style="color: var(--color-id-210);"></div>
                                                </div>
                                            </div>
                                            <div class="faq-block__body collapse" id="faq-block-13-5">
                                                <div class="faq-block__body-description" style="padding-top: 8px">
                                                    <p>
                                                        <span style="color: var(--color-id-253)">Untuk menentukan layanan SMM yang tepat untuk Anda, pertama-tama perlu diketahui apa tujuan Anda menggunakan layanan ini. Apakah ingin meningkatkan jumlah followers, likes, views, subscribers atau memperoleh interaksi lainnya? Setelah itu, perhatikan jenis akun media sosial Anda, apakah akun pribadi, online shop, selebgram, atau akun bisnis perusahaan. Setiap jenis akun memiliki kebutuhan layanan yang berbeda. Berikutnya, pertimbangkan budget yang Anda miliki. Layanan SMM memiliki harga yang berbeda-beda, dimana harga yang lebih mahal biasanya menawarkan kualitas yang lebih baik dan kecepatan pesanan yang lebih cepat. Jika Anda masih kurang yakin, tim support kami siap membantu dan memberikan rekomendasi layanan SMM yang sesuai dengan kebutuhan dan budget Anda.</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="faq-block__card">
                                        <div class="card" style="
					 background: var(--color-id-254);color: var(--text-dark);border-color: var(--color-id-255);  padding-top: 16px;  padding-bottom: 16px;  border-top-left-radius: 16px;  border-bottom-left-radius: 16px;  border-top-right-radius: 16px;  border-bottom-right-radius: 16px; ">
                                            <div class="faq-block__header collapsed" data-toggle="collapse" data-target="#faq-block-13-6" aria-expanded="false" aria-controls="#faq-block-13-6">
                                                <div class="faq-block__header-title">
                                                    <h4>
                                                        <span style="font-size: 17px">
                                                            <span style="color: var(--color-id-200)">Layanan SMM apa saja yang tersedia di {{ get_config('site_name') }}?</span>
                                                        </span>
                                                    </h4>
                                                </div>
                                                <div class="faq-block__header-icon">
                                                    <div class="style-text-dark faq-block__icon" style="color: var(--color-id-210);"></div>
                                                </div>
                                            </div>
                                            <div class="faq-block__body collapse" id="faq-block-13-6">
                                                <div class="faq-block__body-description" style="padding-top: 8px">
                                                    <p>
                                                        <span style="color: var(--color-id-253)">Di {{ get_config('site_name') }}, kami menawarkan rangkaian lengkap layanan social media marketing (SMM) untuk membantu meningkatkan visibilatas online Anda. Layanan kami meliputi, namun tidak terbatas pada, likes, followers, views, dan masih banyak lagi. Kami memahami pentingnya memiliki kredibilitas online yang kuat dan dampaknya terhadap bisnis atau merek pribadi Anda. Itulah mengapa kami menawarkan berbagai layanan yang dapat membantu Anda mencapai tujuan, baik itu meningkatkan followers, meningkatkan views, atau sekadar mendapatkan lebih banyak likes di postingan Anda. Kami berkomitmen untuk menyediakan pelanggan kami dengan layanan dengan kualitas terbaik, dengan harga yang terjangkau.</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="faq-block__card">
                                        <div class="card" style="
					 background: var(--color-id-254);color: var(--text-dark);border-color: var(--color-id-255);  padding-top: 16px;  padding-bottom: 16px;  border-top-left-radius: 16px;  border-bottom-left-radius: 16px;  border-top-right-radius: 16px;  border-bottom-right-radius: 16px; ">
                                            <div class="faq-block__header collapsed" data-toggle="collapse" data-target="#faq-block-13-7" aria-expanded="false" aria-controls="#faq-block-13-7">
                                                <div class="faq-block__header-title">
                                                    <h4>
                                                        <span style="font-size: 17px">
                                                            <span style="color: var(--color-id-200)">Apa perbedaan layanan refill dan no refill?</span>
                                                        </span>
                                                    </h4>
                                                </div>
                                                <div class="faq-block__header-icon">
                                                    <div class="style-text-dark faq-block__icon" style="color: var(--color-id-210);"></div>
                                                </div>
                                            </div>
                                            <div class="faq-block__body collapse" id="faq-block-13-7">
                                                <div class="faq-block__body-description" style="padding-top: 8px">
                                                    <p>
                                                        <span style="color: var(--color-id-253)">Refill sendiri memiliki arti isi ulang. Jadi jika terdapat tulisan refill pada nama layanan artinya layanan tersebut memiliki garansi isi ulang pada periode waktu tertentu apabila mengalami penurunan hingga dibawah target yang telah dipesan. SMM panel {{ get_config('site_name') }} sendiri memiliki fitur unggulan, yaitu tombol refill yang tersedia pada masing-masing pesanan. Jadi saat ingin melakukan refill Anda tidak perlu repot untuk menghubungi admin, karena Anda bisa langsung melakukannya sendiri. Misal Anda memesan 1000 followers instagram pada layanan yang bergaransi refill 90 hari, apabila followers Anda berkurang menjadi 800 Anda dapat dengan mudah melakukan refill pada pesanan Anda dengan cara pergi ke riwayat pesanan &gt; klik tombol refill pada pesanan Anda, dan otomatis pesanan Anda akan di isi ulang oleh sistem. Sebaliknya, untuk layanan no refill adalah layanan yang tidak ada garansi apapun, baik itu pengembalian dana maupun pengisian ulang apabila berkurang.</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="faq-block__card">
                                        <div class="card" style="
					 background: var(--color-id-254);color: var(--text-dark);border-color: var(--color-id-255);  padding-top: 16px;  padding-bottom: 16px;  border-top-left-radius: 16px;  border-bottom-left-radius: 16px;  border-top-right-radius: 16px;  border-bottom-right-radius: 16px; ">
                                            <div class="faq-block__header collapsed" data-toggle="collapse" data-target="#faq-block-13-8" aria-expanded="false" aria-controls="#faq-block-13-8">
                                                <div class="faq-block__header-title">
                                                    <h4>
                                                        <span style="font-size: 17px">
                                                            <span style="color: var(--color-id-200)">Apa itu Child Panel?</span>
                                                        </span>
                                                    </h4>
                                                </div>
                                                <div class="faq-block__header-icon">
                                                    <div class="style-text-dark faq-block__icon" style="color: var(--color-id-210);"></div>
                                                </div>
                                            </div>
                                            <div class="faq-block__body collapse" id="faq-block-13-8">
                                                <div class="faq-block__body-description" style="padding-top: 8px">
                                                    <p>
                                                        <span style="color: var(--color-id-253)">Child panel adalah web SMM panel dengan pilihan fitur terbatas yang dihubungkan langsung ke SMM panel {{ get_config('site_name') }}. Dengan memliki child panel Anda dapat menjual kembali layanan SMM dan Anda dapat mengatur harga layanan di child panel Anda sesuai dengan keinginan. Pelanggan Anda akan membayar ke akun gateway pembayaran Anda sendiri, mereka tidak membayar kepada kami. Jadi, Anda tidak perlu khawatir tentang pembayaran. Selain itu, Anda tidak harus bisa coding, Karena semua kegiatan coding dan maintenance website adalah kami yang mengerjakan, dan itu gratis. Anda cukup mengelola dan fokus pada penjualan di child panel Anda.</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="faq-block__card">
                                        <div class="card" style="
					 background: var(--color-id-254);color: var(--text-dark);border-color: var(--color-id-255);  padding-top: 16px;  padding-bottom: 16px;  border-top-left-radius: 16px;  border-bottom-left-radius: 16px;  border-top-right-radius: 16px;  border-bottom-right-radius: 16px; ">
                                            <div class="faq-block__header collapsed" data-toggle="collapse" data-target="#faq-block-13-9" aria-expanded="false" aria-controls="#faq-block-13-9">
                                                <div class="faq-block__header-title">
                                                    <h4>
                                                        <span style="font-size: 17px">
                                                            <span style="color: var(--color-id-200)">Apa itu fitur drip-feed?</span>
                                                        </span>
                                                    </h4>
                                                </div>
                                                <div class="faq-block__header-icon">
                                                    <div class="style-text-dark faq-block__icon" style="color: var(--color-id-210);"></div>
                                                </div>
                                            </div>
                                            <div class="faq-block__body collapse" id="faq-block-13-9">
                                                <div class="faq-block__body-description" style="padding-top: 8px">
                                                    <p>
                                                        <span style="color: var(--color-id-253)">Drip-feed adalah fitur yang disediakan oleh {{ get_config('site_name') }} yang memberi Anda kendali lebih besar atas kecepatan interaksi akun media sosial Anda. Ini memungkinkan Anda untuk membangun interaksi dengan cara yang lambat, stabil, dan terlihat lebih natural, daripada membuat semua pesanan masuk dalam waktu sekaligus. Misalnya, jika Anda memesan 1000 likes untuk postingan Anda, Anda dapat memilih untuk menerimanya dengan kecepatan lebih lambat, seperti 100 likes per hari selama 10 hari. Pemberian likes secara bertahap ini membuatnya terlihat lebih otentik dan natural, seolah-olah likes dan followers datang secara alami. Drip-feed adalah alat yang ampuh untuk bisnis dan individu yang ingin meningkatkan visibilitas online mereka, tanpa harus khawatir tentang lonjakan atau penurunan interaksi yang tiba-tiba.</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="faq-block__card">
                                        <div class="card" style="
					 background: var(--color-id-254);color: var(--text-dark);border-color: var(--color-id-255);  padding-top: 16px;  padding-bottom: 16px;  border-top-left-radius: 16px;  border-bottom-left-radius: 16px;  border-top-right-radius: 16px;  border-bottom-right-radius: 16px; ">
                                            <div class="faq-block__header collapsed" data-toggle="collapse" data-target="#faq-block-13-10" aria-expanded="false" aria-controls="#faq-block-13-10">
                                                <div class="faq-block__header-title">
                                                    <h4>
                                                        <span style="font-size: 17px">
                                                            <span style="color: var(--color-id-200)">Apa itu fitur auto likes and auto followers?</span>
                                                        </span>
                                                    </h4>
                                                </div>
                                                <div class="faq-block__header-icon">
                                                    <div class="style-text-dark faq-block__icon" style="color: var(--color-id-210);"></div>
                                                </div>
                                            </div>
                                            <div class="faq-block__body collapse" id="faq-block-13-10">
                                                <div class="faq-block__body-description" style="padding-top: 8px">
                                                    <p>
                                                        <span style="color: var(--color-id-253)">Fitur auto likes dan auto followers memungkinan Anda untuk berlanggan pada layanan SMM tertentu dengan jangka waktu yang dapat Anda sesuaikan. Misalnya, Anda melakukan pemesanan langganan auto likes sekali dengan jangka waktu 10 Hari, setiap kali Anda upload postingan baru, Anda akan mendapatkan likes otomatis selama 10 Hari. Jadi fitur ini lebih menghemat waktu Anda.</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="faq-block__card">
                                        <div class="card" style="
					 background: var(--color-id-254);color: var(--text-dark);border-color: var(--color-id-255);  padding-top: 16px;  padding-bottom: 16px;  border-top-left-radius: 16px;  border-bottom-left-radius: 16px;  border-top-right-radius: 16px;  border-bottom-right-radius: 16px; ">
                                            <div class="faq-block__header collapsed" data-toggle="collapse" data-target="#faq-block-13-11" aria-expanded="false" aria-controls="#faq-block-13-11">
                                                <div class="faq-block__header-title">
                                                    <h4>
                                                        <span style="font-size: 17px">
                                                            <span style="color: var(--color-id-200)">Apa keuntungan menjadi reseller di {{ get_config('site_name') }}?</span>
                                                        </span>
                                                    </h4>
                                                </div>
                                                <div class="faq-block__header-icon">
                                                    <div class="style-text-dark faq-block__icon" style="color: var(--color-id-210);"></div>
                                                </div>
                                            </div>
                                            <div class="faq-block__body collapse" id="faq-block-13-11">
                                                <div class="faq-block__body-description" style="padding-top: 8px">
                                                    <p>
                                                        <span style="color: var(--color-id-253)">Dengan bergabung menjadi reseller di {{ get_config('site_name') }} Anda bisa mendapatkan source script website atau SMM panel gratis dan potongan harga. Gratis website SMM panel hanya berlaku untuk reseller Elite, VIP, dan Master. Anda tinggal membeli domain, arahkan ke nameserver kami, dan website panel sosmed Anda siap digunakan.</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="faq-block__card">
                                        <div class="card" style="
					 background: var(--color-id-254);color: var(--text-dark);border-color: var(--color-id-255);  padding-top: 16px;  padding-bottom: 16px;  border-top-left-radius: 16px;  border-bottom-left-radius: 16px;  border-top-right-radius: 16px;  border-bottom-right-radius: 16px; ">
                                            <div class="faq-block__header collapsed" data-toggle="collapse" data-target="#faq-block-13-12" aria-expanded="false" aria-controls="#faq-block-13-12">
                                                <div class="faq-block__header-title">
                                                    <h4>
                                                        <span style="font-size: 17px">
                                                            <span style="color: var(--color-id-200)">Apa itu {{ get_config('site_name') }} poin?</span>
                                                        </span>
                                                    </h4>
                                                </div>
                                                <div class="faq-block__header-icon">
                                                    <div class="style-text-dark faq-block__icon" style="color: var(--color-id-210);"></div>
                                                </div>
                                            </div>
                                            <div class="faq-block__body collapse" id="faq-block-13-12">
                                                <div class="faq-block__body-description" style="padding-top: 8px">
                                                    <p>
                                                        <span style="color: var(--color-id-253)">{{ get_config('site_name') }} Poin adalah program loyalitas yang ditujukan untuk seluruh pelanggan {{ get_config('site_name') }} sejak pertama kali menggunakan {{ get_config('site_name') }}.</span>
                                                    </p>
                                                    <p>
                                                        <br>
                                                    </p>
                                                    <p>
                                                        <span style="color: var(--color-id-253)">{{ get_config('site_name') }} Poin dapat ditukar menjadi saldo akun {{ get_config('site_name') }}. Untuk melihat jumlah point dapat dilihat pada halaman dashboard.</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper-content__footer">
                <div id="block_6">
                    <div class="footer ">
                        <div class="component_footer_single_line">
                            <div class="component-footer">
                                <div class="component-footer__public">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="component-footer__public-copyright">
                                                    <p class="text-center">
                                                        <span style="color: var(--color-id-236)">
                                                            <span style="text-align: CENTER">Copyright © 2023 {{ get_config('site_name') }} | All Rights Reserved.</span>
                                                        </span>
                                                    </p>
                                                    <p class="text-center">
                                                        <a target="_self" href="terms.html">
                                                            <span style="color: var(--color-id-236)">Terms &amp; conditions</span>
                                                        </a>
                                                        <span style="color: var(--color-id-236)"> | </span>
                                                        <a target="_self" href="privacy.html">
                                                            <span style="color: var(--color-id-236)">Privacy policy</span>
                                                        </a>
                                                        <span style="color: var(--color-id-236)"> | </span>
                                                        <a target="_blank" href="https://status.{{ get_config('site_name') }}.id/">
                                                            <span style="color: var(--color-id-236)">System status</span>
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K73SFGN" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <script type="text/javascript" src="../s0.v0id.pro/v035740468b5dadb6120.js" defer></script>
    <style>
        .particle-snow {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            pointer-events: none
        }

        .particle-snow canvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none
        }

        .christmas-garland {
            text-align: center;
            white-space: nowrap;
            overflow: hidden;
            position: absolute;
            z-index: 1;
            padding: 0;
            pointer-events: none;
            width: 100%;
            height: 85px
        }

        .christmas-garland .christmas-garland__item {
            position: relative;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            display: inline-block;
            margin-left: 20px
        }

        .christmas-garland .christmas-garland__item .shape {
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-name: flash-1;
            animation-name: flash-1;
            -webkit-animation-duration: 2s;
            animation-duration: 2s
        }

        .christmas-garland .christmas-garland__item .apple {
            width: 22px;
            height: 22px;
            border-radius: 50%;
            margin-left: auto;
            margin-right: auto;
            margin-top: 8px
        }

        .christmas-garland .christmas-garland__item .pear {
            width: 12px;
            height: 28px;
            border-radius: 50%;
            margin-left: auto;
            margin-right: auto;
            margin-top: 6px
        }

        .christmas-garland .christmas-garland__item:nth-child(2n+1) .shape {
            -webkit-animation-name: flash-2;
            animation-name: flash-2;
            -webkit-animation-duration: .4s;
            animation-duration: .4s
        }

        .christmas-garland .christmas-garland__item:nth-child(4n+2) .shape {
            -webkit-animation-name: flash-3;
            animation-name: flash-3;
            -webkit-animation-duration: 1.1s;
            animation-duration: 1.1s
        }

        .christmas-garland .christmas-garland__item:nth-child(odd) .shape {
            -webkit-animation-duration: 1.8s;
            animation-duration: 1.8s
        }

        .christmas-garland .christmas-garland__item:nth-child(3n+1) .shape {
            -webkit-animation-duration: 1.4s;
            animation-duration: 1.4s
        }

        .christmas-garland .christmas-garland__item:before {
            content: "";
            position: absolute;
            background: #222;
            width: 10px;
            height: 10px;
            border-radius: 3px;
            top: -1px;
            left: 9px
        }

        .christmas-garland .christmas-garland__item:after {
            content: "";
            top: -9px;
            left: 14px;
            position: absolute;
            width: 52px;
            height: 18px;
            border-bottom: solid #222 2px;
            border-radius: 50%
        }

        .christmas-garland .christmas-garland__item:last-child:after {
            content: none
        }

        .christmas-garland .christmas-garland__item:first-child {
            margin-left: -40px
        }
    </style>
    <script type="text/javascript" src="{{ asset('global') }}/zcqzb1bt04335ge4.js"></script>
    <script type="text/javascript" src="{{ asset('global') }}/fl30lzzomp4w0yk2.js"></script>
    <script type="text/javascript" src="{{ asset('global') }}/x8eo1d0qmu03i9qb.js"></script>
    <script type="text/javascript" src="{{ asset('global') }}/h2kji8kp5kndfgga.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
    <script>
        $("#login").submit(function(e) {
            e.preventDefault();
            $("#btn_login").attr('disabled', true);
            $("#btn_login").html(`<i class="fas fa-spinner fa-spin"></i> Mohon tunggu...`)
            let form = new FormData(this);
            axios.post("{{ url('auth/login') }}", form)
                .then(response => {
                    if (response.data.status) {
                        Swal.fire({
                            text: response.data.message,
                            icon: 'success',
                            buttonsStyling: false,
                            confirmButtonText: 'Lanjutkan!',
                            customClass: {
                                confirmButton: 'btn font-weight-bold btn-primary',
                            },
                        }).then(function(callback) {
                            if (callback.isConfirmed) {
                                window.location.href = "{{ url('dashboard') }}"
                            }
                        });
                    } else {
                        Swal.fire({
                            text: response.data.message,
                            icon: 'error',
                            buttonsStyling: false,
                            confirmButtonText: 'Ok lets check',
                            customClass: {
                                confirmButton: 'btn font-weight-bold btn-danger',
                            },
                        });
                    }
                    $("#btn_login").attr('disabled', false);
                    $("#btn_login").html(`Login`)
                })
                .catch(error => {
                    Swal.fire({
                        text: error.response.data.message,
                        icon: 'error',
                        buttonsStyling: false,
                        confirmButtonText: 'Ok lets check',
                        customClass: {
                            confirmButton: 'btn font-weight-bold btn-danger',
                        },
                    });
                    $("#btn_login").attr('disabled', false);
                    $("#btn_login").html(`Login`)
                });

        })
    </script>
</body>

</html>