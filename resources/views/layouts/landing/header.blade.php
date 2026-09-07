<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="{{route('welcome')}}" class="logo d-flex align-items-center">
      <img src="{{ asset('landingPage/assets/img/logo.png') }}" alt="Smartcablenet Logo" style="max-height: 44px; border-radius: 8px; margin-right: 10px;">
      <span class="sitename brand-title" style="font-size: 25px; font-weight: 800; letter-spacing: -0.5px; color: #ffffff;">Smart<span style="color: #06b6d4;">cablenet</span></span>
    </a>

    <!-- Centered Nav -->
    <nav id="navmenu" class="navmenu mx-auto">
      <ul class="justify-content-center mb-0">
        <li><a href="{{route('welcome')}}#hero" class="active">Home</a></li>
        <li><a href="{{route('welcome')}}#about">About</a></li>
        <li><a href="{{route('welcome')}}#services">Services</a></li>
        <li><a href="{{route('welcome')}}#contact">Contact</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <!-- Right Side Button -->
    <a class="btn-getstarted" href="tel:+18336217696">(833) 621-7696</a>

  </div>
</header>
