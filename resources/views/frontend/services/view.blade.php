@extends('frontend.frontend_master')
@section('title', 'Services')
@section('content')




<div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{ asset('frontend/images/banner/1.jpg') }});">
    <div class="overlay-main site-bg-sky opacity-08"></div>
    <div class="container">
        <div class="wt-bnr-inr-entry">
            <div class="banner-title-outer">
                <div class="banner-title-name">
                    <h2 class="wt-title">{{ $service->title }}</h2>
                </div>
            </div>
            <!-- BREADCRUMB ROW -->

                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>{{ $service->title }}</li>
                    </ul>
                </div>

            <!-- BREADCRUMB ROW END -->
        </div>
    </div>
</div>












<div class="section-full p-t120 p-b90 bg-white" style="transform: none;">

    <div class="container" style="transform: none;">
        <div class="row" style="transform: none;">

            <div class="col-lg-8 col-md-12">
                <div class="service-full-info">
                    <div class="services-etc m-b30">



                        <div class="wt-media">
                            <img src="{{ asset($service->image) }}" alt="">
                        </div>

                        <h2 class="wt-title mt-4 mb-4">Go beyond logistics, make the world go round and revolutionize business.</h2>
                        <p>
                            {{ $service->body }}
                        </p>


                        <h2 class="wt-title mt-4 mb-4"></h2>
                        <div class="service-offered">


                        </div>



                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 rightSidebar side-bar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
















@php
    $s = App\Models\Services::all();
@endphp

            <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;"><div class="widget search-bx">



                </div><div class="widget all_services_list">
                    <h4 class="section-head-small mb-4">Transport Services</h4>
                    <div class="all_services m-b30">
                        <ul>
                            @foreach ($s as $i)
                            <li><a href="{{ route('view-services', $i->id) }}">{{ $i->title }}</a></li>

                            @endforeach
                        </ul>
                    </div>
                </div>
                </div></div>

        </div>
    </div>

</div>

















































@endsection
