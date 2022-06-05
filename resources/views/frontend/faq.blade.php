@extends('frontend.frontend_master')
@section('title', 'FAQ')
@section('content')


<div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{ asset('frontend/images/banner/1.jpg') }});">
    <div class="overlay-main site-bg-sky opacity-08"></div>
    <div class="container">
        <div class="wt-bnr-inr-entry">
            <div class="banner-title-outer">
                <div class="banner-title-name">
                    <h2 class="wt-title">FAQ</h2>
                </div>
            </div>
            <!-- BREADCRUMB ROW -->

                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>FAQ</li>
                    </ul>
                </div>

            <!-- BREADCRUMB ROW END -->
        </div>
    </div>
</div>






@php
    $faq = App\Models\FAQ::all();
@endphp

<div class="section-full p-t120 p-b90 tw-faq-area">
    <div class="container">

        <!-- TITLE START-->
        <div class="section-head center wt-small-separator-outer">
            <div class="wt-small-separator site-text-primary">
                <div>FAQ's</div>
            </div>
            <h2 class="wt-title">Frequently Ask Questions?</h2>
            <p class="section-head-text"></p>
        </div>
        <!-- TITLE END-->

        <div class="section-content">
            <div class="tw-faq-section">
                <div class="accordion tw-faq" id="sf-faq-accordion">
                    <!--One-->
                    @foreach ($faq as $f)
                    <div class="accordion-item">

                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#FAQ1" aria-expanded="false">
                            {{ $f->q }}
                        </button>

                        <div id="FAQ1" class="accordion-collapse collapse" data-bs-parent="#sf-faq-accordion">
                            <div class="accordion-body">
                            {{ $f->a }}
                            </div>
                        </div>

                    </div>

                    @endforeach



                </div>
            </div>
        </div>
    </div>
</div>















































@endsection
