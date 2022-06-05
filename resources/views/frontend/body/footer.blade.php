<footer class="footer-dark">

    <!-- NEWS LETTER SECTION START -->
    <div class="ftr-nw-ltr site-bg-white">

            <div class="ftr-nw-ltr-inner site-bg-primary">
                <div class="container">
                    <div class="ftr-nw-img">
                        <img src="{{ asset('frontend/images/news-l-bg.png') }}" alt="">
                    </div>
                    <div class="ftr-nw-content">
                        <div class="ftr-nw-title">Subscribe for offers and news</div>
                        <div class="ftr-nw-form">
                            <form>
                                <input name="news-letter" class="form-control" placeholder="Enter Your Email" type="text">
                                <button class="ftr-nw-subcribe-btn">Subscribe Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- NEWS LETTER SECTION END -->
    @php
    $page  = App\Models\Pages::where('body', '!=', NULL)->get();
    $p = App\Models\Pages::where('slug', 'about-us')->first();

    $site = App\Models\SiteSettings::find(1);
@endphp

    <div class="ftr-bg"  style="background-image:  url({{ asset('frontend/images/f-bg.jpg') }});">
        <!-- FOOTER BLOCKES START -->
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">

                        <div class="widget widget_about">
                            <div class="logo-footer clearfix">
                                <a href="{{ url('/') }}"><img src="{{ asset($site->logo) }}" alt=""></a>
                            </div>

                            <ul class="social-icons">
                                <li><a href="{{ $site->facebook }}" class="fa fa-facebook"></a></li>
                                <li><a href="{{ $site->twitter }}" class="fa fa-twitter"></a></li>
                                <li><a href="{{ $site->instagram }}" class="fa fa-instagram"></a></li>
                                <li><a href="{{ $site->youtube }}" class="fa fa-youtube-play"></a></li>
                            </ul>
                        </div>

                    </div>
                    @php
                    $p = App\Models\Pages::where('slug', 'about-us')->first();
               @endphp
                    <div class="col-lg-3 col-md-6">
                        <div class="widget widget_services ftr-list-center">
                            <h3 class="widget-title">Quick Links</h3>
                            <ul>
                                <li><a href="{{ route('page-view', $p->slug) }}">{{ $p->name }}</a></li>
                                <li><a href="{{ route('our-services') }}">Services</a></li>
                                <li><a href="">Track Your Shipments</a></li>
                                <li><a href="{{ route('user-faq') }}">FAQ</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="widget widget_services ftr-list-center">
                            <h3 class="widget-title">Services</h3>
                            <ul>
                                <li><a href="{{ route('our-services') }}">Warehouse</a></li>
                                <li><a href="{{ route('our-services') }}">Air Freight</a></li>
                                <li><a href="{{ route('our-services') }}">Ocean Freight</a></li>
                                <li><a href="{{ route('our-services') }}">Road Freight</a></li>
                                <li><a href="{{ route('our-services') }}">Packaging</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="widget widget_services ftr-list-center">
                            <h3 class="widget-title">Pages</h3>
                            <ul>
                                @foreach ($page as $p)
                                <li><a href="{{ route('page-view', $p->slug) }}">{{ $p->name }}</a></li>
                                @endforeach


                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- FOOTER COPYRIGHT -->

        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-info">

                    <div class="footer-copy-right">
                        <span class="copyrights-text">Copyright © 2022 {{ $site->name }} All Rights Reserved.</span>
                    </div>

                </div>
            </div>
        </div>
    </div>

</footer>
<!-- FOOTER END -->

<!-- BUTTON TOP START -->
<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

</div>


<!--livewire-->
@livewireScripts

<script>
       //toastr notification
window.addEventListener('alert', event => {
  toastr[event.detail.type](event.detail.message,
  event.detail.title ?? ''), toastr.options = {
     "closeButton": true,
     "progressBar": true,
   }
 });
</script>
<!-- JAVASCRIPT  FILES ========================================= -->
<script  src="{{ asset('frontend/js/jquery-3.6.0.min.js')}}"></script><!-- JQUERY.MIN JS -->
<script  src="{{ asset('frontend/js/popper.min.js')}}"></script><!-- POPPER.MIN JS -->
<script  src="{{ asset('frontend/js/bootstrap.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
<script  src="{{ asset('frontend/js/magnific-popup.min.js')}}"></script><!-- MAGNIFIC-POPUP JS -->
<script  src="{{ asset('frontend/js/waypoints.min.js')}}"></script><!-- WAYPOINTS JS -->
<script  src="{{ asset('frontend/js/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
<script  src="{{ asset('frontend/js/waypoints-sticky.min.js') }}"></script><!-- STICKY HEADER -->
<script  src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script><!-- MASONRY  -->
<script  src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script><!-- MASONRY  -->
<script  src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script><!-- OWL  SLIDER  -->
<script  src="{{ asset('frontend/js/slick.min.js') }}"></script><!-- SLICK  Slider  -->
<script  src="{{ asset('frontend/js/theia-sticky-sidebar.js') }}"></script><!-- STICKY SIDEBAR  -->
<script  src="{{ asset('frontend/js/jquery.bootstrap-touchspin.js') }}"></script><!-- FORM JS -->
<script  src="{{ asset('frontend/js/lc_lightbox.lite.js') }}" ></script><!-- IMAGE POPUP -->
<script  src="{{ asset('frontend/js/bootstrap-slider.min.js') }}"></script><!-- Form js -->
<script  src="{{ asset('frontend/js/swiper-bundle.min.js') }}"></script><!-- Swiper js -->
<script  src="{{ asset('frontend/js/jquery.bgscroll.js') }}"></script><!-- BACKGROUND SCROLL -->
<script  src="{{ asset('frontend/js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
<!--INITIALIZE TOASTR-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</body>



</html>
