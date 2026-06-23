<!DOCTYPE html>
<html lang="en">
<!-- Head -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home 1 - Salibu - Hotel & Resort Bootstrap Template</title>
    <meta name="description"
        content="Salibu - Salibu  is a luxurious and modern hotel and resort website template, meticulously designed to provide users with an impressive experience.">
    <meta name="keywords"
        content="hotel, Hostel, homestay, resort, gulp, Luxury, website, template, html5, template, site, bootstrap">
    <meta name="author" content="Bithemer.com">
    <link href="{{ asset('assets/frontend/img/logos/favicon.png') }}" rel="shortcut icon">
    <link href="{{ asset('assets/frontend/css/salibu.min.css') }}" rel="stylesheet">
    <script type="text/javascript"
        src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=NMfW6X4qmnu4HbmwHAh6OqAfpcblZVHP-wY7oVXbDgWw94opmuIZRR0wpzGlUg9ISYMuIieaOoT7pPyMzYe7bg"
        charset="UTF-8"></script>
    <link rel="stylesheet" crossorigin="anonymous"
        href="https://gc.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cHM6Ly9zYWxpYnUuYml0aGVtZXIuY29tL2luZGV4Lmh0bWw" />
    <link href="{{ asset('assets/frontend/css/colors/blue.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/colors/brown.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/colors/cyan.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/colors/gray.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/colors/green.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/colors/indigo.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/colors/orange.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/colors/pink.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/colors/purple.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/colors/red.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/colors/teal.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/colors/yellow.css') }}" rel="stylesheet">
</head>
<!-- /Head -->

