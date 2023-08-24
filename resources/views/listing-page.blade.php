@extends('layout.padre')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Under Construction | Bootstrap 5 Theme</title>

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

                                <li><a class="dropdown-item active" href="listing-page">Coming Soon</a></li>

                                {{-- <li><a class="dropdown-item" href="page-404.html">Page 404</a></li> --}}
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact">Contact</a>
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
                            <h1 class="text-white mb-lg-0">Under Construction</h1>
                        </div>

                        <div class="col-lg-4 col-12 d-flex justify-content-lg-end align-items-center ms-auto">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>

                                    <li class="breadcrumb-item active" aria-current="page">Coming Soon</li>
                                </ol>
                            </nav>
                        </div>

                    </div>
                </div>
            </section>
         

            <section class="section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 text-center mx-auto">
                            <ul class="countdown d-flex flex-wrap justify-content-center align-items-center">
                               <li class="countdown-item d-flex flex-column justify-content-center align-items-center">
                                    <h3 class="countdown-title days">14</h3>
                                    <span class="countdown-text">Days</span>

                                    <div class="countdown-item-overlay"></div>
                               </li>

                               <li class="countdown-item d-flex flex-column justify-content-center align-items-center">
                                    <h3 class="countdown-title hours">10</h3>
                                    <span class="countdown-text">hours</span>
                               </li>

                               <li class="countdown-item d-flex flex-column justify-content-center align-items-center">
                                    <h3 class="countdown-title minutes">15</h3>
                                    <span class="countdown-text">minutes</span>
                               </li>

                               <li class="countdown-item d-flex flex-column justify-content-center align-items-center">
                                    <h3 class="countdown-title seconds">34</h3>
                                    <span class="countdown-text">seconds</span>
                               </li>     
                            </ul>

                            <h2 class="">Our website is currently under construction</h2>
                            <p>You can set the launch date time in init.js file.</p>
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