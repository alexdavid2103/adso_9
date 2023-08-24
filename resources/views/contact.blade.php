@extends('layout.padre')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Contact | Bootstrap 5 Theme</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet">

        <link href="assets/css/bootstrap-icons.css" rel="stylesheet">

        <link href="assets/css/tooplate-clean-work.css" rel="stylesheet">
<!--

Tooplate 2132 Clean Work

https://www.tooplate.com/view/2132-clean-work

Free Bootstrap 5 HTML Template

-->
    </head>
    
    <body>

        @section('content')

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="assets/images/bubbles.png" class="logo img-fluid" alt="">

                    <span class="ms-2">Clean Work</span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="about">About Us</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>

                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="detail-page">Our Services</a></li>

                                <li><a class="dropdown-item" href="listing.page">Coming Soon</a></li>

                                {{-- <li><a class="dropdown-item" href="page-404.html">Page 404</a></li> --}}
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="contact">Contact</a>
                        </li>

                        <li class="nav-item ms-3">
                            <a class="nav-link custom-btn custom-border-btn custom-btn-bg-white btn" href="#">Get started</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>

            <section class="banner-section d-flex justify-content-center align-items-end">
                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">

                        <div class="col-lg-7 col-12">
                            <h1 class="text-white mb-lg-0">Contact</h1>
                        </div>

                        <div class="col-lg-4 col-12 d-flex justify-content-lg-end align-items-center ms-auto">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>

                                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                                </ol>
                            </nav>
                        </div>

                    </div>
                </div>
            </section>
         

            <section class="contact-section section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-5 col-12 me-auto mb-lg-0 mb-5">
                            <h2 class="my-3">We're happy to help</h2>

                            <p>Best Cleaning Service is ready to serve you. Clean Work is a professional website layout for your business.</p>

                            <div class="contact-info bg-white shadow-lg">
                                <h3 class="mb-4">Contact Information</h3>

                                <h5 class="d-flex mt-3 mb-3">
                                    <i class="bi-geo-alt-fill custom-icon me-3"></i>
                                    Akershusstranda 20, 0150 Oslo, Norway
                                </h5>

                                <h5 class="d-flex mb-3">
                                    <i class="bi-telephone-fill custom-icon me-3"></i>

                                    <a href="tel: 110-220-9800">
                                        110-220-9800
                                    </a>
                                </h5>

                                <h5 class="d-flex">
                                    <i class="bi-envelope-fill custom-icon me-3"></i>

                                    <a href="mailto:info@company.com">
                                        info@company.com
                                    </a>
                                </h5>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <form class="custom-form consulting-form bg-white shadow-lg mb-5 mb-lg-0" action="#" method="post" role="form">
                                <div class="consulting-form-header d-flex align-items-center">
                                    <h3 class="mb-4">Get a Free Quotation</h3>
                                </div>

                                <div class="consulting-form-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <input type="text" name="volunteer-name" id="volunteer-name" class="form-control" placeholder="John Walker" required>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <input type="email" name="volunteer-email" id="volunteer-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="yours@gmail.com" required>
                                        </div>
                                    </div>

                                    <select class="form-select form-control" name="job-salary" id="job-salary" aria-label="Default select example">
                                        <option selected>Service Type</option>
                                        <option value="1">House cleaning</option>
                                        <option value="2">Car washing</option>
                                        <option value="2">Office cleaning</option>
                                        <option value="2">Factory cleaning</option>
                                    </select>

                                    <textarea name="volunteer-message" rows="3" class="form-control" id="volunteer-message" placeholder="Comment (Optional)"></textarea>

                                    <div class="col-lg-6 col-md-10 col-8 mx-auto">
                                        <button type="submit" class="form-control">Submit Request</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </section>
        </main>

        @include('layout.footer')

        <!-- JAVASCRIPT FILES -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/counter.js"></script>
        <script src="assets/js/countdown.js"></script>
        <script src="assets/js/init.js"></script>
        <script src="assets/js/modernizr.js"></script>
        <script src="assets/js/animated-headline.js"></script>
        <script src="assets/js/custom.js"></script>

    </body>
</html>
@stop
