@php
    $services = App\Models\Services::all();
    $n = 1;
@endphp











<div class="section-full p-t120 p-b90 site-bg-gray tw-service-gallery-style3-area">

    <div class="services-gallery-block-outer3">
        <div class="container">

            <!-- TITLE START-->
            <div class="section-head center wt-small-separator-outer">
                <div class="wt-small-separator site-text-primary">
                    <div>All services</div>
                </div>
                <h2 class="wt-title">Trusted For Our Services</h2>
                <p class="section-head-text">Site Name Here</p>
            </div>
            <!-- TITLE END-->

            <div class="section-content">
                <div class="services-gallery-style3">
                    <div class="row">

                        @foreach ($services as $item)
                        <!-- COLUMNS 1 -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="service-box-style3">
                                <div class="service-media">
                                    <img src="{{ asset($item->image) }}" alt="">
                                </div>
                                <div class="service-content">
                                    <h3 class="service-title-large"><span class="service-title-large-number">0{{ $n++ }}</span><a href="">{{ $item->title }}</a></h3>
                                    <p>{{ Str::limit($item->body, 80) }}</p>
                                    <a href="{{ route('view-services', $item->id) }}" class="site-button-2">View Detail</a>
                                </div>
                            </div>
                        </div>

                        @endforeach





                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
