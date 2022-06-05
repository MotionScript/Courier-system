@php
  $site = App\Models\SiteSettings::find(1);
@endphp

<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href=""><img src="{{ asset($site->logo) }}" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href=""><img src="{{ asset($site->logo) }}" alt="logo m" /></a>
    </div>


    <ul class="nav">





      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ route('dashboard') }}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>




      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#Categories" aria-expanded="false" aria-controls="Categories">
          <span class="menu-icon">
            <i class="mdi mdi-laptop"></i>
          </span>
          <span class="menu-title">Home Page Section</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="Categories">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('home-slider') }}">Sliders</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('why-us') }}">Why Choose us</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('service') }}">Our Services</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('estimate') }}">Estimation</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('clientlogo') }}">Clients Logos</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('testy') }}">Testimonials</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('faq') }}">FAQs</a></li>

          </ul>
        </div>
      </li>


      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#posts" aria-expanded="false" aria-controls="posts">
          <span class="menu-icon">
            <i class="mdi mdi-laptop"></i>
          </span>
          <span class="menu-title">Shippings</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="posts">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('add-shippment') }}">Add New Shippment</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('all-shippments') }}">Manage Shippments</a></li>

          </ul>
        </div>
      </li>





      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#settings" aria-expanded="false" aria-controls="settings">
          <span class="menu-icon">
            <i class="mdi mdi-security"></i>
          </span>
          <span class="menu-title">Settings</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="settings">
          <ul class="nav flex-column sub-menu">
           <li class="nav-item"> <a class="nav-link" href="{{ route('seo') }}"> SEO Settings </a></li>
           <li class="nav-item"> <a class="nav-link" href="{{ route('site') }}"> Website Settings </a></li>

          </ul>
        </div>
      </li>





      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#page" aria-expanded="false" aria-controls="page">
          <span class="menu-icon">
            <i class="mdi mdi-security"></i>
          </span>
          <span class="menu-title">Pages</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="page">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('page-cat') }}">Manage Pages</a></li>


          </ul>
        </div>
      </li>

      <li class="nav-item"> <a class="nav-link" href="{{ route('admin-profile') }}">Manage Account</a></li>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
      <li class="nav-item"> <a class="nav-link" href="route('logout')" onclick="event.preventDefault();
        this.closest('form').submit();">Log Out</a></li>
</form>




    </ul>
  </nav>
