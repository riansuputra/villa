@extends('frontend.layouts.app')

@section('header', '')

@section('content')
    <!-- Page title -->
    <section id="title" class="text-body pt-31 pt-lg-34 pb-18 text-center position-relative">
        <div
            class="position-absolute top-50 start-50 translate-middle text-primary opacity-15 display-1 z-n1 d-none d-md-block text-uppercase">
            <span class="d-inline-block big-text">Values</span>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-8 col-lg-10" data-cue="fadeIn">
                    <span class="text-uppercase h-sub-font fw-medium ls-2 d-block text-secondary">The Salibu Resort</span>
                    <h1 class="display-1 h-special-font mb-3 text-body-emphasis">Special Offers</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Special Offers</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- /Page title -->
    <!-- Offer 1 -->
    <section id="offer-1" class="pb-18">
        <div class="container">
            <div class="pe-0 pe-xl-16">
                <div class="row g-0">
                    <div class="col-12 col-lg-6 order-1 order-lg-0">
                        <!-- Image -->
                        <a href="./single-offer.html" class="d-block">
                            <figure class="figure image-hover-scale image-hover-overlay overflow-hidden mb-0 d-block">
                                <img src="{{ asset('assets/frontend/img/collection/c15.jpg') }}"
                                    srcset="{{ asset('assets/frontend/img/collection/c15@2x.jpg') }} 2x"
                                    class="figure-img img-fluid mb-0 w-100" alt="...">
                                <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                            </figure>
                        </a>
                        <!-- /Image -->
                    </div>
                    <div class="col-12 col-lg-6 order-0 order-lg-1">
                        <div class="card border-0 bg-body-tertiary">
                            <div class="card-body p-md-10 p-xl-12">
                                <!-- Description -->
                                <span
                                    class="text-uppercase h-sub-font fw-medium ls-2 d-block mb-4 fsm-1 text-secondary">Special
                                    Offers</span>
                                <h2 class="h1 h-special-font mb-4 text-body-emphasis">10% off Spa Services</h2>
                                <p class="mb-8"> Mollis blandit elaboraret nam id, mel probo illum possit an, aeque
                                    maiorum appellantur et vis. Eam nisl utroque mandamus eu, populo laoreet ex usu. </p>
                                <a href="./single-offer.html" class="btn btn-primary ps-8 pe-8 h-special-font mw-160">
                                    <span>Book Now</span>
                                    <i class="hicon hicon-thin-circle-arrow-left"></i>
                                </a>
                                <!-- Description -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Offer 1 -->
@endsection
