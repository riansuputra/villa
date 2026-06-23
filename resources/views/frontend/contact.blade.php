@extends('frontend.layouts.app')

@section('header', '')

@section('content')
    <!-- Page title -->
    <section id="title" class="text-body pt-31 pt-lg-34 pb-18 text-center position-relative">
        <div
            class="position-absolute top-50 start-50 translate-middle text-primary opacity-15 display-1 z-n1 text-uppercase d-none d-md-block w-100">
            <span class="d-inline-block big-text">Connect</span>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-8 col-lg-10" data-cue="fadeIn">
                    <span
                        class="text-uppercase h-sub-font fw-medium ls-2 d-block text-secondary mb-4">{{ $globalVilla->name }}</span>
                    <h1 class="display-1 h-special-font mb-3 text-body-emphasis">Contact Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- /Page title -->
    <!-- Contact -->
    <section id="contact" class="pb-16">
        <div class="container">
            <div class="row" data-cues="fadeIn">
                <div class="col-12 col-xl-4">
                    <!-- Contac Information -->
                    <div class="mb-4">
                        <h2 class="h5 text-uppercase ls-1 h-sub-font">Contact Info</h2>
                        <div class="row">
                            <div class="col-12 col-xl-12 col-lg-4">
                                <div class="mb-4">
                                    <div class="mb-1">
                                        <i class="hicon hicon-flights-pin"></i>
                                        <span class="fw-medium">Address:</span>
                                    </div>
                                    <div class="fw-bold-2">{{ $globalVilla->address }}</div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-12 col-lg-4 col-md-6">
                                <div class="mb-4">
                                    <div class="mb-1">
                                        <i class="hicon hicon-telephone"></i>
                                        <span class="fw-medium">Phone:</span>
                                    </div>
                                    <div class="fw-bold-2">+{{ $globalVilla->phone }}</div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-12 col-lg-4 col-md-6">
                                <div class="mb-4">
                                    <div class="mb-1">
                                        <i class="hicon hicon-email-envelope"></i>
                                        <span class="fw-medium"> Email:</span>
                                    </div>
                                    <div class="fw-bold-2">{{ $globalVilla->email }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Contac Information -->
                </div>
                <div class="col-12 col-xl-8">
                    <!-- Contact Form -->
                    <form class="needs-validation mb-4" method="post" novalidate="">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h2 class="h5 text-uppercase ls-1 h-sub-font">Send an Email</h2>
                            <span class="text-danger">* Required field.</span>
                        </div>
                        <!-- form message -->
                        <div class="row">
                            <div class="col-12">
                                <div class="alert d-none" role="alert" id="msg_alert"></div>
                            </div>
                        </div>
                        <!-- /form message -->
                        <div class="row gx-4">
                            <div class="col-md-6">
                                <div class="form-floating mb-5">
                                    <input id="form_firstname" type="text" name="firstname"
                                        class="form-control shadow-sm" placeholder="First Name" required>
                                    <label for="form_firstname">First Name *</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-5">
                                    <input id="form_lastname" type="text" name="lastname" class="form-control shadow-sm"
                                        placeholder="Last Name" required>
                                    <label for="form_lastname">Last Name *</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-5">
                                    <input id="form_email" type="email" name="email" class="form-control shadow-sm"
                                        placeholder="Email" required>
                                    <label for="form_email">Email *</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-5">
                                    <input id="form_phone" type="number" name="phone" class="form-control shadow-sm"
                                        placeholder="Phone" required>
                                    <label for="form_phone">Phone *</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mb-5">
                                    <input id="form_subject" type="text" name="subject" class="form-control shadow-sm"
                                        placeholder="Subject" required>
                                    <label for="form_subject">Subject *</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating mb-5">
                                    <textarea id="form_message" name="message" class="form-control shadow-sm" placeholder="Message" style="height: 150px"
                                        required></textarea>
                                    <label for="form_message">Message *</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-check mb-5">
                                            <label class="form-check-label"></label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 text-start text-md-end">
                                        <button type="submit" class="btn btn-primary shadow-sm">
                                            <i class="hicon hicon-email-envelope"></i>
                                            <span> Send message</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- /Contact Form -->
                </div>
            </div>
        </div>
    </section>
    <!-- /Contact -->
@endsection
