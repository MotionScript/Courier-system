@php
     $page = App\Models\Pages::where('slug', 'about-us')->first();
     $site = App\Models\SiteSettings::find(1);
     $seo = App\Models\SEO::find(1);
@endphp


<!DOCTYPE html>
<html lang="en">



<head>

	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="{{ $seo->meta_keywords }}">
    <meta name="author" content="{{ $seo->meta_author }}">
    <meta name="robots" content="" />
    <meta name="description" content="{{ $seo->meta_description }}">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ $site->favicon }}" />

    <!-- PAGE TITLE HERE -->
    <title>{{ $site->name }} | @yield('title')</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css')}}" />
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/font-awesome.min.css')}}" />
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.carousel.min.css')}}">
    <!-- SLICK CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slick.min.css')}}">
    <!-- SLICK CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slick-theme.css')}}">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/magnific-popup.min.css')}}">
    <!-- SWIPER SLIDER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/swiper-bundle.min.css')}}" />
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css')}}">
    <!-- Lc light box popup -->
    <link rel="stylesheet" href="{{ asset('frontend/css/lc_lightbox.css')}}" />
    <!-- Price Range Slider -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-slider.min.css')}}" />
    <!---TOASTER CSS CDN-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    @livewireStyles

</head>

<body>



	<div class="page-wraper">

        <!-- HEADER START -->
        <header class="site-header header-style-3 mobile-sider-drawer-menu">

            <div class="sticky-header main-bar-wraper  navbar-expand-lg">
                <div class="main-bar">

                    <div class="container-fluid clearfix">

                        <div class="logo-header">
                            <div class="logo-header-inner logo-header-one">
                                <a href="{{ url('/') }}">
                                <img src="{{ asset($site->logo)}}" alt="">
                                </a>
                            </div>
                        </div>

                        <!-- NAV Toggle Button -->
                        <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar icon-bar-first"></span>
                            <span class="icon-bar icon-bar-two"></span>
                            <span class="icon-bar icon-bar-three"></span>
                        </button>

                        <!-- MAIN Vav -->
                        <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-center">

                            <ul class=" nav navbar-nav">
                                <li><a href="{{ url('/') }}">Home</a></li>

                                <li><a href="{{ route('page-view', $page->slug) }}">{{ $page->name }}</a></li>

                                <li><a href="{{ route('our-services') }}">Services</a></li>

                                <li><a href="{{ route('user-faq') }}">FAQs</a></li>



                                <li><a href="{{ route('contact') }}">Contact</a></li>


                            </ul>

                        </div>

                        <!-- Header Right Section-->
                        <div class="extra-nav header-2-nav">
                            <div class="extra-cell">
                                <div class="header-search">
                                    <a href="{{ route('track-shippment') }}" class="btn btn-warning">Track Your Shippments</a>
                                </div>
                            </div>
                            <div class="extra-cell">
                                <div class="header-nav-call-section">


                                    <div class="detail">

                                        <span><a href="">{{ $site->email }}</a></span>
                                    </div>
                                    <div class="media">

                                    </div>
                                </div>
                            </div>

                            </div>



                    </div>


                </div>

                <!-- SITE Search -->



            </div>

        </header>
