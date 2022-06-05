
@php
    $estimate = App\Models\estimate::all();
    $num = 1;
@endphp


















<div class="section-full p-t120 site-bg-white  tw-estimation-area">

    <div class="container">

        <div class="wt-separator-two-part">
            <div class="row wt-separator-two-part-row">
                <div class="col-xl-6 col-lg-6 col-md-12 wt-separator-two-part-left">
                    <!-- TITLE START-->
                    <div class="section-head left wt-small-separator-outer">
                        <div class="wt-small-separator site-text-primary">
                        <div>Estimation</div>
                        </div>
                        <h2 class="wt-title">Has a wide range of solutions</h2>

                    </div>
                    <!-- TITLE END-->
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 wt-separator-two-part-right text-right">
                    <a href="" class="btn-half site-button"><span>Read More</span><em></em></a>
                </div>
            </div>
        </div>
    </div>

    <div class="tw-estimation-section bg-cover bg-no-repeat" style="background-image: url({{ asset('frontend/images/background/bg-2.jpg') }});">
        <div class="container">
            <div class="row">
                <!--1-->
                @foreach ($estimate as $item)
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="tw-est-section-block">
                        <div class="tw-est-section-block-content">
                            <span class="tw-est-section-number">0{{ $num++ }}</span>
                            <h3 class="tw-title">{{ $item->title }}</h3>
                            <p>{{ $item->body }}</p>
                            <a href="" class="site-button-2-outline"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>


                @endforeach

            </div>
        </div>

    </div>


</div>
