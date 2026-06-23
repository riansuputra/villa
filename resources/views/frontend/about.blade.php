@extends('frontend.layouts.app')

@section('header', '')

@section('content')
    <!-- Page title -->
    <section id="title" class="text-body pt-31 pt-lg-34 pb-18 text-center position-relative">
        <div
            class="position-absolute top-50 start-50 translate-middle text-primary opacity-15 display-1 z-n1 text-uppercase d-none d-md-block w-100">
            <span class="d-inline-block big-text">Villa</span>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-8 col-lg-10" data-cue="fadeIn">
                    <span
                        class="text-uppercase h-sub-font fw-medium ls-2 d-block text-secondary mb-4">{{ $globalVilla->name }}</span>
                    <h1 class="display-1 h-special-font mb-3 text-body-emphasis">About</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- /Page title -->
    <!-- About 1 -->
    <section id="about-1" class="pb-19">
        <div class="container">
            <div class="row g-0 g-lg-7">
                <div class="col-12 col-lg-6 order-1 order-lg-0">
                    <!-- Image -->
                    <div class="mb-7" data-cue="fadeIn">
                        <figure class="figure mb-0 d-block">
                            <img src="{{ asset('assets/frontend/img/about/a1.jpg') }}"
                                srcset="{{ asset('assets/frontend/img/about/a1@2x.jpg') }} 2x"
                                class="figure-img img-fluid mb-0 w-100" alt="...">
                        </figure>
                    </div>
                    <!-- /Image -->
                </div>
                <div class="col-12 col-lg-6 order-0 order-lg-1">
                    <!-- Description -->
                    <div class="card border-0 bg-transparent mb-7 mb-lg-0" data-cue="fadeIn">
                        <div class="card-body p-md-10 p-xl-12 bg-body-tertiary">
                            <div>
                                <span
                                    class="text-uppercase h-sub-font fw-medium ls-2 d-block text-secondary fsm-1 mb-4">Explore
                                    {{ $globalVilla->name }}</span>
                                <h2 class="h1 h-special-font mb-6 text-body-emphasis">The Story of {{ $globalVilla->name }}
                                </h2>
                                <p class="mb-0"> {{ $globalVilla->name }} was created to offer a comfortable and memorable
                                    stay
                                    inspired by the beauty and atmosphere of Bali. Designed with a balance of modern
                                    elegance and tropical living, every space is thoughtfully arranged to create moments of
                                    relaxation and connection.

                                    Whether traveling as a couple, with family, or simply looking for a peaceful escape, our
                                    villas are designed to provide privacy, comfort, and a welcoming experience throughout
                                    every stay.

                                    More than a destination, {{ $globalVilla->name }} is a place to slow down, enjoy
                                    meaningful
                                    moments, and experience the charm of Bali in a refined and comfortable setting. </p>
                            </div>
                        </div>
                    </div>
                    <!-- Description -->
                    <!-- Image -->
                    <div class="box-img-indent z-1" data-cue="fadeIn">
                        <div class="img-indent img-indent-start w-100 ps-0 ps-lg-7 pt-0 pt-lg-7">
                            <figure class="figure mb-0 mb-7 mb-lg-0 d-block">
                                <img src="{{ asset('assets/frontend/img/about/a2.jpg') }}"
                                    srcset="{{ asset('assets/frontend/img/about/a2@2x.jpg') }} 2x"
                                    class="figure-img img-fluid mb-0 w-100" alt="...">
                            </figure>
                        </div>
                    </div>
                    <!-- /Image -->
                </div>
            </div>
        </div>
    </section>
    <!-- /About 1 -->
@endsection
