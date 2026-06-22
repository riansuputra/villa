@extends('frontend.layouts.app')

@section('header', '')

@section('content')
    <!-- Page title -->
    <section id="title" class="text-body pt-31 pt-lg-34 pb-18 text-center position-relative">
        <div
            class="position-absolute top-50 start-50 translate-middle text-primary opacity-15 display-1 z-n1 text-uppercase d-none d-md-block w-100">
            <span class="d-inline-block big-text">Salibu</span>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-8 col-lg-10" data-cue="fadeIn">
                    <span class="text-uppercase h-sub-font fw-medium ls-2 d-block text-secondary mb-4">The Salibu
                        Resort</span>
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
                                    Salibu</span>
                                <h2 class="h1 h-special-font mb-6 text-body-emphasis">Salibu's Story</h2>
                                <p class="mb-0"> Lorem ipsum dolor sit amet, nisl scaevola has ne, veniam detracto et mel,
                                    ei eum dolor partiendo repudiare. Docendi erroribus at has, nonumy equidem mea. Eam an
                                    assum dicant, quod augue nullam eos no. Pri ex habeo tractatos percipitur, option
                                    urbanitas eum ex, te possit aliquam utroque per. Dolorum detraxit ad eam, in usu quod
                                    omnesque consequuntur, dicit congue meliore vis ei. Ius nominati dissentiet eu, sit ut
                                    doming facilisis sententiae. Partiendo sententiae mel ea, duis saepe oblique vix in. Ne
                                    sed vivendo adipiscing, et vel quem tollit. Quod rebum te sed. Saepe scribentur per ei.
                                    Vim ad vidit hendrerit reformidans, quo eu nibh labitur, labore aliquid usu ad. Cum in
                                    melius adolescens. </p>
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
    <!-- Team -->
    <section id="team" class="pt-18 pb-10">
        <div class="container">
            <!-- Heading -->
            <div class="mb-12 text-center" data-cues="fadeIn">
                <span class="text-uppercase h-sub-font fw-medium ls-2 d-block text-secondary fsm-1 mb-4">Salibu Seaside
                    Resort</span>
                <h2 class="h1 h-special-font mb-6 text-body-emphasis">Meet our team</h2>
            </div>
            <!-- /Heading -->
            <!-- Team slider -->
            <div class="team-slide splide mb-5">
                <div class="splide__arrows">
                    <button class="splide__arrow splide__arrow--prev splide__arrow__primary ms-4 ms-md-0">
                        <i class="hicon hicon-edge-arrow-left"></i>
                    </button>
                    <button class="splide__arrow splide__arrow--next splide__arrow__primary me-4 me-md-0">
                        <i class="hicon hicon-edge-arrow-right"></i>
                    </button>
                </div>
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <!-- team item -->
                            <div class="mb-8 text-center">
                                <figure class="mb-5">
                                    <img src="{{ asset('assets/frontend/img/team/t5.jpg') }}"
                                        srcset="{{ asset('assets/frontend/img/team/t5@2x.jpg') }} 2x"
                                        class="w-65 rounded-circle" alt="">
                                </figure>
                                <div>
                                    <h3 class="h5 mb-1 text-uppercase ff-sub ls-1 text-body-emphasis">John Doe</h3>
                                    <span class="text-secondary small d-block mb-2">CEO</span>
                                    <p>Lorem ipsum dolor sit amet, ad tota repudiare cum.</p>
                                    <ul class="list-inline opacity-50">
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
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-brand-twitter" width="20"
                                                    height="20" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path
                                                        d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013z">
                                                    </path>
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
                                                    class="icon icon-tabler icon-tabler-brand-pinterest" width="20"
                                                    height="20" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M8 20l4 -9"></path>
                                                    <path
                                                        d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7">
                                                    </path>
                                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /team item -->
                        </li>
                        <li class="splide__slide">
                            <!-- team item -->
                            <div class="mb-8 text-center">
                                <figure class="mb-5">
                                    <img src="{{ asset('assets/frontend/img/team/t1.jpg') }}"
                                        srcset="{{ asset('assets/frontend/img/team/t1@2x.jpg') }} 2x"
                                        class="w-65 rounded-circle" alt="">
                                </figure>
                                <div>
                                    <h3 class="h5 mb-1 text-uppercase ff-sub ls-1 text-body-emphasis">Emily Smith</h3>
                                    <span class="text-secondary small d-block mb-2">Co-Founder</span>
                                    <p>Lorem ipsum dolor sit amet, ad tota repudiare cum.</p>
                                    <ul class="list-inline opacity-50">
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
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-brand-twitter" width="20"
                                                    height="20" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path
                                                        d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013z">
                                                    </path>
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
                                                    class="icon icon-tabler icon-tabler-brand-pinterest" width="20"
                                                    height="20" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M8 20l4 -9"></path>
                                                    <path
                                                        d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7">
                                                    </path>
                                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /team item -->
                        </li>
                        <li class="splide__slide">
                            <!-- team item -->
                            <div class="mb-8 text-center">
                                <figure class="mb-5">
                                    <img src="{{ asset('assets/frontend/img/team/t2.jpg') }}"
                                        srcset="{{ asset('assets/frontend/img/team/t2@2x.jpg') }} 2x"
                                        class="w-65 rounded-circle" alt="">
                                </figure>
                                <div>
                                    <h3 class="h5 mb-1 text-uppercase ff-sub ls-1 text-body-emphasis">Alex Mark</h3>
                                    <span class="text-secondary small d-block mb-2">Co-Founder</span>
                                    <p>Lorem ipsum dolor sit amet, ad tota repudiare cum.</p>
                                    <ul class="list-inline opacity-50">
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
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-brand-twitter" width="20"
                                                    height="20" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path
                                                        d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013z">
                                                    </path>
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
                                                    class="icon icon-tabler icon-tabler-brand-pinterest" width="20"
                                                    height="20" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M8 20l4 -9"></path>
                                                    <path
                                                        d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7">
                                                    </path>
                                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /team item -->
                        </li>
                        <li class="splide__slide">
                            <!-- team item -->
                            <div class="mb-8 text-center">
                                <figure class="mb-5">
                                    <img src="{{ asset('assets/frontend/img/team/t3.jpg') }}"
                                        srcset="{{ asset('assets/frontend/img/team/t3@2x.jpg') }} 2x"
                                        class="w-65 rounded-circle" alt="">
                                </figure>
                                <div>
                                    <h3 class="h5 mb-1 text-uppercase ff-sub ls-1 text-body-emphasis">Ariol Deep</h3>
                                    <span class="text-secondary small d-block mb-2">Sales Manager</span>
                                    <p>Lorem ipsum dolor sit amet, ad tota repudiare cum.</p>
                                    <ul class="list-inline opacity-50">
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
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-brand-twitter" width="20"
                                                    height="20" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path
                                                        d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013z">
                                                    </path>
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
                                                    class="icon icon-tabler icon-tabler-brand-pinterest" width="20"
                                                    height="20" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M8 20l4 -9"></path>
                                                    <path
                                                        d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7">
                                                    </path>
                                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /team item -->
                        </li>
                        <li class="splide__slide">
                            <!-- team item -->
                            <div class="mb-8 text-center">
                                <figure class="mb-5">
                                    <img src="{{ asset('assets/frontend/img/team/t4.jpg') }}"
                                        srcset="{{ asset('assets/frontend/img/team/t4@2x.jpg') }} 2x"
                                        class="w-65 rounded-circle" alt="">
                                </figure>
                                <div>
                                    <h3 class="h5 mb-1 text-uppercase ff-sub ls-1 text-body-emphasis">Emma Ross</h3>
                                    <span class="text-secondary small d-block mb-2"> Marketing Manager</span>
                                    <p>Lorem ipsum dolor sit amet, ad tota repudiare cum.</p>
                                    <ul class="list-inline opacity-50">
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
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-brand-twitter" width="20"
                                                    height="20" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path
                                                        d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013z">
                                                    </path>
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
                                                    class="icon icon-tabler icon-tabler-brand-pinterest" width="20"
                                                    height="20" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M8 20l4 -9"></path>
                                                    <path
                                                        d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7">
                                                    </path>
                                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /team item -->
                        </li>
                        <li class="splide__slide">
                            <!-- team item -->
                            <div class="mb-8 text-center">
                                <figure class="mb-5">
                                    <img src="{{ asset('assets/frontend/img/team/t6.jpg') }}"
                                        srcset="{{ asset('assets/frontend/img/team/t6@2x.jpg') }} 2x"
                                        class="w-65 rounded-circle" alt="">
                                </figure>
                                <div>
                                    <h3 class="h5 mb-1 text-uppercase ff-sub ls-1 text-body-emphasis">Tom Cruise</h3>
                                    <span class="text-secondary small d-block mb-2">Accounting Manager</span>
                                    <p>Lorem ipsum dolor sit amet, ad tota repudiare cum.</p>
                                    <ul class="list-inline opacity-50">
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
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-brand-twitter" width="20"
                                                    height="20" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path
                                                        d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013z">
                                                    </path>
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
                                                    class="icon icon-tabler icon-tabler-brand-pinterest" width="20"
                                                    height="20" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M8 20l4 -9"></path>
                                                    <path
                                                        d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7">
                                                    </path>
                                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /team item -->
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Team slider -->
        </div>
    </section>
    <!-- /Team -->
@endsection
