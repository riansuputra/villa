@extends('frontend.layouts.app')

@section('header', 'header-transparent')

@section('content')
    <section id="hero">
        <div id="heroCarousel" class="hero-carousel carousel slide carousel-fade">
            <!-- Carousel indicators -->
            <div class="carousel-indicators mb-8 mb-lg-14">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <!-- /Carousel indicators -->
            <!-- Carousel list -->
            <div class="carousel-inner">
                <!-- Item -->
                <div class="carousel-item active">
                    <div class="carousel-caption hero-caption">
                        <div class="image-wrapper bg-image bg-overlay bg-overlay-400 h-100"
                            data-image-src="./assets/frontend/img/hero/h5.jpg">
                            <div class="bg-content">
                                <div class="d-flex align-items-center h-100 pt-18 pt-lg-0">
                                    <div class="container">
                                        <p class="text-uppercase ls-8 h-sub-font mb-3 fs-4"> {{ $villa->name }}
                                        </p>
                                        <h4 class="display-2 h-special-font mb-0"> Create Unforgettable Moments </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Item -->
                <!-- Item -->
                <div class="carousel-item">
                    <div class="carousel-caption hero-caption">
                        <div class="image-wrapper bg-image bg-overlay bg-overlay-400 h-100"
                            data-image-src="./assets/frontend/img/hero/h4.jpg">
                            <div class="bg-content">
                                <div class="d-flex align-items-center h-100 pt-18 pt-lg-0">
                                    <div class="container">
                                        <p class="text-uppercase ls-8 h-sub-font mb-3 fs-4">{{ $villa->name }}
                                        </p>
                                        <h4 class="display-2 h-special-font mb-0"> Experience Comfort & Serenity
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Item -->
                <!-- Item -->
                <div class="carousel-item">
                    <div class="carousel-caption hero-caption">
                        <div class="image-wrapper bg-image bg-overlay bg-overlay-400 h-100"
                            data-image-src="./assets/frontend/img/hero/h2.jpg">
                            <div class="bg-content">
                                <div class="d-flex align-items-center h-100 pt-18 pt-lg-0">
                                    <div class="container">
                                        <p class="text-uppercase ls-8 h-sub-font mb-3 fs-4">{{ $villa->name }}</p>
                                        <h4 class="display-2 h-special-font mb-0"> Luxury Private Villa in Bali </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Item -->
            </div>
            <!-- /Carousel list -->
            <!-- Carousel navs -->
            <button class="carousel-control-prev d-none d-lg-inline-block" type="button" data-bs-target="#heroCarousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next d-none d-lg-inline-block" type="button" data-bs-target="#heroCarousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            <!-- /Carousel navs -->
        </div>
        <!-- Check rooms -->
        <div class="check-room-top pt-4 pb-4 pt-lg-0 pb-lg-0">
            <div class="container">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-6">
                        <form class="row g-4" method="GET" action="{{ route('reservation') }}">
                            <div class="col-12 col-lg-5 col-md-7">
                                <!-- Input date -->
                                <div class="mb-0">
                                    <div class="position-relative">
                                        <label
                                            class="hicon hicon-menu-calendar hicon-bold text-secondary cursor-pointer position-absolute top-50 start-0 translate-middle-y ms-5 z-1"
                                            for="txtCheckDate"></label>
                                        <input id="txtCheckDate" name="date" type="text"
                                            class="check-date form-select cursor-pointer shadow-none ps-11 fw-medium bg-body-tertiary"
                                            placeholder="" readonly>
                                    </div>
                                </div>
                                <!-- /Input date -->
                            </div>
                            <div class="col-12 col-lg-4 col-md-5">
                                <!-- Input number of guests -->
                                <div class="mb-0">
                                    <div class="position-relative">
                                        <label
                                            class="hicon hicon-couple hicon-bold text-secondary cursor-pointer position-absolute top-50 start-0 translate-middle-y ms-5 z-1"
                                            for="btnCheckGuest"></label>
                                        <div class="dropdown" data-total-guest="">
                                            <button
                                                class="form-select w-100 text-start shadow-none ps-11 fw-medium bg-body-tertiary"
                                                id="btnCheckGuest" data-bs-auto-close="outside" type="button"
                                                data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="text-nowrap">
                                                    <span data-total-adults=""></span>, <span data-total-children=""></span>
                                                </span>
                                            </button>
                                            <ul class="dropdown-menu animate slideIn p-6 border-0 shadow">
                                                <li>
                                                    <div class="mb-3">
                                                        <label for="txtCheckAdults" class="form-label">Adults</label>
                                                        <div class="input-group shadow-sm">
                                                            <button
                                                                class="btn btn-light bg-body-tertiary text-secondary border link-hover-primary"
                                                                type="button" data-minus-adults="">
                                                                <i class="hicon hicon-minus-thin small"></i>
                                                            </button>
                                                            <input type="text" class="form-control text-center"
                                                                placeholder="Adults" value="1" aria-label="Adults"
                                                                id="txtCheckAdults" name="adults" data-adults-max="10"
                                                                data-input-adults="">
                                                            <button
                                                                class="btn btn-light bg-body-tertiary text-secondary border link-hover-primary"
                                                                type="button" data-plus-adults="">
                                                                <i class="hicon hicon-plus-thin small"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="mb-1">
                                                        <label for="txtCheckChildren" class="form-label">Children</label>
                                                        <div class="input-group shadow-sm">
                                                            <button
                                                                class="btn btn-light bg-body-tertiary text-secondary border link-hover-primary"
                                                                type="button" data-minus-children="">
                                                                <i class="hicon hicon-minus-thin small"></i>
                                                            </button>
                                                            <input type="text" class="form-control text-center"
                                                                placeholder="Children" value="0"
                                                                aria-label="Children" id="txtCheckChildren"
                                                                name="children" data-children-max="20"
                                                                data-input-children="">
                                                            <button
                                                                class="btn btn-light bg-body-tertiary text-secondary border link-hover-primary"
                                                                type="button" data-plus-children="">
                                                                <i class="hicon hicon-plus-thin small"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Input number of guests -->
                            </div>
                            <div class="col-12 col-lg-3 col-md-12">
                                <!-- Button -->
                                <div class="mb-0">
                                    <button type="submit" class="btn btn-primary w-100 fw-medium">
                                        <i class="hicon hicon-search-box me-1"></i>
                                        <span>Search</span>
                                    </button>
                                </div>
                                <!-- /Button -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Check rooms -->
    </section>
    <!-- /Hero -->
    <!-- About 1 -->
    <section id="about-1" class="pt-22 pb-18 bg-primary bg-opacity-8 text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xxl-8 col-xl-10">
                    <!-- Description -->
                    <div data-cue="fadeIn">
                        <span class="text-uppercase h-sub-font fw-medium ls-2 d-block mb-4">The Luxury Retreat</span>
                        <h2 class="h1 h-special-font mb-6 text-body-emphasis">Experience {{ $globalVilla->name }}</h2>
                        <p class="mb-10"> Discover a private villa experience designed for comfort, elegance, and
                            relaxation. Surrounded by the tropical atmosphere of Bali, {{ $globalVilla->name }} combines
                            modern
                            living with peaceful surroundings to create memorable stays for every guest. </p>
                        <a href="{{ route('about') }}" class="btn btn-primary h-special-font ps-8 pe-8 mw-160">
                            <span>Explore</span>
                            <i class="hicon hicon-thin-circle-arrow-left"></i>
                        </a>
                    </div>
                    <!-- /Description -->
                </div>
            </div>
        </div>
    </section>
    <!-- /About 1-->
    <!-- Gallery -->
    <section id="gallery" class="pt-19 pb-16">
        <div class="container">
            <div class="row g-0 g-lg-7">
                <div class="col-12 col-xl-6 col-lg-6">
                    <!-- Description -->
                    <div class="card border-0 bg-transparent mb-7 mb-lg-0" data-cue="fadeIn">
                        <div class="card-body p-md-10 p-xl-12 bg-body-tertiary">
                            <div class="mb-6">
                                <span class="text-uppercase h-sub-font fw-medium ls-2 d-block mb-4">The Luxury
                                    Retreat</span>
                                <h2 class="h1 h-special-font mb-4 text-body-emphasis">Explore {{ $globalVilla->name }}
                                    Through
                                    Photos</h2>
                                <p>Explore moments and spaces that reflect the beauty of modern tropical living. From
                                    elegant interiors to relaxing outdoor areas, discover the atmosphere that makes every
                                    stay at {{ $globalVilla->name }} unforgettable.</p>
                            </div>
                            <div class="pt-4">
                                <a href="{{ route('gallery') }}" class="btn btn-primary h-special-font ps-8 pe-8 mw-160">
                                    <span>View Gallery</span>
                                    <i class="hicon hicon-thin-circle-arrow-left"></i>
                                </a>
                            </div>
                        </div>
                        <!-- Description -->
                    </div>
                    <!-- Image -->
                    <div class="box-img-indent z-1" data-cue="fadeIn">
                        <div class="img-indent img-indent-end w-100 pt-0 pt-lg-7 pe-0 pe-lg-7">
                            <a href="./assets/frontend/img/gallery/g1@2x.jpg" class="d-block mb-7 mb-lg-0 glightbox"
                                data-gallery="room-photos" data-glightbox="title: Salibu Seaside Resort">
                                <figure class="figure image-hover-scale image-hover-overlay overflow-hidden d-block mb-0">
                                    <img src="./assets/frontend/img/gallery/g1.jpg"
                                        srcset="./assets/frontend/img/gallery/g1@2x.jpg 2x"
                                        class="figure-img img-fluid mb-0 w-100" alt="...">
                                    <i class="hicon hicon-zoom-bold image-hover-icon fs-4"></i>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <!-- /Image -->
                </div>
                <div class="col-12 col-xl-6 col-lg-6">
                    <!-- Image -->
                    <div class="mb-16" data-cues="fadeIn">
                        <a href="./assets/frontend/img/gallery/g3@2x.jpg" class="d-block glightbox"
                            data-gallery="room-photos" data-glightbox="title: Salibu Seaside Resort">
                            <figure class="figure image-hover-scale image-hover-overlay overflow-hidden d-block mb-0 mb-7">
                                <img src="./assets/frontend/img/gallery/g3.jpg"
                                    srcset="./assets/frontend/img/gallery/g3@2x.jpg 2x"
                                    class="figure-img img-fluid mb-0 w-100" alt="...">
                                <i class="hicon hicon-zoom-bold image-hover-icon fs-4"></i>
                            </figure>
                        </a>
                        <a href="./assets/frontend/img/gallery/g1@2x.jpg" class="d-block glightbox"
                            data-gallery="room-photos" data-glightbox="title: Salibu Seaside Resort">
                            <figure class="figure image-hover-scale image-hover-overlay overflow-hidden d-block mb-0 mb-7">
                                <img src="./assets/frontend/img/gallery/g2.jpg"
                                    srcset="./assets/frontend/img/gallery/g2@2x.jpg 2x"
                                    class="figure-img img-fluid mb-0 w-100" alt="...">
                                <i class="hicon hicon-zoom-bold image-hover-icon fs-4"></i>
                            </figure>
                        </a>
                    </div>
                    <!-- /Image -->
                </div>
            </div>
        </div>
    </section>
    <!-- /Gallery -->
    <!-- Video -->
    <section id="video" class="image-wrapper bg-image bg-overlay bg-overlay-400 text-body pt-22 pb-18 text-center"
        data-image-src="./assets/frontend/img/background/bg4.jpg" data-bs-theme="dark">
        <div class="bg-content">
            <div class="container">
                <!-- Content -->
                <div class="row justify-content-center" data-cue="fadeIn">
                    <div class="col-12 col-xl-8 col-lg-10">
                        <span class="text-uppercase h-sub-font fsm-1 fw-medium ls-2 d-block mb-4">The Unique
                            Experience</span>
                        <h2 class="h1 h-special-font mb-6 text-body-emphasis">Explore the Essence of
                            {{ $globalVilla->name }}</h2>
                        <p> Designed to offer privacy, comfort, and a refined tropical atmosphere, {{ $globalVilla->name }}
                            creates
                            an experience where modern luxury meets the natural beauty of Bali. Every space is thoughtfully
                            arranged to make each stay relaxing and memorable. </p>
                    </div>
                </div>
                <!-- Content -->
            </div>
        </div>
    </section>
    <!-- /Video -->

    <!-- Facilities -->
    <section id="collection" class="pt-18 pb-18 bg-primary bg-opacity-8">
        <div class="container">
            <!-- Heading -->
            <div class="mb-12 text-center" data-cue="fadeIn">
                <span class="text-uppercase h-sub-font fw-medium ls-2 d-block mb-4">Luxury & Modern Living</span>
                <h2 class="h1 h-special-font mb-6 text-body-emphasis">Explore the {{ $globalVilla->name }} Experience</h2>
            </div>
            <!-- /Heading -->
            <!-- Features -->
            <div class="row g-0 g-md-8 pb-0 pb-md-10" data-cues="fadeIn">
                <div class="col-12 col-xl-6 col-md-6">
                    <!-- Item -->
                    <div class="text-center">
                        <i class="hicon hicon-250 hicon-assembly-restaurant-line text-primary mb-4"></i>
                        <h3 class="h4 h-special-font fw-semibold mb-4 text-body-emphasis">Dining Experience</h3>
                        <p>Enjoy delightful moments with thoughtfully designed dining spaces created for comfort,
                            connection, and relaxation.</p>
                    </div>
                    <!-- /Item -->
                </div>
                <div class="col-12 col-xl-6 col-md-6">
                    <!-- Item -->
                    <div class="text-center mb-10 mb-md-0">
                        <i class="hicon hicon-250 hicon-private-pool text-primary mb-4"></i>
                        <h3 class="h4 h-special-font fw-semibold mb-4 text-body-emphasis">Pool & Outdoor Living</h3>
                        <p>Relax in refreshing outdoor spaces designed to balance privacy, comfort, and tropical ambiance.
                        </p>
                    </div>
                    <!-- /Item -->
                </div>
                <div class="col-12 col-xl-6 col-md-6">
                    <!-- Item -->
                    <div class="text-center mb-10 mb-md-0">
                        <i class="hicon hicon-250 hicon-spas text-primary mb-4"></i>
                        <h3 class="h4 h-special-font fw-semibold mb-4 text-body-emphasis">Private Spaces</h3>
                        <p>Experience comfortable areas designed to provide privacy and moments of complete relaxation.</p>
                    </div>
                    <!-- /Item -->
                </div>
                <div class="col-12 col-xl-6 col-md-6">
                    <!-- Item -->
                    <div class="text-center mb-10 mb-md-0">
                        <i class="hicon hicon-250 hicon-table-tennis text-primary mb-4"></i>
                        <h3 class="h4 h-special-font fw-semibold mb-4 text-body-emphasis">Family Friendly
                        </h3>
                        <p>Spacious environments thoughtfully prepared for couples, families, and memorable shared
                            experiences.</p>
                    </div>
                    <!-- /Item -->
                </div>
            </div>
            <!-- /Features -->
        </div>
    </section>
    <!-- /Facilities -->

    <!-- Rooms -->
    <section id="villasSuites" class="pt-18 pb-8">
        <div class="container">
            <div class="accordion-carousel mb-10">
                <div class="row g-0">
                    <div class="col-12 col-lg-6">
                        <div class="card border-0 bg-transparent" data-cue="fadeIn">
                            <div class="card-body p-0 pe-0 pe-lg-10 pe-xl-12">
                                <!-- Description -->
                                <div class="mb-10">
                                    <span
                                        class="text-uppercase h-sub-font fw-medium ls-2 d-block mb-4 fsm-1 text-secondary">Feel
                                        The Uniqueness</span>
                                    <h2 class="h1 h-special-font mb-4 text-body-emphasis">Discover
                                        {{ $globalVilla->name }}</h2>
                                    <p class="mb-8"> Experience elegant living spaces designed with comfort, privacy, and
                                        tropical charm. Every villa is thoughtfully created to provide a relaxing atmosphere
                                        for memorable stays in Bali.</p>
                                    <ul class="list-unstyled text-uppercase fsm-6 ls-1 fw-semibold row">
                                        <li class="col-12 col-md-6 d-flex align-items-center mb-5">
                                            <i class="hicon hicon-bed MasterRoom-amenitiesIcon text-primary fs-5 me-3"></i>
                                            <span>1 King Bed / 2 Single Beds</span>
                                        </li>
                                        <li class="col-12 col-md-6 d-flex align-items-center mb-5">
                                            <i class="hicon hicon-sqm MasterRoom-amenitiesIcon text-primary fs-5 me-3"></i>
                                            <span>Room size 30 m²</span>
                                        </li>
                                        <li class="col-12 col-md-6 d-flex align-items-center mb-5">
                                            <i class="hicon hicon-city-view text-primary fs-5 me-3"></i>
                                            <span>View Sea & Garden</span>
                                        </li>
                                        <li class="col-12 col-md-6 d-flex align-items-center mb-5">
                                            <i class="hicon hicon-regular-gender text-primary fs-5 me-3"></i>
                                            <span>2 Adults - 1 Children</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Description -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <!-- Image -->
                        <div class="mb-10" data-cue="fadeIn">
                            <div id="crsVilla" class="carousel slide carousel-fade">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a href="./single-villa.html" class="d-block">
                                            <figure
                                                class="figure image-hover-scale image-hover-overlay overflow-hidden mb-0 w-100">
                                                <img src="./assets/frontend/img/rooms/r1.jpg"
                                                    srcset="./assets/frontend/img/rooms/r1@2x.jpg 2x"
                                                    class="figure-img img-fluid mb-0 w-100" alt="...">
                                                <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="./single-villa.html" class="d-block">
                                            <figure
                                                class="figure image-hover-scale image-hover-overlay overflow-hidden mb-0 w-100">
                                                <img src="./assets/frontend/img/rooms/r2.jpg"
                                                    srcset="./assets/frontend/img/rooms/r2@2x.jpg 2x"
                                                    class="figure-img img-fluid mb-0 w-100" alt="...">
                                                <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="./single-villa.html" class="d-block">
                                            <figure
                                                class="figure image-hover-scale image-hover-overlay overflow-hidden mb-0 w-100">
                                                <img src="./assets/frontend/img/rooms/r3.jpg"
                                                    srcset="./assets/frontend/img/rooms/r3@2x.jpg 2x"
                                                    class="figure-img img-fluid mb-0 w-100" alt="...">
                                                <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="./single-villa.html" class="d-block">
                                            <figure
                                                class="figure image-hover-scale image-hover-overlay overflow-hidden mb-0 w-100">
                                                <img src="./assets/frontend/img/rooms/r4.jpg"
                                                    srcset="./assets/frontend/img/rooms/r4@2x.jpg 2x"
                                                    class="figure-img img-fluid mb-0 w-100" alt="...">
                                                <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                                            </figure>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Image -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Rooms -->
@endsection