<body>
    <!-- Header -->
    <!-- Preloader -->
    <div class="position-fixed top-0 bottom-0 bg-white vw-100 z-z1 d-flex align-items-center justify-content-center"
        id="preloader">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <!-- /Preloader -->
    <!-- Header -->
    <header id="header" class="fixed-top">
        <div class="header-navbar @yield('header') d-flex align-items-center">
            <div class="w-100">
                <!-- Brand -->
                <a class="navbar-brand d-inline-flex align-items-center position-absolute top-0 start-50 translate-middle-x z-1"
                    id="brandHeader" href="./index.html" data-bs-theme="dark">
                    <div class="text-center">
                        <div class="brand-img">
                            <div class="d-inline-block position-relative">
                                <img class="brand-img-dark position-absolute"
                                    src="./assets/frontend/img/logos/logo-dark.png"
                                    srcset="./assets/frontend/img/logos/logo-img-dark@2x.png 2x" alt="">
                                <img class="brand-img-light" src="./assets/frontend/img/logos/logo-light.png"
                                    srcset="./assets/frontend/img/logos/logo-img-light@2x.png 2x" alt="">
                            </div>
                        </div>
                        <div class="brand-text">
                            <div class="d-inline-block position-relative">
                                <img class="brand-text-dark position-absolute"
                                    src="./assets/frontend/img/logos/logo-text-dark.png"
                                    srcset="./assets/frontend/img/logos/logo-text-dark@2x.png 2x" alt="">
                                <img class="brand-text-light" src="./assets/frontend/img/logos/logo-text-dark.png"
                                    srcset="./assets/frontend/img/logos/logo-text-light@2x.png 2x" alt="">
                            </div>
                        </div>
                    </div>
                </a>
                <!-- /Brand -->
                <!-- Navbar -->
                <nav class="navbar navbar-expand-xl">
                    <div class="container">
                        <!-- offcanvas Navbar -->
                        <div class="offcanvas offcanvas-navbar offcanvas-start border-end-0" tabindex="-1"
                            id="offcanvasNavbar">
                            <!-- Offcanvas header -->
                            <div class="offcanvas-header border-bottom">
                                <a href="./index.html" class="d-inline-block position-relative">
                                    <img class="logo-dark position-absolute"
                                        src="./assets/frontend/img/logos/logo-side-dark.png"
                                        srcset="./assets/frontend/img/logos/logo-side-dark@2x.png 2x" alt="">
                                    <img class="logo-light" src="./assets/frontend/img/logos/logo-side-light.png"
                                        srcset="./assets/frontend/img/logos/logo-side-light@2x.png 2x" alt="">
                                </a>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <!-- /Offcanvas header -->
                            <div class="offcanvas-body">
                                <!-- Navbar nav left -->
                                <div
                                    class="navbar-nav-left h-special-font justify-content-xl-start d-block d-xl-flex align-items-xl-center">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link p-0 pe-6 fw-medium {{ request()->routeIs('home') ? 'active' : '' }}"
                                                href="{{ route('home') }}">
                                                <span>Home</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link p-0 pe-6 fw-medium {{ request()->routeIs('special-offers') ? 'active' : '' }}"
                                                href="{{ route('special-offers') }}">
                                                <span>Special Offers</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link p-0 pe-6 fw-medium {{ request()->routeIs('gallery') ? 'active' : '' }}"
                                                href="{{ route('gallery') }}">
                                                <span>Gallery</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link p-0 pe-6 fw-medium {{ request()->routeIs('contact') ? 'active' : '' }}"
                                                href="{{ route('contact') }}">
                                                <span>Contact</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link p-0 pe-6 fw-medium {{ request()->routeIs('about') ? 'active' : '' }}"
                                                href="{{ route('about') }}">
                                                <span>About</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /Navbar nav left  -->
                                <!-- Navbar nav right  -->
                                <div
                                    class="navbar-nav-right h-special-font justify-content-xl-end d-block d-xl-flex align-items-xl-center">
                                    <ul class="navbar-nav flex-row align-items-center me-2">
                                        <li class="nav-item dropdown me-4 me-xl-0 pt-3 pb-3 pt-xl-0 pb-xl-0">
                                            <span class="nav-link p-0 pe-6 fs-5" role="button" id="toggle-theme"
                                                data-bs-theme-value></span>
                                        </li>
                                        <li class="nav-item dropdown pt-3 pb-3 pt-xl-0 pb-xl-0">
                                            <a class="nav-link p-0 pe-6" href="#" data-bs-toggle="offcanvas"
                                                data-bs-target="#ocRightInfo">
                                                <i class="hicon hicon-bold hicon-24hour-room-service fs-6"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Language & Currency -->
                                    <ul class="navbar-nav flex-row pt-3 pb-3 pt-xl-0 pb-xl-0">
                                        <li class="nav-item">
                                            <a class="nav-link p-0 pe-6 d-flex align-items-center"
                                                data-bs-toggle="modal" href="#mdlLanguage">
                                                <img src="./assets/frontend/img/flags/en.svg" height="14"
                                                    alt="" class="me-2">
                                                <span class="me-1">EN</span>
                                                <i
                                                    class="hicon hicon-thin-arrow-down dropdown-toggle-icon d-none d-xl-inline-flex"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-0 pe-6 d-flex" data-bs-toggle="modal"
                                                href="#mdlCurrency">
                                                <span class="me-1">USD</span>
                                                <i
                                                    class="hicon hicon-thin-arrow-down dropdown-toggle-icon d-none d-xl-inline-flex"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- /Language & Currency -->
                                    <!-- Reservation -->
                                    <div class="mt-5 mt-xl-0">
                                        <a href="{{ route('reservation') }}" class="btn btn-primary mw-160">
                                            <i class="hicon hicon-bold hicon-menu-calendar"></i>
                                            <span>Reservation</span>
                                        </a>
                                    </div>
                                    <!-- /Reservation -->
                                </div>
                                <!-- /Navbar nav right  -->
                            </div>
                        </div>
                        <!-- /offcanvas Navbar -->
                        <!-- Nav toggler -->
                        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                            <i class="hicon hicon-130 hicon-hamburger-menu"></i>
                        </button>
                        <!-- /Nav toggler -->
                    </div>
                </nav>
                <!-- /Navbar -->
            </div>
        </div>
    </header>
    <!-- /Header -->
    <!-- Right slider info -->
    <div class="offcanvas offcanvas-end border-start-0" tabindex="-1" id="ocRightInfo"
        aria-labelledby="ocRightInfo">
        <div class="offcanvas-header border-bottom">
            <!-- Offcanvas header -->
            <a href="./index.html" class="d-inline-block position-relative">
                <img class="logo-dark position-absolute" src="./assets/frontend/img/logos/logo-side-dark.png"
                    srcset="./assets/frontend/img/logos/logo-side-dark@2x.png 2x" alt="">
                <img class="logo-light" src="./assets/frontend/img/logos/logo-side-light.png"
                    srcset="./assets/frontend/img/logos/logo-side-light@2x.png 2x" alt="">
            </a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            <!-- /Offcanvas header -->
        </div>
        <div class="offcanvas-body">
            <!-- Contact Info -->
            <div class="mb-10">
                <h6 class="text-body-emphasis fs-4 h-special-font">Contact Info</h6>
                <div class="d-flex mb-3">
                    <span class="me-3 flex-shrink-0">
                        <i class="hicon hicon-flights-pin"></i>
                    </span>
                    <span class="flex-grow-1">{{ $globalVilla->address }}</span>
                </div>
                <div class="d-flex mb-3">
                    <span class="me-3 flex-shrink-0">
                        <i class="hicon hicon-telephone"></i>
                    </span>
                    <span>+{{ $globalVilla->phone }}</span>
                </div>
                <div class="d-flex mb-3">
                    <span class="me-3 flex-shrink-0">
                        <i class="hicon hicon-email-envelope"></i>
                    </span>
                    <span>{{ $globalVilla->email }}</span>
                </div>
            </div>
            <!-- /Contact Info -->
            <!-- Learn more -->
            <div class="mb-10">
                <h6 class="text-body-emphasis fs-4 h-special-font">Learn more</h6>
                <ul class="list-unstyled">
                    <li><a class="text-body link-hover-primary d-inline-block mb-2" href="{{ route('about') }}">About
                            Us</a>
                    </li>
                    <li><a class="text-body link-hover-primary d-inline-block mb-2"
                            href="{{ route('privacy-policy') }}">Privacy
                            Policy</a></li>
                </ul>
            </div>
            <!-- /Learn more -->
            <!-- Follow Us -->
            <div>
                <h6 class="text-body-emphasis fs-4 h-special-font">Follow Us</h6>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="#" class="text-body link-hover-primary">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-brand-facebook" width="20" height="20"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                </path>
                            </svg>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-body link-hover-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-brand-x">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 4l11.733 16h4.267l-11.733 -16z" />
                                <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772" />
                            </svg>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-body link-hover-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-youtube"
                                width="20" height="20" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M3 5m0 4a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v6a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z">
                                </path>
                                <path d="M10 9l5 3l-5 3z"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-body link-hover-primary">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-brand-pinterest" width="20" height="20"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M8 20l4 -9"></path>
                                <path
                                    d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7">
                                </path>
                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-body link-hover-primary">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-brand-tripadvisor" width="20" height="20"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M6.5 13.5m-1.5 0a1.5 1.5 0 1 0 3 0a1.5 1.5 0 1 0 -3 0"></path>
                                <path d="M17.5 13.5m-1.5 0a1.5 1.5 0 1 0 3 0a1.5 1.5 0 1 0 -3 0"></path>
                                <path d="M17.5 9a4.5 4.5 0 1 0 3.5 1.671l1 -1.671h-4.5z"></path>
                                <path d="M6.5 9a4.5 4.5 0 1 1 -3.5 1.671l-1 -1.671h4.5z"></path>
                                <path d="M10.5 15.5l1.5 2l1.5 -2"></path>
                                <path d="M9 6.75c2 -.667 4 -.667 6 0"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /Follow Us -->
        </div>
    </div>
    <!-- /Right slider info -->
    <!-- Currency -->
    <div class="modal fade" id="mdlCurrency" tabindex="-1" aria-labelledby="h3Currency" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title h-special-font text-body-emphasis" id="h3Currency">Select currency</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="nav small row mb-0">
                        <li class="nav-item col-12 col-lg-6">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0"
                                href="?currency=usd">
                                <span class="me-1"><strong>USD</strong> (United States Dollar)</span>
                            </a>
                        </li>
                        <li class="nav-item col-12 col-lg-6">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0"
                                href="?currency=eur">
                                <span class="me-1"><strong>EUR</strong> (Euro)</span>
                            </a>
                        </li>
                        <li class="nav-item col-12 col-lg-6">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0"
                                href="?currency=gbp">
                                <span class="me-1"><strong>GBP</strong> (Pound Sterling)</span>
                            </a>
                        </li>
                        <li class="nav-item col-12 col-lg-6">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0"
                                href="?currency=aud">
                                <span class="me-1"><strong>AUD</strong> (Australian Dollar)</span>
                            </a>
                        </li>
                        <li class="nav-item col-12 col-lg-6">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0"
                                href="?currency=nzd">
                                <span class="me-1"><strong>NZD</strong> (New Zealand Dollar)</span>
                            </a>
                        </li>
                        <li class="nav-item col-12 col-lg-6">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0"
                                href="?currency=cad">
                                <span class="me-1"><strong>CAD</strong> (Canadian Dollar)</span>
                            </a>
                        </li>
                        <li class="nav-item col-12 col-lg-6">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0"
                                href="?currency=jpy">
                                <span class="me-1"><strong>JPY</strong> (Japanese Yen)</span>
                            </a>
                        </li>
                        <li class="nav-item col-12 col-lg-6">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0"
                                href="?currency=cny">
                                <span class="me-1"><strong>CNY</strong> (Chinese Yuan)</span>
                            </a>
                        </li>
                        <li class="nav-item col-12 col-lg-6">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0"
                                href="?currency=vnd">
                                <span class="me-1"><strong>VND</strong> (Vietnam Dong)</span>
                            </a>
                        </li>
                        <li class="nav-item col-12 col-lg-6">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0"
                                href="?currency=sgd">
                                <span class="me-1"><strong>SGD</strong> (Singapore Dollar)</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Currency -->
    <!-- Language -->
    <div class="modal fade" id="mdlLanguage" tabindex="-1" aria-labelledby="h3Language" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title h-special-font text-body-emphasis" id="h3Language">Select language</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="nav small row mb-0">
                        <li class="nav-item col-6 col-lg-4">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0"
                                href="?lang=en">
                                <img src="./assets/frontend/img/flags/en.svg" height="16" alt=""
                                    class="me-2">
                                <span class="me-1">English</span>
                            </a>
                        </li>
                        <li class="nav-item col-6 col-lg-4">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0"
                                href="?lang=fr">
                                <img src="./assets/frontend/img/flags/fr.svg" height="16" alt=""
                                    class="me-2">
                                <span class="me-1">Français</span>
                            </a>
                        </li>
                        <li class="nav-item col-6 col-lg-4">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0"
                                href="?lang=es">
                                <img src="./assets/frontend/img/flags/es.svg" height="16" alt=""
                                    class="me-2">
                                <span class="me-1">Español</span>
                            </a>
                        </li>
                        <li class="nav-item col-6 col-lg-4">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0"
                                href="?lang=de">
                                <img src="./assets/frontend/img/flags/de.svg" height="16" alt=""
                                    class="me-2">
                                <span class="me-1">Deutsch</span>
                            </a>
                        </li>
                        <li class="nav-item col-6 col-lg-4">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0"
                                href="?lang=it">
                                <img src="./assets/frontend/img/flags/it.svg" height="16" alt=""
                                    class="me-2">
                                <span class="me-1">Italiano</span>
                            </a>
                        </li>
                        <li class="nav-item col-6 col-lg-4">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0"
                                href="?lang=nl">
                                <img src="./assets/frontend/img/flags/nl.svg" height="16" alt=""
                                    class="me-2">
                                <span class="me-1">Nederlands</span>
                            </a>
                        </li>
                        <li class="nav-item col-6 col-lg-4">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0"
                                href="?lang=pt">
                                <img src="./assets/frontend/img/flags/pt.svg" height="16" alt=""
                                    class="me-2">
                                <span class="me-1">Português</span>
                            </a>
                        </li>
                        <li class="nav-item col-6 col-lg-4">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0"
                                href="?lang=ru">
                                <img src="./assets/frontend/img/flags/ru.svg" height="16" alt=""
                                    class="me-2">
                                <span class="me-1">Русский</span>
                            </a>
                        </li>
                        <li class="nav-item col-6 col-lg-4">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0"
                                href="?lang=cn">
                                <img src="./assets/frontend/img/flags/cn.svg" height="16" alt=""
                                    class="me-2">
                                <span class="me-1">日本語</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Language -->
    <!-- /Header -->
    <main>
        <!-- Hero -->
        @yield('content')
        @unless (isset($hideAbout) && $hideAbout)
            <!-- About 4-->
            <section id="about-4" class="pt-18 pb-18 bg-primary bg-opacity-8 text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-xxl-8 col-xl-10">
                            <!-- Description -->
                            <div data-cue="fadeIn">
                                <span class="text-uppercase h-sub-font fw-medium ls-2 d-block mb-4">Reservation &
                                    Experience</span>
                                <h2 class="display-3 h-special-font mb-6 text-body-emphasis"> Ready to Experience
                                    {{ $globalVilla->name }}? </h2>
                                <p class="mb-10"> Plan your perfect getaway and enjoy a stay designed for comfort,
                                    privacy, and unforgettable moments in Bali. </p>
                                <div>
                                    <a href="{{ route('reservation') }}"
                                        class="btn btn-primary h-special-font ps-8 pe-8 mw-160 m-3">
                                        <i class="hicon hicon-bold hicon-menu-calendar"></i>
                                        <span>Reserve Now</span>
                                    </a>
                                    <a href="{{ route('contact') }}"
                                        class="btn btn-secondary h-special-font ps-8 pe-8 mw-160 m-3">
                                        <i class="hicon hicon-email-envelope"></i>
                                        <span>Contact Us</span>
                                    </a>
                                </div>
                            </div>
                            <!-- /Description -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- /About 4-->
        @endunless

    </main>
    <!-- Footer -->
    <footer id="footer" class="bg-primary">
        <div class="bg-dark bg-opacity-75 text-body pb-16" data-bs-theme="dark">
            <div class="container">
                <!-- Brands system -->
                <div class="border-bottom border-white border-opacity-10 pt-18 pb-6 mb-10" data-cue="fadeIn">

                </div>
                <!-- /Brands system -->
                <!-- Footer top -->
                <div class="border-bottom border-white border-opacity-10" data-cue="fadeIn">
                    <div class="row">
                        <div class="col-12 col-xl-3 col-lg-12 col-md-6">
                            <!-- Brand -->
                            <div class="mb-10">
                                <a href="./index.html"
                                    class="d-flex align-items-center text-body-emphasis h-sub-font text-uppercase mb-6">
                                    <img class="me-4" src="./assets/frontend/img/logos/logo-footer-dark.png"
                                        srcset="./assets/frontend/img/logos/logo-footer-dark@2x.png 2x" alt=""
                                        height="48">
                                </a>
                                <p>
                                    <em>Sed diam constituam ei, qui erat probo dissentiet ex. Ius nominati dissentiet
                                        eu, sit ut doming facilisis sententiae. Id vim libris volutpat, pri cu errem
                                        timeam cotidieque, purto summo has te. An quis eligendi atomorum duo.</em>
                                </p>
                            </div>
                            <!-- /Brand -->
                        </div>
                        <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                            <!-- Contact Info -->
                            <div class="mb-10">
                                <h6 class="text-body-emphasis fs-4 h-special-font">Contact Info</h6>
                                <div class="pt-2">
                                    <p>
                                        <span>{{ $globalVilla->address }}</span>
                                    </p>
                                    <p>
                                        <span>+{{ $globalVilla->phone }}</span>
                                    </p>
                                    <p>
                                        <a href="{{ route('contact') }}"
                                            class="text-body link-hover-primary">{{ $globalVilla->email }}</a>
                                    </p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="#" class="text-body link-hover-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-brand-facebook" width="20"
                                                    height="20" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path
                                                        d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="text-body link-hover-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-brand-x">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M4 4l11.733 16h4.267l-11.733 -16z" />
                                                    <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="text-body link-hover-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-brand-youtube" width="20"
                                                    height="20" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path
                                                        d="M3 5m0 4a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v6a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z">
                                                    </path>
                                                    <path d="M10 9l5 3l-5 3z"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="text-body link-hover-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-brand-pinterest"
                                                    width="20" height="20" viewBox="0 0 24 24"
                                                    stroke-width="2" stroke="currentColor" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M8 20l4 -9"></path>
                                                    <path
                                                        d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7">
                                                    </path>
                                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="text-body link-hover-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-brand-tripadvisor"
                                                    width="20" height="20" viewBox="0 0 24 24"
                                                    stroke-width="2" stroke="currentColor" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M6.5 13.5m-1.5 0a1.5 1.5 0 1 0 3 0a1.5 1.5 0 1 0 -3 0">
                                                    </path>
                                                    <path d="M17.5 13.5m-1.5 0a1.5 1.5 0 1 0 3 0a1.5 1.5 0 1 0 -3 0">
                                                    </path>
                                                    <path d="M17.5 9a4.5 4.5 0 1 0 3.5 1.671l1 -1.671h-4.5z"></path>
                                                    <path d="M6.5 9a4.5 4.5 0 1 1 -3.5 1.671l-1 -1.671h4.5z"></path>
                                                    <path d="M10.5 15.5l1.5 2l1.5 -2"></path>
                                                    <path d="M9 6.75c2 -.667 4 -.667 6 0"></path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /Contact Info -->
                        </div>
                        <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                            <!-- Quick Links -->
                            <div class="mb-10">
                                <h6 class="text-body-emphasis fs-4 h-special-font">Quick Links</h6>
                                <div class="row">
                                    <div class="col-5">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link text-body ps-0 pe-0 link-hover-primary"
                                                    href="{{ route('about') }}">About Us</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-body ps-0 pe-0 link-hover-primary"
                                                    href="{{ route('gallery') }}">Gallery</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-7">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link text-body ps-0 pe-0 link-hover-primary"
                                                    href="{{ route('special-offers') }}">Special Offers</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-body ps-0 pe-0 link-hover-primary"
                                                    href="{{ route('contact') }}">Contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /Quick Links -->
                        </div>
                        <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                            <div class="mb-10">
                                <!-- Social -->
                                <div class="mb-10 pt-4">
                                    <h6 class="text-body-emphasis fs-4 h-special-font">Language & currency</h6>
                                    <div class="d-flex fsm-2 fw-medium">
                                        <div>
                                            <a class="d-flex text-body align-items-center link-hover-primary"
                                                data-bs-toggle="modal" href="#mdlLanguage">
                                                <img src="./assets/frontend/img/flags/en.svg" height="14"
                                                    alt="" class="me-1">
                                                <span>English</span>
                                                <i class="hicon hicon-thin-arrow-down ms-1 fsm-6"></i>
                                            </a>
                                        </div>
                                        <div class="ms-auto">
                                            <a class="d-flex text-body link-hover-primary" data-bs-toggle="modal"
                                                href="#mdlCurrency">
                                                <span>USD (United States Dollar)</span>
                                                <i class="hicon hicon-thin-arrow-down ms-1 fsm-6"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Social -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Footer top -->
                <!-- Footer Bottom -->
                <div class="mt-10" data-cue="fadeIn">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <p>© 2023 Salibu Seaside Resort. All rights reserved.</p>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="text-start text-md-end">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a class="text-body link-hover-primary" href="./blank.html">Privacy
                                            Policy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Footer Bottom -->
            </div>
        </div>
    </footer>
    <!-- Theme Colors -->
    <a href="#mdlThemeColors" data-bs-toggle="modal" class="position-fixed bottom-0 end-0 me-6 mb-14 z-9">
        <img src="./assets/frontend/img/icons/i3.svg" width="40" height="40" alt="" />
    </a>
    <div class="modal fade" id="mdlThemeColors" tabindex="-1" aria-labelledby="h3ThemeColors" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title h-special-font text-body-emphasis" id="h3ThemeColors">Change theme color
                    </h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="nav row g-4 mb-0" data-lang-list>
                        <li class="nav-item col-6 col-lg-4">
                            <span
                                class="nav-link cursor-pointer rounded d-flex justify-content-between align-items-center"
                                data-theme-color-toggle="blue" data-bs-dismiss="modal">
                                <span class="me-1">Blue</span>
                                <i class="hicon hicon-check-valid-state"></i>
                            </span>
                        </li>
                        <li class="nav-item col-6 col-lg-4">
                            <span
                                class="nav-link cursor-pointer rounded d-flex justify-content-between align-items-center"
                                data-theme-color-toggle="indigo" data-bs-dismiss="modal">
                                <span class="me-1">Indigo</span>
                                <i class="hicon hicon-check-valid-state"></i>
                            </span>
                        </li>
                        <li class="nav-item col-6 col-lg-4">
                            <span
                                class="nav-link cursor-pointer rounded d-flex justify-content-between align-items-center"
                                data-theme-color-toggle="purple" data-bs-dismiss="modal">
                                <span class="me-1">Purple</span>
                                <i class="hicon hicon-check-valid-state"></i>
                            </span>
                        </li>
                        <li class="nav-item col-6 col-lg-4">
                            <span
                                class="nav-link cursor-pointer rounded d-flex justify-content-between align-items-center"
                                data-theme-color-toggle="pink" data-bs-dismiss="modal">
                                <span class="me-1">Pink</span>
                                <i class="hicon hicon-check-valid-state"></i>
                            </span>
                        </li>
                        <li class="nav-item col-6 col-lg-4">
                            <span
                                class="nav-link cursor-pointer rounded d-flex justify-content-between align-items-center"
                                data-theme-color-toggle="red" data-bs-dismiss="modal">
                                <span class="me-1">Red</span>
                                <i class="hicon hicon-check-valid-state"></i>
                            </span>
                        </li>
                        <li class="nav-item col-6 col-lg-4">
                            <span
                                class="nav-link cursor-pointer rounded d-flex justify-content-between align-items-center"
                                data-theme-color-toggle="orange" data-bs-dismiss="modal">
                                <span class="me-1">Orange</span>
                                <i class="hicon hicon-check-valid-state"></i>
                            </span>
                        </li>
                        <li class="nav-item col-6 col-lg-4">
                            <span
                                class="nav-link cursor-pointer rounded d-flex justify-content-between align-items-center"
                                data-theme-color-toggle="yellow" data-bs-dismiss="modal">
                                <span class="me-1">Yellow</span>
                                <i class="hicon hicon-check-valid-state"></i>
                            </span>
                        </li>
                        <li class="nav-item col-6 col-lg-4">
                            <span
                                class="nav-link cursor-pointer rounded d-flex justify-content-between align-items-center"
                                data-theme-color-toggle="green" data-bs-dismiss="modal">
                                <span class="me-1">Green</span>
                                <i class="hicon hicon-check-valid-state"></i>
                            </span>
                        </li>
                        <li class="nav-item col-6 col-lg-4">
                            <span
                                class="nav-link cursor-pointer rounded d-flex justify-content-between align-items-center"
                                data-theme-color-toggle="teal" data-bs-dismiss="modal">
                                <span class="me-1">Teal</span>
                                <i class="hicon hicon-check-valid-state"></i>
                            </span>
                        </li>
                        <li class="nav-item col-6 col-lg-4">
                            <span
                                class="nav-link cursor-pointer rounded d-flex justify-content-between align-items-center"
                                data-theme-color-toggle="cyan" data-bs-dismiss="modal">
                                <span class="me-1">Cyan</span>
                                <i class="hicon hicon-check-valid-state"></i>
                            </span>
                        </li>
                        <li class="nav-item col-6 col-lg-4">
                            <span
                                class="nav-link cursor-pointer rounded d-flex justify-content-between align-items-center"
                                data-theme-color-toggle="gray" data-bs-dismiss="modal">
                                <span class="me-1">Gray</span>
                                <i class="hicon hicon-check-valid-state"></i>
                            </span>
                        </li>
                        <li class="nav-item col-6 col-lg-4">
                            <span
                                class="nav-link cursor-pointer rounded d-flex justify-content-between align-items-center"
                                data-theme-color-toggle="brown" data-bs-dismiss="modal">
                                <span class="me-1">Brown</span>
                                <i class="hicon hicon-check-valid-state"></i>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /Theme Colors -->
    <!-- Scroll top -->
    <a href="#"
        class="scroll-top position-fixed bottom-0 end-0 mb-6 me-6 rounded-circle text-white d-flex align-items-center justify-content-center z-4">
        <i class="hicon hicon-thin-arrow-up"></i>
    </a>
    <!-- /Scroll top -->
    <!-- /Footer -->
    <!-- Scripts -->
    <script src="{{ asset('assets/frontend/js/salibu.min.js') }}"></script>
    <!-- /Scripts -->
    @stack('scripts')
</body>

</html>
