@extends('frontend.layouts.app')

@section('header', '')

@section('content')
    <!-- Page title -->
    <section id="title" class="text-body pt-31 pt-lg-34 pb-18 text-center position-relative">
        <div
            class="position-absolute top-50 start-50 translate-middle text-primary opacity-15 display-1 z-n1 text-uppercase d-none d-md-block w-100">
            <span class="d-inline-block big-text">Photos</span>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-8 col-lg-10" data-cue="fadeIn">
                    <span
                        class="text-uppercase h-sub-font fw-medium ls-2 d-block text-secondary mb-4">{{ $globalVilla->name }}</span>
                    <h1 class="display-1 h-special-font mb-3 text-body-emphasis">Gallery</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- /Page title -->
    <!-- Gallery -->
    <section id="gallery" class="pb-18">
        <div class="container">
            <h2 class="d-none">Photos</h2>
            <ul class="nav nav-underline h-special-font fs-5 mb-12 justify-content-center" data-cue="fadeIn">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">All Photos</a>
                </li>

            </ul>
            <div class="row g-4 g-md-6 g-xl-8" data-cues="fadeIn">
                <div class="col-12 col-lg-4 col-md-6">
                    <!-- Photo -->
                    <a href="{{ asset('assets/frontend/img/gallery/g1@2x.jpg') }}" class="glightbox"
                        data-gallery="room-photos" data-glightbox="title: Deluxe Double or Twin Room">
                        <figure class="image-hover-scale image-hover-overlay overflow-hidden rounded mb-0">
                            <img src="{{ asset('assets/frontend/img/gallery/g1.jpg') }}"
                                srcset="{{ asset('assets/frontend/img/gallery/g1@2x.jpg') }} 2x" class="d-block w-100"
                                alt="">
                            <i class="hicon hicon-zoom-bold image-hover-icon fs-4"></i>
                        </figure>
                    </a>
                    <!-- /Photo -->
                </div>
                <div class="col-12 col-lg-4 col-md-6">
                    <!-- Photo -->
                    <a href="{{ asset('assets/frontend/img/gallery/g4@2x.jpg') }}" class="glightbox"
                        data-gallery="room-photos" data-glightbox="title: Deluxe Double or Twin Room">
                        <figure class="image-hover-scale image-hover-overlay overflow-hidden rounded mb-0">
                            <img src="{{ asset('assets/frontend/img/gallery/g4.jpg') }}"
                                srcset="{{ asset('assets/frontend/img/gallery/g4@2x.jpg') }} 2x" class="d-block w-100"
                                alt="">
                            <i class="hicon hicon-zoom-bold image-hover-icon fs-4"></i>
                        </figure>
                    </a>
                    <!-- /Photo -->
                </div>
                <div class="col-12 col-lg-4 col-md-6">
                    <!-- Photo -->
                    <a href="{{ asset('assets/frontend/img/gallery/g5@2x.jpg') }}" class="glightbox"
                        data-gallery="room-photos" data-glightbox="title: Deluxe Double or Twin Room">
                        <figure class="image-hover-scale image-hover-overlay overflow-hidden rounded mb-0">
                            <img src="{{ asset('assets/frontend/img/gallery/g5.jpg') }}"
                                srcset="{{ asset('assets/frontend/img/gallery/g5@2x.jpg') }} 2x" class="d-block w-100"
                                alt="">
                            <i class="hicon hicon-zoom-bold image-hover-icon fs-4"></i>
                        </figure>
                    </a>
                    <!-- /Photo -->
                </div>
                <div class="col-12 col-lg-4 col-md-6">
                    <!-- Photo -->
                    <a href="{{ asset('assets/frontend/img/gallery/g13@2x.jpg') }}" class="glightbox"
                        data-gallery="room-photos" data-glightbox="title: Deluxe Double or Twin Room">
                        <figure class="image-hover-scale image-hover-overlay overflow-hidden rounded mb-0">
                            <img src="{{ asset('assets/frontend/img/gallery/g13.jpg') }}"
                                srcset="{{ asset('assets/frontend/img/gallery/g13@2x.jpg') }} 2x" class="d-block w-100"
                                alt="">
                            <i class="hicon hicon-zoom-bold image-hover-icon fs-4"></i>
                        </figure>
                    </a>
                    <!-- /Photo -->
                </div>
                <div class="col-12 col-lg-4 col-md-6">
                    <!-- Photo -->
                    <a href="{{ asset('assets/frontend/img/gallery/g7@2x.jpg') }}" class="glightbox"
                        data-gallery="room-photos" data-glightbox="title: Deluxe Double or Twin Room">
                        <figure class="image-hover-scale image-hover-overlay overflow-hidden rounded mb-0">
                            <img src="{{ asset('assets/frontend/img/gallery/g7.jpg') }}"
                                srcset="{{ asset('assets/frontend/img/gallery/g7@2x.jpg') }} 2x" class="d-block w-100"
                                alt="">
                            <i class="hicon hicon-zoom-bold image-hover-icon fs-4"></i>
                        </figure>
                    </a>
                    <!-- /Photo -->
                </div>
                <div class="col-12 col-lg-4 col-md-6">
                    <!-- Photo -->
                    <a href="{{ asset('assets/frontend/img/gallery/g16@2x.jpg') }}" class="glightbox"
                        data-gallery="room-photos" data-glightbox="title: Deluxe Double or Twin Room">
                        <figure class="image-hover-scale image-hover-overlay overflow-hidden rounded mb-0">
                            <img src="{{ asset('assets/frontend/img/gallery/g16.jpg') }}"
                                srcset="{{ asset('assets/frontend/img/gallery/g16@2x.jpg') }} 2x" class="d-block w-100"
                                alt="">
                            <i class="hicon hicon-zoom-bold image-hover-icon fs-4"></i>
                        </figure>
                    </a>
                    <!-- /Photo -->
                </div>
                <div class="col-12 col-lg-4 col-md-6">
                    <!-- Photo -->
                    <a href="{{ asset('assets/frontend/img/gallery/g8@2x.jpg') }}" class="glightbox"
                        data-gallery="room-photos" data-glightbox="title: Deluxe Double or Twin Room">
                        <figure class="image-hover-scale image-hover-overlay overflow-hidden rounded mb-0">
                            <img src="{{ asset('assets/frontend/img/gallery/g8.jpg') }}"
                                srcset="{{ asset('assets/frontend/img/gallery/g8@2x.jpg') }} 2x" class="d-block w-100"
                                alt="">
                            <i class="hicon hicon-zoom-bold image-hover-icon fs-4"></i>
                        </figure>
                    </a>
                    <!-- /Photo -->
                </div>
                <div class="col-12 col-lg-4 col-md-6">
                    <!-- Photo -->
                    <a href="{{ asset('assets/frontend/img/gallery/g14@2x.jpg') }}" class="glightbox"
                        data-gallery="room-photos" data-glightbox="title: Deluxe Double or Twin Room">
                        <figure class="image-hover-scale image-hover-overlay overflow-hidden rounded mb-0">
                            <img src="{{ asset('assets/frontend/img/gallery/g14.jpg') }}"
                                srcset="{{ asset('assets/frontend/img/gallery/g14@2x.jpg') }} 2x" class="d-block w-100"
                                alt="">
                            <i class="hicon hicon-zoom-bold image-hover-icon fs-4"></i>
                        </figure>
                    </a>
                    <!-- /Photo -->
                </div>
                <div class="col-12 col-lg-4 col-md-6">
                    <!-- Photo -->
                    <a href="{{ asset('assets/frontend/img/gallery/g9@2x.jpg') }}" class="glightbox"
                        data-gallery="room-photos" data-glightbox="title: Deluxe Double or Twin Room">
                        <figure class="image-hover-scale image-hover-overlay overflow-hidden rounded mb-0">
                            <img src="{{ asset('assets/frontend/img/gallery/g9.jpg') }}"
                                srcset="{{ asset('assets/frontend/img/gallery/g9@2x.jpg') }} 2x" class="d-block w-100"
                                alt="">
                            <i class="hicon hicon-zoom-bold image-hover-icon fs-4"></i>
                        </figure>
                    </a>
                    <!-- /Photo -->
                </div>
                <div class="col-12 col-lg-4 col-md-6">
                    <!-- Photo -->
                    <a href="{{ asset('assets/frontend/img/gallery/g10@2x.jpg') }}" class="glightbox"
                        data-gallery="room-photos" data-glightbox="title: Deluxe Double or Twin Room">
                        <figure class="image-hover-scale image-hover-overlay overflow-hidden rounded mb-0">
                            <img src="{{ asset('assets/frontend/img/gallery/g10.jpg') }}"
                                srcset="{{ asset('assets/frontend/img/gallery/g10@2x.jpg') }} 2x" class="d-block w-100"
                                alt="">
                            <i class="hicon hicon-zoom-bold image-hover-icon fs-4"></i>
                        </figure>
                    </a>
                    <!-- /Photo -->
                </div>
                <div class="col-12 col-lg-4 col-md-6">
                    <!-- Photo -->
                    <a href="{{ asset('assets/frontend/img/gallery/g6@2x.jpg') }}" class="glightbox"
                        data-gallery="room-photos" data-glightbox="title: Deluxe Double or Twin Room">
                        <figure class="image-hover-scale image-hover-overlay overflow-hidden rounded mb-0">
                            <img src="{{ asset('assets/frontend/img/gallery/g6.jpg') }}"
                                srcset="{{ asset('assets/frontend/img/gallery/g6@2x.jpg') }} 2x" class="d-block w-100"
                                alt="">
                            <i class="hicon hicon-zoom-bold image-hover-icon fs-4"></i>
                        </figure>
                    </a>
                    <!-- /Photo -->
                </div>
                <div class="col-12 col-lg-4 col-md-6">
                    <!-- Photo -->
                    <a href="{{ asset('assets/frontend/img/gallery/g15@2x.jpg') }}" class="glightbox"
                        data-gallery="room-photos" data-glightbox="title: Deluxe Double or Twin Room">
                        <figure class="image-hover-scale image-hover-overlay overflow-hidden rounded mb-0">
                            <img src="{{ asset('assets/frontend/img/gallery/g15.jpg') }}"
                                srcset="{{ asset('assets/frontend/img/gallery/g15@2x.jpg') }} 2x" class="d-block w-100"
                                alt="">
                            <i class="hicon hicon-zoom-bold image-hover-icon fs-4"></i>
                        </figure>
                    </a>
                    <!-- /Photo -->
                </div>
                <div class="col-12 col-lg-4 col-md-6">
                    <!-- Photo -->
                    <a href="{{ asset('assets/frontend/img/gallery/g11@2x.jpg') }}" class="glightbox"
                        data-gallery="room-photos" data-glightbox="title: Deluxe Double or Twin Room">
                        <figure class="image-hover-scale image-hover-overlay overflow-hidden rounded mb-0">
                            <img src="{{ asset('assets/frontend/img/gallery/g11.jpg') }}"
                                srcset="{{ asset('assets/frontend/img/gallery/g11@2x.jpg') }} 2x" class="d-block w-100"
                                alt="">
                            <i class="hicon hicon-zoom-bold image-hover-icon fs-4"></i>
                        </figure>
                    </a>
                    <!-- /Photo -->
                </div>
                <div class="col-12 col-lg-4 col-md-6">
                    <!-- Photo -->
                    <a href="{{ asset('assets/frontend/img/gallery/g17@2x.jpg') }}" class="glightbox"
                        data-gallery="room-photos" data-glightbox="title: Deluxe Double or Twin Room">
                        <figure class="image-hover-scale image-hover-overlay overflow-hidden rounded mb-0">
                            <img src="{{ asset('assets/frontend/img/gallery/g17.jpg') }}"
                                srcset="{{ asset('assets/frontend/img/gallery/g17@2x.jpg') }} 2x" class="d-block w-100"
                                alt="">
                            <i class="hicon hicon-zoom-bold image-hover-icon fs-4"></i>
                        </figure>
                    </a>
                    <!-- /Photo -->
                </div>
                <div class="col-12 col-lg-4 col-md-6">
                    <!-- Photo -->
                    <a href="{{ asset('assets/frontend/img/gallery/g12@2x.jpg') }}" class="glightbox"
                        data-gallery="room-photos" data-glightbox="title: Deluxe Double or Twin Room">
                        <figure class="image-hover-scale image-hover-overlay overflow-hidden rounded mb-0">
                            <img src="{{ asset('assets/frontend/img/gallery/g12.jpg') }}"
                                srcset="{{ asset('assets/frontend/img/gallery/g12@2x.jpg') }} 2x" class="d-block w-100"
                                alt="">
                            <i class="hicon hicon-zoom-bold image-hover-icon fs-4"></i>
                        </figure>
                    </a>
                    <!-- /Photo -->
                </div>
            </div>
        </div>
    </section>
    <!-- /Gallery -->
@endsection
