@extends('frontend.layouts.app')

@section('header', '')

@section('content')
    <!-- Page title -->
    <section id="title" class="pt-30 text-center">
        <div class="container">
            <div data-cue="fadeIn">
                <span class="text-uppercase h-sub-font fw-medium ls-2 d-block mb-4 text-secondary">My Account</span>
                <h1 class="display-4 h-special-font mb-3 text-body-emphasis">Reservation</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-12">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Villas & Suites</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Reservation</li>
                    </ol>
                </nav>
                <div class="position-relative m-6">
                    <div class="progress bg-body-secondary" role="progressbar" aria-label="Progress" aria-valuenow="50"
                        aria-valuemin="0" aria-valuemax="100" style="height: 2px;">
                        <div class="progress-bar" style="width: 0%"></div>
                    </div>
                    <a href="javascript:void(0);" class="position-absolute top-0 start-0 translate-middle"></a>
                    <a href="javascript:void(0);"
                        class="position-absolute top-0 start-33 translate-middle btn btn-square btn-primary rounded-circle">1</a>
                    <a href="javascript:void(0);"
                        class="position-absolute top-0 start-66 translate-middle btn btn-square btn-secondary rounded-circle">2</a>
                    <a href="javascript:void(0);" class="position-absolute top-0 start-100 translate-middle"></a>
                </div>
            </div>
        </div>
    </section>
    <!-- /Page title -->
    <!-- content -->
    <!-- Dashboard -->
    <section id="dashboard" class="pt-19 pb-19">
        <div class="container">
            <div class="row g-0">
                <div class="col-12 col-xl-9 pe-xl-8" data-cue="fadeIn">
                    <!-- Check date -->
                    <form class="mb-6" method="post" action="./reservation-step-1.html">
                        <div class="row g-2">
                            <div class="col-12 col-lg-5">
                                <!-- Input date -->
                                <div class="mb-3">
                                    <div class="position-relative">
                                        <label
                                            class="hicon hicon-menu-calendar position-absolute top-50 start-0 translate-middle-y ms-5 z-1"
                                            for="txtCheckdate1"></label>
                                        <input id="txtCheckdate1" type="text"
                                            class="check-date form-control shadow-sm cursor-pointer ps-11"
                                            value="Mar 19 2023 - Mar 21 2023" placeholder="" readonly>
                                    </div>
                                </div>
                                <!-- /Input date -->
                            </div>
                            <div class="col-12 col-lg-7">
                                <div class="row g-2">
                                    <div class="col-12 col-lg-7">
                                        <!-- Input number of guests -->
                                        <div class="mb-3">
                                            <div class="position-relative">
                                                <label
                                                    class="hicon hicon-couple position-absolute top-50 start-0 translate-middle-y ms-5 z-1"
                                                    for="btnCheckGuest"></label>
                                                <div class="dropdown" data-total-guest="">
                                                    <button class="form-select w-100 text-start shadow-sm ps-11"
                                                        id="btnCheckGuest" data-bs-auto-close="outside" type="button"
                                                        data-bs-display="static" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <span class="text-nowrap">
                                                            <span data-total-adults=""></span>, <span
                                                                data-total-children=""></span>
                                                        </span>
                                                    </button>
                                                    <ul class="dropdown-menu animate slideIn p-6 border-0 shadow">
                                                        <li>
                                                            <div class="mb-3">
                                                                <label for="txtCheckAdults"
                                                                    class="form-label">Adults</label>
                                                                <div class="input-group shadow-sm">
                                                                    <button
                                                                        class="btn btn-light bg-body-tertiary text-secondary border"
                                                                        type="button" data-minus-adults="">
                                                                        <i class="hicon hicon-minus-thin small"></i>
                                                                    </button>
                                                                    <input type="text" class="form-control text-center"
                                                                        placeholder="Adults" value="1"
                                                                        aria-label="Adults" id="txtCheckAdults"
                                                                        data-adults-max="10" data-input-adults="">
                                                                    <button
                                                                        class="btn btn-light bg-body-tertiary text-secondary border"
                                                                        type="button" data-plus-adults="">
                                                                        <i class="hicon hicon-plus-thin small"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="mb-1">
                                                                <label for="txtCheckChildren"
                                                                    class="form-label">Children</label>
                                                                <div class="input-group shadow-sm">
                                                                    <button
                                                                        class="btn btn-light bg-body-tertiary text-secondary border"
                                                                        type="button" data-minus-children="">
                                                                        <i class="hicon hicon-minus-thin small"></i>
                                                                    </button>
                                                                    <input type="text" class="form-control text-center"
                                                                        placeholder="Children" value="0"
                                                                        aria-label="Children" id="txtCheckChildren"
                                                                        data-children-max="20" data-input-children="">
                                                                    <button
                                                                        class="btn btn-light bg-body-tertiary text-secondary border"
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
                                    <div class="col-12 col-lg-5">
                                        <!-- Button -->
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-primary w-100 fw-medium">
                                                <i class="hicon hicon-search-box me-1"></i>
                                                <span>Search</span>
                                            </button>
                                        </div>
                                        <!-- /Button -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- /Check date -->
                    <div class="mb-8">
                        <!-- Room -->
                        <div class="card card-selected mb-5 shadow-sm">
                            <div class="card-body pb-2">
                                <!-- Room name -->
                                <h3 class="card-title h3">
                                    <a href="./single-villa.html" target="_blank"
                                        class="text-body-emphasis link-hover-primary h-special-font">Coconut Tree
                                        Villa</a>
                                </h3>
                                <!-- /Room name -->
                                <div class="row g-0">
                                    <div class="col-12 col-lg-4 col-md-6">
                                        <!-- Room image -->
                                        <div class="pe-0 pe-md-8 mb-6">
                                            <a href="./single-villa.html">
                                                <figure
                                                    class="image-hover-scale image-hover-overlay rounded overflow-hidden mb-0">
                                                    <img src="./assets/img/rooms/r18.jpg"
                                                        srcset="./assets/img/rooms/r18@2x.jpg 2x" class="img-fluid w-100"
                                                        alt="">
                                                    <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- /Room image -->
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-12 order-2 order-lg-2 order-md-3">
                                        <!-- Room info -->
                                        <div class="small">
                                            <div class="mb-8">
                                                <h4 class="mb-3 h6 fw-semibold">Featured Amenities</h4>
                                                <div class="row">
                                                    <div class="col-12 col-md-6"> 1 King Bed/2 Single Beds </div>
                                                    <div class="col-12 col-md-6"> Area: 30 m²/323 ft² </div>
                                                    <div class="col-12 col-md-6"> 2 Adults - 1 Children </div>
                                                    <div class="col-12 col-md-6"> No Smoking </div>
                                                </div>
                                            </div>
                                            <div class="mb-8">
                                                <h4 class="mb-3 h6 fw-semibold">Price includes</h4>
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <span class="text-success fw-medium">Free Cancellation</span>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <span class="text-success fw-medium">Breakfast Included</span>
                                                    </div>
                                                </div>
                                                <div class="form-check mt-3">
                                                    <input class="form-check-input shadow-sm" type="checkbox"
                                                        value="" id="chkExtraBed1">
                                                    <label class="form-check-label" for="chkExtraBed1">Extra bed
                                                        (<sup>$</sup>15.00)</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Room info -->
                                    </div>
                                    <div class="col-12 col-lg-2 col-md-6 order-3 order-lg-3 order-md-2">
                                        <!-- Room price -->
                                        <div class="mb-6">
                                            <div class="mb-1">
                                                <strong
                                                    class="fw-semibold fs-5"><sup>$</sup>1,195.00</strong><small>/night</small>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <strong
                                                    class="fw-semibold text-secondary small me-3"><del><sup>$</sup>110.00</del></strong>
                                                <span class="badge bg-danger">-16%</span>
                                            </div>
                                        </div>
                                        <!-- /Room price -->
                                        <!-- Select/Remove-->
                                        <div class="mb-6">
                                            <select class="form-select dselect mb-3 shadow-sm" data-dselect-size="sm"
                                                data-dselect-position="end">
                                                <option>Quantity</option>
                                                <option value="1" selected>1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <a class="btn btn-sm btn-light border bg-body-tertiary text-danger bg-light d-block shadow-sm"
                                                href="javascript:;">
                                                <i class="hicon hicon-80 hicon-line-close"></i>
                                                <span>Remove</span>
                                            </a>
                                        </div>
                                        <!-- /Select/Remove-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Room -->
                        <!-- Room -->
                        <div class="card card-selected mb-5 shadow-sm">
                            <div class="card-body pb-2">
                                <!-- Room name -->
                                <h3 class="card-title h3">
                                    <a href="./single-villa.html" target="_blank"
                                        class="text-body-emphasis link-hover-primary h-special-font">Garden View
                                        Suite</a>
                                </h3>
                                <!-- /Room name -->
                                <div class="row g-0">
                                    <div class="col-12 col-lg-4 col-md-6">
                                        <!-- Room image -->
                                        <div class="pe-0 pe-md-8 mb-6">
                                            <a href="./single-villa.html" target="_blank">
                                                <figure
                                                    class="image-hover-scale image-hover-overlay rounded overflow-hidden mb-0">
                                                    <img src="./assets/img/rooms/r19.jpg"
                                                        srcset="./assets/img/rooms/r19@2x.jpg 2x" class="img-fluid w-100"
                                                        alt="">
                                                    <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- /Room image -->
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-12 order-2 order-lg-2 order-md-3">
                                        <!-- Room info -->
                                        <div class="small">
                                            <div class="mb-8">
                                                <h4 class="mb-3 h6 fw-semibold">Featured Amenities</h4>
                                                <div class="row">
                                                    <div class="col-12 col-md-6"> 1 King Bed/2 Single Beds </div>
                                                    <div class="col-12 col-md-6"> Area: 30 m²/323 ft² </div>
                                                    <div class="col-12 col-md-6"> 2 Adults - 1 Children </div>
                                                    <div class="col-12 col-md-6"> No Smoking </div>
                                                </div>
                                            </div>
                                            <div class="mb-8">
                                                <h4 class="mb-3 h6 fw-semibold">Price includes</h4>
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <span class="text-success fw-medium">Free Cancellation</span>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <span class="text-success fw-medium">Breakfast Included</span>
                                                    </div>
                                                </div>
                                                <div class="form-check mt-3">
                                                    <input class="form-check-input shadow-sm" checked type="checkbox"
                                                        value="" id="chkExtraBed2">
                                                    <label class="form-check-label" for="chkExtraBed2">Extra bed
                                                        (<sup>$</sup>15.00)</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Room info -->
                                    </div>
                                    <div class="col-12 col-lg-2 col-md-6 order-3 order-lg-3 order-md-2">
                                        <!-- Room price -->
                                        <div class="mb-6">
                                            <div class="mb-1">
                                                <strong
                                                    class="fw-semibold fs-5"><sup>$</sup>1,105.00</strong><small>/night</small>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <strong
                                                    class="fw-semibold text-secondary small me-3"><del><sup>$</sup>120.00</del></strong>
                                                <span class="badge bg-danger">-15%</span>
                                            </div>
                                        </div>
                                        <!-- /Room price -->
                                        <!-- Select/Remove-->
                                        <div class="mb-6">
                                            <select class="form-select dselect mb-3 shadow-sm" data-dselect-size="sm"
                                                data-dselect-position="end">
                                                <option>Quantity</option>
                                                <option value="1" selected>1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <a class="btn btn-sm btn-light border bg-body-tertiary text-danger bg-light d-block shadow-sm"
                                                href="javascript:;">
                                                <i class="hicon hicon-80 hicon-line-close"></i>
                                                <span>Remove</span>
                                            </a>
                                        </div>
                                        <!-- /Select/Remove-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Room -->
                        <!-- Room -->
                        <div class="card mb-5 shadow-sm">
                            <div class="card-body pb-2">
                                <!-- Room name -->
                                <h3 class="card-title h3">
                                    <a href="./single-villa.html" target="_blank"
                                        class="text-body-emphasis link-hover-primary h-special-font">Tropical Garden
                                        Villa</a>
                                </h3>
                                <!-- /Room name -->
                                <div class="row g-0">
                                    <div class="col-12 col-lg-4 col-md-6">
                                        <!-- Room image -->
                                        <div class="pe-0 pe-md-8 mb-6">
                                            <a href="./single-villa.html" target="_blank">
                                                <figure
                                                    class="image-hover-scale image-hover-overlay rounded overflow-hidden mb-0">
                                                    <img src="./assets/img/rooms/r20.jpg"
                                                        srcset="./assets/img/rooms/r20@2x.jpg 2x" class="img-fluid w-100"
                                                        alt="">
                                                    <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- /Room image -->
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-12 order-2 order-lg-2 order-md-3">
                                        <!-- Room info -->
                                        <div class="small">
                                            <div class="mb-8">
                                                <h4 class="mb-3 h6 fw-semibold">Featured Amenities</h4>
                                                <div class="row">
                                                    <div class="col-12 col-md-6"> 1 King Bed/2 Single Beds </div>
                                                    <div class="col-12 col-md-6"> Area: 30 m²/323 ft² </div>
                                                    <div class="col-12 col-md-6"> 2 Adults - 1 Children </div>
                                                    <div class="col-12 col-md-6"> No Smoking </div>
                                                </div>
                                            </div>
                                            <div class="mb-8">
                                                <h4 class="mb-3 h6 fw-semibold">Price includes</h4>
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <span class="text-success fw-medium">Free Cancellation</span>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <span class="text-success fw-medium">Breakfast Included</span>
                                                    </div>
                                                </div>
                                                <div class="form-check mt-3">
                                                    <input class="form-check-input shadow-sm" type="checkbox"
                                                        value="" id="chkExtraBed3">
                                                    <label class="form-check-label" for="chkExtraBed3">Extra bed
                                                        (<sup>$</sup>15.00)</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Room info -->
                                    </div>
                                    <div class="col-12 col-lg-2 col-md-6 order-3 order-lg-3 order-md-2">
                                        <!-- Room price -->
                                        <div class="mb-5">
                                            <div class="mb-1">
                                                <strong
                                                    class="fw-semibold fs-5"><sup>$</sup>1,089.00</strong><small>/night</small>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <strong
                                                    class="fw-semibold text-secondary small me-3"><del><sup>$</sup>105.00</del></strong>
                                                <span class="badge bg-danger">-12%</span>
                                            </div>
                                        </div>
                                        <!-- /Room price -->
                                        <!-- Select/Remove-->
                                        <div class="mb-5">
                                            <select class="form-select dselect mb-3 shadow-sm" data-dselect-size="sm"
                                                data-dselect-position="end">
                                                <option>Quantity</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <a class="btn btn-sm btn-secondary d-block shadow-sm" href="javascript:;">
                                                <i class="hicon hicon-80 hicon-check-valid-state"></i>
                                                <span>Select</span>
                                            </a>
                                        </div>
                                        <!-- /Select/Remove-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Room -->
                        <!-- Room -->
                        <div class="card mb-5 shadow-sm">
                            <div class="card-body pb-2">
                                <!-- Room name -->
                                <h3 class="card-title h3 text-body-emphasis">
                                    <a href="./single-villa.html" target="_blank"
                                        class="text-body-emphasis link-hover-primary h-special-font">Lake View
                                        Suite</a>
                                </h3>
                                <!-- /Room name -->
                                <div class="row g-0">
                                    <div class="col-12 col-lg-4 col-md-6">
                                        <!-- Room image -->
                                        <div class="pe-0 pe-md-8 mb-6">
                                            <a href="./single-villa.html" target="_blank">
                                                <figure
                                                    class="image-hover-scale image-hover-overlay rounded overflow-hidden mb-0">
                                                    <img src="./assets/img/rooms/r21.jpg"
                                                        srcset="./assets/img/rooms/r21@2x.jpg 2x" class="img-fluid w-100"
                                                        alt="">
                                                    <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- /Room image -->
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-12 order-2 order-lg-2 order-md-3">
                                        <!-- Room info -->
                                        <div class="small">
                                            <div class="mb-8">
                                                <h4 class="mb-3 h6 fw-semibold">Featured Amenities</h4>
                                                <div class="row">
                                                    <div class="col-12 col-md-6"> 1 King Bed/2 Single Beds </div>
                                                    <div class="col-12 col-md-6"> Area: 30 m²/323 ft² </div>
                                                    <div class="col-12 col-md-6"> 2 Adults - 1 Children </div>
                                                    <div class="col-12 col-md-6"> No Smoking </div>
                                                </div>
                                            </div>
                                            <div class="mb-8">
                                                <h4 class="mb-3 h6 fw-semibold">Price includes</h4>
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <span class="text-success fw-medium">Free Cancellation</span>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <span class="text-success fw-medium">Breakfast Included</span>
                                                    </div>
                                                </div>
                                                <div class="form-check mt-3">
                                                    <input class="form-check-input shadow-sm" type="checkbox"
                                                        value="" id="chkExtraBed4">
                                                    <label class="form-check-label" for="chkExtraBed4">Extra bed
                                                        (<sup>$</sup>15.00)</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Room info -->
                                    </div>
                                    <div class="col-12 col-lg-2 col-md-6 order-3 order-lg-3 order-md-2">
                                        <!-- Room price -->
                                        <div class="mb-5">
                                            <div class="mb-1">
                                                <strong
                                                    class="fw-semibold fs-5"><sup>$</sup>990.00</strong><small>/night</small>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <strong
                                                    class="fw-semibold text-secondary small me-3"><del><sup>$</sup>110.00</del></strong>
                                                <span class="badge bg-danger">-14%</span>
                                            </div>
                                        </div>
                                        <!-- /Room price -->
                                        <!-- Select/Remove-->
                                        <div class="mb-5">
                                            <select class="form-select dselect mb-3 shadow-sm" data-dselect-size="sm"
                                                data-dselect-position="end">
                                                <option>Quantity</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <a class="btn btn-sm btn-secondary d-block shadow-sm" href="javascript:;">
                                                <i class="hicon hicon-80 hicon-check-valid-state"></i>
                                                <span>Select</span>
                                            </a>
                                        </div>
                                        <!-- /Select/Remove-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Room -->
                    </div>
                </div>
                <div class="col-12 col-xl-3">
                    <!-- Booking details -->
                    <div class="sticky-top sticky-top-120 mb-10" data-cue="fadeIn">
                        <div class="card shadow-sm" data-aos-delay="300" data-aos="fade-up">
                            <div class="card-body small">
                                <h2 class="h3 h-special-font">Booking details</h2>
                                <hr>
                                <!-- Book Date -->
                                <div>
                                    <div>
                                        <i class="hicon hicon-menu-calendar"></i>
                                        <span>Check-In: <strong>19 Jul 2022</strong></span>
                                    </div>
                                    <div>
                                        <i class="hicon hicon-menu-calendar"></i>
                                        <span>Check-Out: <strong>20 Jul 2022</strong></span>
                                    </div>
                                    <em>(Duration of stay: <strong>1 Night</strong>)</em>
                                    <div class="mt-3">
                                        <span>
                                            <i class="hicon hicon-adults-line"></i><span>Adults:
                                            </span><strong>1</strong>
                                        </span>
                                        <span>-</span>
                                        <span>
                                            <i class="hicon hicon-child-line"></i><span>Children:
                                            </span><strong>0</strong>
                                        </span>
                                    </div>
                                </div>
                                <!-- Book Date -->
                                <hr>
                                <!-- Room list -->
                                <div>
                                    <!-- Room Item -->
                                    <div class="mb-3">
                                        <h3 class="fs-6 mb-0 d-flex align-items-center">
                                            <span>Coconut Tree Villa</span>
                                            <a href="#"
                                                class="hicon hicon-line-close hicon-70 hicon-bold text-danger fs-6 ms-2"></a>
                                        </h3>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Quantity <strong>1</strong>: </span>
                                            <strong class="fw-semibold fsm-1"><sup>$</sup>1,169.00</strong>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Extra bed: </span>
                                            <strong class="fw-semibold fsm-1"><sup>$</sup>150.00</strong>
                                        </div>
                                    </div>
                                    <!-- Room Item -->
                                    <!-- Room Item -->
                                    <div class="mb-3">
                                        <h3 class="fs-6 mb-0 d-flex align-items-center">
                                            <span>Garden View Suite</span>
                                            <a href="#"
                                                class="hicon hicon-line-close hicon-70 hicon-bold text-danger fs-6 ms-2"><i
                                                    class=""></i></a>
                                        </h3>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Quantity <strong>2</strong>: </span>
                                            <strong class="fw-semibold fsm-1"><sup>$</sup>2,690.00</strong>
                                        </div>
                                    </div>
                                    <!-- Room Item -->
                                </div>
                                <!-- Room list -->
                                <hr>
                                <!-- Total Amount-->
                                <div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h3 class="h4 mb-0">Total:</h3>
                                        <strong class="fw-bold fs-4"><sup>$</sup>3,699.00</strong>
                                    </div>
                                    <p><em>*All taxes and fees included</em></p>
                                </div>
                                <!-- Total Amount-->
                                <hr>
                                <!-- Next step -->
                                <div class="text-end pt-2 pb-2">
                                    <a class="btn btn-primary mw-160" href="./reservation-step-2.html">
                                        <span>Next step</span>
                                        <i class="hicon hicon-flights-one-ways"></i>
                                    </a>
                                </div>
                                <!-- Next step -->
                            </div>
                        </div>
                    </div>
                    <!-- /Booking details -->
                </div>
            </div>
        </div>
    </section>
    <!-- /Dashboard -->
    <!-- /content -->
@endsection
