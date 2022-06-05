@extends('frontend.frontend_master')
@section('title', 'Our Services')
@section('content')


<div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{ asset('frontend/images/banner/1.jpg') }});">
    <div class="overlay-main site-bg-sky opacity-08"></div>
    <div class="container">
        <div class="wt-bnr-inr-entry">
            <div class="banner-title-outer">
                <div class="banner-title-name">
                    <h2 class="wt-title">Our Services</h2>
                </div>
            </div>
            <!-- BREADCRUMB ROW -->

                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Our Services</li>
                    </ul>
                </div>

            <!-- BREADCRUMB ROW END -->
        </div>
    </div>
</div>







@include('frontend.common.services')




























































@endsection
