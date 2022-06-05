@extends('frontend.frontend_master')
@section('title', 'Home')
@section('content')

@php
    $slider = App\Models\Slider::all();
    $why = App\Models\WhyUs::find(1);
    $site = App\Models\SiteSettings::find(1);
@endphp





<!-- LOADING AREA START ===== -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div id="outer-barG">
            <div id="front-barG" class="bar-animationG">
                <div id="barG_1" class="bar-lineG"></div>
                <div id="barG_2" class="bar-lineG"></div>
                <div id="barG_3" class="bar-lineG"></div>
            </div>
        </div>
    </div>
</div>
<!-- LOADING AREA  END ====== -->

















 <!-- Swiper -->
 <div class="twm-slider2-wrap">

    <!-- Swiper -->
    <div class="swiper twm-slider2">
        <div class="swiper-wrapper">
            <!--Slide One -->
            @foreach ($slider as $i)
            <div class="swiper-slide bg-cover" style="background-image:url({{ asset($i->image) }});">
                <div class="h-banner-wrap">
                    <div class="h-banner-left">
                        <div class="h-bnr-top">
                            <h2>
                                <span class="title-outline">{{ $i->title }}</span>

                            </h2>

                            <a href="#" class="h-bnr-btn">View Services</a>
                        </div>

                    </div>

                    <div class="cross-line-box left up-down"><img src="{{ asset('frontend/images/main-slider/slider1/cross-line-box.png') }}" alt="#"></div>
                    <div class="cross-line-box right up-down"><img src="{{ asset('frontend/images/main-slider/slider1/cross-line-box.png') }}" alt="#"></div>
                    <div class="circle-left-top zoon-in-out"></div>
                </div>
            </div>

            @endforeach




        </div>
        <!-- navigation Numbers -->
        <div class="swiper-pagination"></div>
        <!-- navigation Arrow -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>

</div>
<!-- Swiper -->

<!-- WHY CHOOSE US SECTION START -->
<div class="section-full p-t120 p-b90 site-bg-white tw-why-choose-area2" style="background-image:url({{ asset('frontend/images/background/bg-6.jpg') }});">
    <div class="tw-why-choose-area-top2">
        <div class="container">

            <div class="tw-why-choose-section2">

                <div class="row">

                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="tw-why-choose-right">
                            <div class="tw-why-choose-media1 shine-effect">
                                <div class="shine-box">
                                    <img src="{{ asset($why->image) }}" alt="" >
                                </div>
                            </div>
                            <div class="tw-why-choose-tag slide-top shine-effect">
                                <div class="tag-box">
                                    <h2>295+</h2>
                                    <h3>Branches</h3>
                                    <span>Since 2000</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="tw-why-choose-left">
                            <!-- TITLE START-->
                            <div class="section-head left wt-small-separator-outer">
                                <div class="wt-small-separator site-text-primary">
                                <div>Why Choose Us</div>
                                </div>
                                <h2 class="wt-title">{{ $why->title }}</h2>
                            </div>
                            <!-- TITLE END-->
                            <strong>{{ $site->name }}</strong>

                            <ul class="description-list">
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    Go beyond logistics, make the world go round and revolutionize business.
                                </li>
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    Logistics through innovation, dedication, and technology. ready, set, done.
                                </li>
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    We take pride in serving our customers safely. together with passion.
                                </li>
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    Imagination what we can easily see is only a small percentage.
                                </li>
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    Quality never goes out of style. safety, quality, professionalism.
                                </li>


                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    The quality shows in every move we make where business lives.
                                </li>
                            </ul>
                            <div class="tw-why-choose-left-bottom">
                                <a href="" class="btn-half site-button"><span>Learn More</span><em></em></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

</div>
<!-- WHY CHOOSE US SECTION END -->

<!-- SERVICES SECTION START -->
@include('frontend.common.services')
<!-- SERVICES SECTION END -->

