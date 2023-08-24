@extends('layout.padre')


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>About Us | Bootstrap 5 Theme</title>

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
                        <a class="nav-link active" href="about">About Us</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>

                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                            <li><a class="dropdown-item" href="detail-page">Our Services</a></li>

                            <li><a class="dropdown-item" href="listing-page">Coming Soon</a></li>

                            {{-- <li><a class="dropdown-item" href="page-404.h">Page 404</a></li> --}}
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
                        <h1 class="text-white mb-lg-0">About Us</h1>
                    </div>

                    <div class="col-lg-4 col-12 d-flex justify-content-lg-end align-items-center ms-auto">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>

                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
        </section>
     

        <section class="section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <img src="assets/images/cleaning-concept-with-man-showing-business-card.jpg" class="featured-image img-fluid">
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="featured-block">
                            <h2 class="mb-4">Cleaning Service Agency Since 2018</h2>

                            <p>Tooplate website provides a variety of latest HTML templates or Bootstrap 5 Themes for your <a href="#">business websites</a>.</p>

                            <p>Clean Work is a blue color theme HTML CSS template for your company website. You may use this template for any purpose.</p>

                            <a class="custom-btn btn button button--atlas mt-3" href="contact.html">
                                <span>Get in touch</span>

                                <div class="marquee" aria-hidden="true">
                                    <div class="marquee__inner">
                                        <span>Get in touch</span>
                                        <span>Get in touch</span>
                                        <span>Get in touch</span>
                                        <span>Get in touch</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="team-section section-padding section-bg">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <h2 class="mb-4">Meet People</h2>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-lg-0 mb-md-5">
                        <img src="assets/images/teams/young-cleaning-man-wearing-casual-clothes.jpg" class="team-image img-fluid">
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 d-flex justify-content-lg-center mt-4 mt-lg-0 mt-md-0 mb-5 mb-lg-0">
                        <div class="team-info mx-auto mx-lg-0">
                            <h4 class="mb-2">Josh</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing tempor incididunt dolore magna</p>

                            <div class="border-top mt-3 pt-3">
                                <p class="d-flex mb-0">
                                    <i class="bi-whatsapp me-2"></i>

                                    <a href="tel: 110-220-9800">
                                        110-220-9800
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <img src="assets/images/teams/happy-young-woman-wiping-kitchen-counter-wearing-yellow-gloves.jpg" class="team-image img-fluid">
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 d-flex justify-content-lg-center mt-4 mt-lg-0 mt-md-0">
                        <div class="team-info mx-auto mx-lg-0">
                            <h4 class="mb-2">Marie</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing tempor incididunt dolore magna</p>

                            <div class="border-top mt-3 pt-3">
                                <p class="d-flex mb-0">
                                    <i class="bi-whatsapp me-2"></i>

                                    <a href="tel: 110-220-9800">
                                        110-220-9800
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="partners-section">
            <div class="container">
                <div class="row justify-content-center align-items-center">

                    <div class="col-lg-12 col-12">
                        <h4 class="partners-section-title bg-white shadow-lg">Trusted by companies</h4>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="assets/images/partners/toprak-leasing.svg" class="partners-image img-fluid">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="assets/images/partners/glorix.svg" class="partners-image img-fluid">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="assets/images/partners/woocommerce.svg" class="partners-image img-fluid">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="assets/images/partners/rolf-leasing.svg" class="partners-image img-fluid">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="assets/images/partners/unilabs.svg" class="partners-image img-fluid">
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