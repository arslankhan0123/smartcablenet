  <footer id="footer" class="footer" style="background: #f5f6f8;">
      <div class="container footer-top">
          <div class="row gy-4">
              <div class="col-lg-4 col-md-6 footer-about">
                  <a href="{{route('welcome')}}" class="d-flex align-items-center">
                      <span class="sitename">WaveSync Ny LLC</span>
                  </a>
                  <div class="footer-contact pt-3">
                      <p>We offer high-speed internet, crystal-clear TV, reliable phone services, mobile plans, cable connections, and easy bill payments all under one roof. Experience convenience, reliability, and savings with us today!</p>
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
                  <p>Get in touch with us using the contact details below—we’re here to help!</p>
                  <div class="footer-contact">
                      <p><strong>Address:</strong>7811 5th Ave #33 Brooklyn, NY 11209</p>
                      <p><strong>Phone:</strong> <span>(833) 621-7696</span></p>
                      <p><strong>Email:</strong> <span>support@wavesync-ny-llc.com</span></p>
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
          <p><span>We are an independent service provider and are not affiliated with or endorsed by <strong class="px-1 sitename">Verizon, AT&T, Spectrum, Cox, Xfinity, or any other telecommunications provider</strong> . All product names, logos, and trademarks are the property of their respective owners and are used for identification purposes only.</span></p>
      </div>
  </footer>