<!-- WE ACHIVED SECTION START -->
<div class="section-full p-t120 p-b90 site-bg-white tw-company-approch-area">

    <div class="container">

        <div class="wt-separator-two-part">
            <div class="row wt-separator-two-part-row">
                <div class="col-xl-6 col-lg-6 col-md-12 wt-separator-two-part-left">
                    <!-- TITLE START-->
                    <div class="section-head left wt-small-separator-outer">
                        <div class="wt-small-separator site-text-primary">
                        <div>Company Approch</div>
                        </div>
                        <h2 class="wt-title">Reliable Logistic &amp; Transport Solutions</h2>
                    </div>
                    <!-- TITLE END-->
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 wt-separator-two-part-right text-right">
                    <a href="" class="btn-half site-button"><span>Read More</span><em></em></a>
                </div>
            </div>
        </div>


        <div class="tw-company-approch-section">
            <div class="tw-company-approch-inner">
                <div class="tw-company-years">
                    <div class="light">
                        <h1>22</h1>
                       <img src="{{ asset('frontend/images/text-bg.jpg') }}" alt="">
                    </div>
                    <div class="tw-company-info">
                        <span>Year’s of experience in transport and logistics services</span>
                    </div>
                </div>

                <div class="row">

                    <!--block 1-->
                    <div class="col-lg-4 col-md-12">
                        <div class="counter-outer-two">
                            <div class="tw-counter-media">
                                <img src="{{ asset('frontend/images/icons/c-pic1.png') }}" alt="">
                            </div>
                            <div class="icon-content">
                                <div class="tw-count-number site-text-primary"><span class="counter site-text-primary">195</span>+</div>
                                <h3 class="icon-content-info">Professional Staff</h3>
                            </div>
                        </div>
                    </div>

                    <!--block 2-->
                    <div class="col-lg-4 col-md-12">
                        <div class="counter-outer-two">
                            <div class="tw-counter-media">
                                <img src="{{ asset('frontend/images/icons/c-pic2.png') }}" alt="">
                            </div>
                            <div class="icon-content">
                                <div class="tw-count-number site-text-primary"><span class="counter site-text-primary">250</span>+</div>
                                <h3 class="icon-content-info">On Time Delievery</h3>
                            </div>
                        </div>
                    </div>

                    <!--block 3-->
                    <div class="col-lg-4 col-md-12">
                        <div class="counter-outer-two">
                            <div class="tw-counter-media">
                                <img src="{{ asset('frontend/images/icons/c-pic3.png') }}" alt="">
                            </div>
                            <div class="icon-content">
                                <div class="tw-count-number site-text-primary"><span class="counter site-text-primary">350</span>+</div>
                                <h3 class="icon-content-info">Technology and Media</h3>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

</div>
<!-- WE ACHIVED SECTION END -->

<!-- Estimation SECTION START -->


@include('frontend.common.estimate')


<!-- Estimation SECTION END -->
@php
    $client = App\Models\ClientsLogo::all();
@endphp
<!-- CLIENT LOGO SECTION START -->
<div class="section-full p-t90 p-b90 site-bg-white tw-client-logo2-area">
    <div class="container home-client2-outer">
        <div class="section-content">

            <div class="owl-carousel home-client-carousel2 owl-btn-vertical-center">
@foreach ($client as $item)
                <div class="item">
                    <div class="ow-client-logo">
                        <div class=" client-logo-media">
                        <a href="#"><img src="{{ asset($item->image) }}" alt=""></a></div>
                    </div>
                </div>

                @endforeach



            </div>

        </div>
    </div>
</div>
<!-- CLIENT LOGO  SECTION End -->
@php
 $testy = App\Models\Testimonial::all();

@endphp

<!-- TESTIMONIALS SECTION START -->
<div class="section-full bg-cover p-t120 p-b120 bg-cover tw-testimonial-2-area" style="background-image:url({{ asset('frontend/images/background/bg-6.jpg') }});">
    <!-- TITLE START-->
    <div class="section-head center wt-small-separator-outer">
        <div class="wt-small-separator site-text-primary">
            <div>Testimonials</div>
        </div>
        <h2 class="wt-title">Client Says</h2>
    </div>
    <!-- TITLE END-->
    <div class="tw-testimonial-2-area-inner">
        <div class="container">

            <div class="row">

                <div class="col-xl-12 col-lg-12 col-md-12">

                    <div class="slider-testimonial-2-wrap">
                        <!-- MAIN SLIDES -->
                        <div class="slick-testimonials-2">


                            @foreach ($testy as $i)
                            <div class="slick-item">
                                <div class="tw-testimonials2-section">
                                    <div class="tw-testimonials2-text">
                                        <span class="tw-testimonials2-quote"><img src="{{ asset($i->image) }}" alt=""></span>
                                        {{ $i->body }}
                                    </div>
                                    <div class="tw-testimonials2-name">{{ $i->name }}</div>
                                    <div class="tw-testimonials2-postion">{{ $i->work }}</div>
                                </div>
                            </div>@endforeach

                        </div>
                        <!-- THUMBNAILS -->
                        <div class="slick-testimonials-2-thumb">

                        </div>
                    </div>

                </div>

            </div>

        </div>
        <div class="tw-outer-border"></div>
    </div>
</div>
<!-- TESTIMONIALS  SECTION End -->



