@extends('layout.padre')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Services | Bootstrap 5 Theme</title>

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
                                <li><a class="dropdown-item active" href="detail-page">Our Services</a></li>

                                <li><a class="dropdown-item" href="listing-page">Coming Soon</a></li>

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
                            <h1 class="text-white mb-lg-0">Services Listing</h1>
                        </div>

                        <div class="col-lg-4 col-12 d-flex justify-content-lg-end align-items-center ms-auto">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>

                                    <li class="breadcrumb-item active" aria-current="page">Services Listing</li>
                                </ol>
                            </nav>
                        </div>

                    </div>
                </div>
            </section>


            <section class="services-section section-padding">           
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <div class="services-thumb section-bg mb-lg-0">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-12">
                                        <div class="services-image-wrap">
                                            <a href="services-detail">
                                                <img src="assets/images/services/people-taking-care-office-cleaning.jpg" class="services-image img-fluid" alt="">
                                                <img src="assets/images/services/person-taking-care-office.jpg" class="services-image services-image-hover img-fluid" alt="">

                                                <div class="services-icon-wrap">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class="text-white mb-0">
                                                            <i class="bi-cash me-2"></i>
                                                            $820
                                                        </p>

                                                        <p class="text-white mb-0">
                                                            <i class="bi-clock-fill me-2"></i>
                                                            5 hrs
                                                        </p>
                                                    </div>                                                    
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-7 col-md-7 col-12 d-flex align-items-center">
                                        <div class="services-info mt-4 mt-lg-0 mt-md-0">
                                            <h4 class="services-title mb-1 mb-lg-2">
                                                <a class="services-title-link" href="services-detail">Office Cleaning</a>
                                            </h4>

                                            <p>Best Cleaning Service Provider Ipsum dolor sit consectetur kengan</p>

                                            <div class="d-flex flex-wrap align-items-center">
                                                <div class="reviews-icons">
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star"></i>
                                                    <i class="bi-star"></i>
                                                </div>

                                                <a href="services-detail" class="custom-btn btn button button--atlas mt-2 ms-auto">
                                                    <span>Learn More</span>

                                                    <div class="marquee" aria-hidden="true">
                                                        <div class="marquee__inner">
                                                            <span>Learn More</span>
                                                            <span>Learn More</span>
                                                            <span>Learn More</span>
                                                            <span>Learn More</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="services-thumb section-bg mb-lg-0">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-12">
                                        <div class="services-image-wrap">
                                            <a href="services-detail">
                                                <img src="assets/images/services/young-smiling-woman-wearing-rubber-gloves-cleaning-stove.jpg" class="services-image img-fluid" alt="">
                                                <img src="assets/images/services/woman-holding-rag-detergent-cleaning-cooker.jpg" class="services-image services-image-hover img-fluid" alt="">

                                                <div class="services-icon-wrap">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class="text-white mb-0">
                                                            <i class="bi-cash me-2"></i>
                                                            $640
                                                        </p>

                                                        <p class="text-white mb-0">
                                                            <i class="bi-clock-fill me-2"></i>
                                                            4 hrs
                                                        </p>
                                                    </div>                                                    
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-7 col-md-7 col-12 d-flex align-items-center">
                                        <div class="services-info mt-4 mt-lg-0 mt-md-0">
                                            <h4 class="services-title mb-1 mb-lg-2">
                                                <a class="services-title-link" href="services-detail.html">Kitchen Cleaning</a>
                                            </h4>

                                            <p>Best Cleaning Service Provider Ipsum dolor sit consectetur kengan</p>

                                            <div class="d-flex flex-wrap align-items-center">
                                                <div class="reviews-icons">
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                </div>

                                                <a href="services-detail.html" class="custom-btn btn button button--atlas mt-2 ms-auto">
                                                    <span>Learn More</span>

                                                    <div class="marquee" aria-hidden="true">
                                                        <div class="marquee__inner">
                                                            <span>Learn More</span>
                                                            <span>Learn More</span>
                                                            <span>Learn More</span>
                                                            <span>Learn More</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
         

            <section class="services-section section-padding section-bg">                
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <div class="services-thumb mb-lg-0">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-12">
                                        <div class="services-image-wrap">
                                            <a href="services-detail">
                                                <img src="assets/images/services/man-polishing-car-inside-car-service.jpg" class="services-image img-fluid" alt="">
                                                <img src="assets/images/services/man-polishing-car-inside.jpg" class="services-image services-image-hover img-fluid" alt="">

                                                <div class="services-icon-wrap">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class="text-white mb-0">
                                                            <i class="bi-cash me-2"></i>
                                                            $240
                                                        </p>

                                                        <p class="text-white mb-0">
                                                            <i class="bi-clock-fill me-2"></i>
                                                            2 hrs
                                                        </p>
                                                    </div>                                                    
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-7 col-md-7 col-12 d-flex align-items-center">
                                        <div class="services-info mt-4 mt-lg-0 mt-md-0">
                                            <h4 class="services-title mb-1 mb-lg-2">
                                                <a class="services-title-link" href="services-detail.html">Car Washing</a>
                                            </h4>

                                            <p>Best Cleaning Service Provider Ipsum dolor sit consectetur kengan</p>

                                            <div class="d-flex flex-wrap align-items-center">
                                                <div class="reviews-icons">
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                </div>

                                                <a href="services-detail.html" class="custom-btn btn button button--atlas mt-2 ms-auto">
                                                    <span>Learn More</span>

                                                    <div class="marquee" aria-hidden="true">
                                                        <div class="marquee__inner">
                                                            <span>Learn More</span>
                                                            <span>Learn More</span>
                                                            <span>Learn More</span>
                                                            <span>Learn More</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="services-thumb mb-lg-0">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-12">
                                        <div class="services-image-wrap">
                                            <a href="services-detail">
                                                <img src="assets/images/services/professional-industrial-cleaner-protective-uniform-cleaning-floor-food-processing-plant.jpg" class="services-image img-fluid" alt="">
                                                <img src="assets/images/services/close-up-mop-cleaning-industrial-plant-floor.jpg" class="services-image services-image-hover img-fluid" alt="">

                                                <div class="services-icon-wrap">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class="text-white mb-0">
                                                            <i class="bi-cash me-2"></i>
                                                            $6,800
                                                        </p>

                                                        <p class="text-white mb-0">
                                                            <i class="bi-clock-fill me-2"></i>
                                                            30 hrs
                                                        </p>
                                                    </div>                                                    
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-7 col-md-7 col-12 d-flex align-items-center">
                                        <div class="services-info mt-4 mt-lg-0 mt-md-0">
                                            <h4 class="services-title mb-1 mb-lg-2">
                                                <a class="services-title-link" href="services-detail">Factory Cleaning</a>
                                            </h4>

                                            <p>Best Cleaning Service Provider Ipsum dolor sit consectetur kengan</p>

                                            <div class="d-flex flex-wrap align-items-center">
                                                <div class="reviews-icons">
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star"></i>
                                                </div>

                                                <a href="services-detail.html" class="custom-btn btn button button--atlas mt-2 ms-auto">
                                                    <span>Learn More</span>

                                                    <div class="marquee" aria-hidden="true">
                                                        <div class="marquee__inner">
                                                            <span>Learn More</span>
                                                            <span>Learn More</span>
                                                            <span>Learn More</span>
                                                            <span>Learn More</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
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

        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 d-flex align-items-center mb-4 pb-2">
                        <div>
                            <img src="assets/images/bubbles.png" class="logo img-fluid" alt="">
                        </div>

                        <ul class="footer-menu d-flex flex-wrap ms-5">
                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">About Us</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Blog</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Reviews</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-5 col-12 mb-4 mb-lg-0">
                        <h5 class="site-footer-title mb-3">Our Services</h5>

                        <ul class="footer-menu">
                            <li class="footer-menu-item">
                                <a href="#" class="footer-menu-link">
                                    <i class="bi-chevron-double-right footer-menu-link-icon me-2"></i>
                                    House Cleaning
                                </a>
                            </li>

                            <li class="footer-menu-item">
                                <a href="#" class="footer-menu-link">
                                    <i class="bi-chevron-double-right footer-menu-link-icon me-2"></i>
                                    Car Washing
                                </a>
                            </li>

                            <li class="footer-menu-item">
                                <a href="#" class="footer-menu-link">
                                    <i class="bi-chevron-double-right footer-menu-link-icon me-2"></i>
                                    Laundry
                                </a>
                            </li>

                            <li class="footer-menu-item">
                                <a href="#" class="footer-menu-link">
                                    <i class="bi-chevron-double-right footer-menu-link-icon me-2"></i>
                                    Office Cleaning
                                </a>
                            </li>

                            <li class="footer-menu-item">
                                <a href="#" class="footer-menu-link">
                                    <i class="bi-chevron-double-right footer-menu-link-icon me-2"></i>
                                    Toilet Cleaning
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mb-md-0">
                        <h5 class="site-footer-title mb-3">Office</h5>

                        <p class="text-white d-flex mt-3 mb-2">
                            <i class="bi-geo-alt-fill me-2"></i>
                            Akershusstranda 20, 0150 Oslo, Norway
                        </p>

                        <p class="text-white d-flex mb-2">
                            <i class="bi-telephone-fill me-2"></i>

                            <a href="tel: 110-220-9800" class="site-footer-link">
                                110-220-9800
                            </a>
                        </p>

                        <p class="text-white d-flex">
                            <i class="bi-envelope-fill me-2"></i>

                            <a href="mailto:info@company.com" class="site-footer-link">
                                info@company.com
                            </a>
                        </p>

                        <ul class="social-icon mt-4">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link button button--skoll">
                                    <span></span>
                                    <span class="bi-twitter"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link button button--skoll">
                                    <span></span>
                                    <span class="bi-facebook"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link button button--skoll">
                                    <span></span>
                                    <span class="bi-instagram"></span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 col-6 mt-3 mt-lg-0 mt-md-0">
                        <div class="featured-block">
                            <h5 class="text-white mb-3">Service Hours</h5>

                            <strong class="d-block text-white mb-1">Mon - Fri</strong>

                            <p class="text-white mb-3">8:00 AM - 5:30 PM</p>

                            <strong class="d-block text-white mb-1">Sat</strong>

                            <p class="text-white mb-0">6:00 AM - 2:30 PM</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="site-footer-bottom">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <p class="copyright-text mb-0">Copyright © 2036 Clean Work Co., Ltd.</p>
                        </div>
                        
                        <div class="col-lg-6 col-12 text-end">
                            <p class="copyright-text mb-0">
                            // Designed by <a href="https://www.tooplate.com" target="_parent">Tooplate</a> //</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </footer>

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