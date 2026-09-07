  <footer id="footer" class="footer" style="background: #f5f6f8;">
      <div class="container footer-top">
          <div class="row gy-4">
              <div class="col-lg-4 col-md-6 footer-about">
                  <a href="{{route('welcome')}}" class="d-flex align-items-center">
                      <img src="{{ asset('landingPage/assets/img/logo.png') }}" alt="Smartcablenet Logo" style="max-height: 48px; border-radius: 8px; margin-right: 10px;">
                      <span class="sitename brand-title" style="font-size: 26px; font-weight: 800; color: #ffffff;">Smart<span style="color: #06b6d4;">cablenet</span></span>
                  </a>
                  <div class="footer-contact pt-3">
                      <p>Your trusted partner for high-speed internet, digital TV, dependable landline, mobile options, cable solutions, and effortless bill payments. Experience unmatched convenience, top reliability, and great savings today!</p>
                  </div>
              </div>

              <div class="col-lg-2 col-md-3 footer-links">
                  <h4>Useful Links</h4>
                  <ul>
                      <li><i class="bi bi-chevron-right"></i> <a href="{{route('welcome')}}#hero">Home</a></li>
                      <li><i class="bi bi-chevron-right"></i> <a href="{{route('welcome')}}#about">About us</a></li>
                      <li><i class="bi bi-chevron-right"></i> <a href="{{route('welcome')}}#services">Services</a></li>
                      <li><i class="bi bi-chevron-right"></i> <a href="{{route('welcome')}}#contact">Contact us</a></li>
                      <li><i class="bi bi-chevron-right"></i> <a href="{{route('privacyPolicy')}}">Privacy Policy</a></li>
                      <li><i class="bi bi-chevron-right"></i> <a href="{{route('refundPolicy')}}">Refund Policy</a></li>
                      <li><i class="bi bi-chevron-right"></i> <a href="{{route('termsCondition')}}">Terms Condition</a></li>
                      <li><i class="bi bi-chevron-right"></i> <a href="{{route('disclaimer')}}">Disclaimer</a></li>
                  </ul>
              </div>

              <div class="col-lg-2 col-md-3 footer-links">
                  <h4>Our Services</h4>
                  <ul>
                      @foreach ($services as $service)
                      <li>
                          <i class="bi bi-chevron-right"></i>
                          <a href="{{ route('services.show', $service->id) }}">{{ $service->title }}</a>
                      </li>
                      @endforeach
                  </ul>
              </div>
              <!-- <div class="col-lg-2 col-md-3 footer-links">
                  <h4>Our Services</h4>
                  <ul>
                      <li><i class="bi bi-chevron-right"></i> TV Services</li>
                      <li><i class="bi bi-chevron-right"></i> Internet</li>
                      <li><i class="bi bi-chevron-right"></i> Home Phone</li>
                      <li><i class="bi bi-chevron-right"></i> Cell Phone</li>
                      <li><i class="bi bi-chevron-right"></i> Bill Payments</li>
                      <li><i class="bi bi-chevron-right"></i> Cable Services</li>
                  </ul>
              </div> -->

              <div class="col-lg-4 col-md-12">
                  <h4>Address</h4>
                  <p>Reach out to us through any of the contact details below—we are always happy to assist!</p>
                  <div class="footer-contact">
                      <p><strong>Address:</strong>7811 5th Ave #33 Brooklyn, NY 11209</p>
                      <p><strong>Phone:</strong> <span>(833) 621-7696</span></p>
                      <p><strong>Email:</strong> <span>sales@smartcablenet.com</span></p>
                  </div>
                  
                  <!-- Payment Methods -->
                  <div class="payment-methods mt-3">
                      <img src="{{ asset('payment_methods.png') }}" alt="Payment Methods" class="img-fluid" style="max-width: 300px;">
                  </div>
                  <!-- <div class="social-links d-flex">
                      <a href=""><i class="bi bi-twitter-x"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                  </div> -->
              </div>

          </div>
      </div>
      <div class="container copyright text-center mt-4">
          <p><span>We operate as an independent service provider and have no official affiliation with, authorization from, or endorsement by <strong class="px-1 sitename">Verizon, AT&T, Spectrum, Cox, Xfinity, or any other telecommunications carrier</strong>. All brand names, logos, and registered trademarks belong to their respective owners and are cited strictly for informational and reference purposes.</span></p>
      </div>
  </footer>