<!-- LATEST PRJECTS SLIDER START -->
<!-- <div class="section-full section-full p-t120 p-b90 tw-project-2-wrap site-bg-gray">
    <!-- IMAGE CAROUSEL START -->
    <div class="section-content">

        <div class="container">
            <!-- TITLE START-->
            <div class="section-head center wt-small-separator-outer">
                <div class="wt-small-separator site-text-primary">
                    <div>Projects</div>
                </div>
                <h2 class="wt-title">Featured Projects</h2>
                <p class="section-head-text">{{ $site->name }}</p>
            </div>
            <!-- TITLE END-->
        </div>

        <div class="tw-project-2-content m-b30">
            <div class="tw-project-2-content-position">

                <div class="owl-carousel project-carousel-2">
                    <!-- COLUMNS 1 -->
                    <div class="item">
                        <div class="project-new-2">
                            <div class="wt-img-effect">
                                <img src="{{ asset('frontend/images/project/1.jpg') }}" alt="">
                                <div class="project-view">
                                    <a class="elem pic-long project-view-btn" href="{{ asset('frontend/images/project/1.jpg') }}" title="Nh-16 Highway Bridge"
                                    data-lcl-txt="" data-lcl-author="" data-lcl-thumb="{{ asset('frontend/images/project/1.jpg') }}">
                                    <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="project-new-content">
                                <span class="project-new-category">Warehousing , Distrbution</span>
                                <h4 class="wt-title"><a href="services-detail.html">Warehouse inventory</a></h4>
                                <a href="#" class="site-button-h-align">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 2 -->
                    <div class="item">
                        <div class="project-new-2">
                            <div class="wt-img-effect">
                                <img src="{{ asset('frontend/images/project/2.jpg') }}" alt="">
                                <div class="project-view">
                                    <a class="elem pic-long project-view-btn" href="{{ asset('frontend/images/project/2.jpg') }}" title="Nh-16 Highway Bridge"
                                    data-lcl-txt="" data-lcl-author="" data-lcl-thumb="{{ asset('frontend/images/project/2.jpg') }}">
                                    <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="project-new-content">
                                <span class="project-new-category">Logistics, Analytics</span>
                                <h4 class="wt-title"><a href="services-detail.html">Minimize Manufacturing</a></h4>
                                <a href="#" class="site-button-h-align">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 3 -->
                    <div class="item">
                        <div class="project-new-2">
                            <div class="wt-img-effect">
                                <img src="{{ asset('frontend/images/project/3.jpg') }}" alt="">
                                <div class="project-view">
                                    <a class="elem pic-long project-view-btn" href="{{ asset('frontend/images/project/3.jpg') }}" title="Nh-16 Highway Bridge"
                                    data-lcl-txt="" data-lcl-author="" data-lcl-thumb="{{ asset('frontend/images/project/3.jpg') }}">
                                    <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="project-new-content">
                                <span class="project-new-category">Warehousing , Distrbution</span>
                                <h4 class="wt-title"><a href="services-detail.html">Warehouse inventory</a></h4>
                                <a href="#" class="site-button-h-align">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- COLUMNS 4 -->
                    <div class="item">
                        <div class="project-new-2">
                            <div class="wt-img-effect">
                                <img src="{{ asset('frontend/images/project/4.jpg') }}" alt="">
                                <div class="project-view">
                                    <a class="elem pic-long project-view-btn" href="{{ asset('frontend/images/project/4.jpg') }}" title="Nh-16 Highway Bridge"
                                    data-lcl-txt="" data-lcl-author="" data-lcl-thumb="{{ asset('frontend/images/project/4.jpg') }}">
                                    <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="project-new-content">
                                <span class="project-new-category">Warehousing , Distrbution</span>
                                <h4 class="wt-title"><a href="services-detail.html">Warehouse inventory</a></h4>
                                <a href="#" class="site-button-h-align">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- COLUMNS 5 -->
                    <div class="item">
                        <div class="project-new-2">
                            <div class="wt-img-effect">
                                <img src="{{ asset('frontend/images/project/5.jpg') }}" alt="">
                                <div class="project-view">
                                    <a class="elem pic-long project-view-btn" href="{{ asset('frontend/images/project/5.jpg') }}" title="Nh-16 Highway Bridge"
                                    data-lcl-txt="" data-lcl-author="" data-lcl-thumb="{{ asset('frontend/images/project/5.jpg') }}">
                                    <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="project-new-content">
                                <span class="project-new-category">Logistics, Analytics</span>
                                <h4 class="wt-title"><a href="services-detail.html">Minimize Manufacturing</a></h4>
                                <a href="#" class="site-button-h-align">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- COLUMNS 6 -->
                    <div class="item">
                        <div class="project-new-2">
                            <div class="wt-img-effect">
                                <img src="{{ asset('frontend/images/project/6.jpg') }}" alt="">
                                <div class="project-view">
                                    <a class="elem pic-long project-view-btn" href="{{ asset('frontend/images/project/6.jpg') }}" title="Nh-16 Highway Bridge"
                                    data-lcl-txt="" data-lcl-author="" data-lcl-thumb="{{ asset('frontend/images/project/6.jpg') }}">
                                    <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="project-new-content">
                                <span class="project-new-category">Warehousing , Distrbution</span>
                                <h4 class="wt-title"><a href="services-detail.html">Warehouse inventory</a></h4>
                                <a href="#" class="site-button-h-align">Read More</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>

</div>
<!-- LATEST PRJECTS SLIDER END -->




































































@endsection
