@extends('layouts.landing.main')
@section('title', 'Home - Wavesync')
@section('content')
<style>
    .service-item {
        border-radius: 30px;
    }

    a .short-desc {
        color: #000 !important;
    }

    a.text-decoration-none p {
        color: #000 !important;
    }
</style>
<!-- Hero Section -->
<section id="hero" class="hero section dark-background">

    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
                <h1>All Your Digital Services in One Place</h1>
                <p>We offer high-speed internet, crystal-clear TV, reliable phone services, mobile plans, cable connections, and easy bill payments—all under one roof. Experience convenience, reliability, and savings with us today!</p>
                <div class="d-flex gap-2">
                    <a href="tel:+18336217696" class="btn-get-started">(833) 621-7696</a>
                    <a href="#contact" class="btn-get-started ml-2">Contact</a>
                    <!-- <a href="#contact" class="btn-watch-video d-flex align-items-center"><span>Contact</span></a> -->
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{ asset('landingPage/assets/img/hero-img.png') }}" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

</section><!-- /Hero Section -->

<!-- Clients Section -->
<!-- <section id="clients" class="clients section light-background">

    <div class="container" data-aos="zoom-in">

        <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
                {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                        "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                    },
                    "breakpoints": {
                        "320": {
                            "slidesPerView": 2,
                            "spaceBetween": 40
                        },
                        "480": {
                            "slidesPerView": 3,
                            "spaceBetween": 60
                        },
                        "640": {
                            "slidesPerView": 4,
                            "spaceBetween": 80
                        },
                        "992": {
                            "slidesPerView": 5,
                            "spaceBetween": 120
                        },
                        "1200": {
                            "slidesPerView": 6,
                            "spaceBetween": 120
                        }
                    }
                }
            </script>
            <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide"><img src="{{ asset('landingPage/assets/img/clients/client-1.png') }}" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('landingPage/assets/img/clients/client-2.png') }}" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('landingPage/assets/img/clients/client-3.png') }}" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('landingPage/assets/img/clients/client-4.png') }}" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('landingPage/assets/img/clients/client-5.png') }}" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('landingPage/assets/img/clients/client-6.png') }}" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('landingPage/assets/img/clients/client-7.png') }}" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('landingPage/assets/img/clients/client-8.png') }}" class="img-fluid" alt=""></div>
            </div>
        </div>

    </div>

</section> -->

<!-- About Section -->
<section id="about" class="about section">
    <div class="container section-title" data-aos="fade-up">
        <h2>About Us</h2>
    </div>

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                <h2>Simple Solutions for a Connected Life</h2>
                <p>We provide all the essential services you need in one place. TV, internet, home phone, mobile services, cable, and easy bill payments. Our goal is to make your life easier by offering reliable and affordable solutions for your everyday needs.</p>
                <ul>
                    <li><i class="bi bi-check2-circle"></i> <span>We provide secure and hassle free options for paying your bills.</span></li>
                    <li><i class="bi bi-check2-circle"></i> <span>Our goal is to make your life easier with reliable digital services.</span></li>
                    <li><i class="bi bi-check2-circle"></i> <span>We understand the importance of staying connected in today’s world.</span></li>
                </ul>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <p>With our experience in the industry, we understand how important it is to stay connected. That’s why we offer fast internet, clear calling, great TV packages, and secure payment options, all designed to fit your lifestyle and budget.</p>
                <p>We work hard to give you the best service, with no hidden fees and quick support whenever you need it. Whether you’re at home, at work, or on the go, we help you stay connected with ease.</p>
                <p>At the core of everything we do is a simple promise: We make your digital life easier, more reliable, and stress-free. Your satisfaction is what drives us every day.</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Us Section -->
<section id="why-us" class="section why-us light-background" data-builder="section">
    <div class="container-fluid">
        <div class="row gy-4">
            <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">
                <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                    <h3><span>Why </span><strong>Choose</strong> <span>Us</span></h3>
                    <p>We make digital living easier by offering all essential services under one roof. Whether it's internet, TV, mobile, or bill payments. We deliver fast, affordable, and reliable solutions with excellent customer support. Our goal is your satisfaction and convenience.</p>
                </div>
                <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="faq-item faq-active">
                        <h3><span>01</span>All-in-One Convenience</h3>
                        <div class="faq-content">
                            <p>We provide TV, internet, phone, mobile, and bill payment services, all in one place, so you don’t need to manage multiple providers.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div>

                    <div class="faq-item">
                        <h3><span>02</span>Fast & Reliable Services</h3>
                        <div class="faq-content">
                            <p>Our high-speed internet and clear voice connections ensure you stay connected without interruptions or delays.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div>

                    <div class="faq-item">
                        <h3><span>03</span>Affordable & Transparent Pricing</h3>
                        <div class="faq-content">
                            <p>We offer competitive pricing with no hidden fees. What you see is what you pay simple, honest, and fair.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2 why-us-img">
                <img src="{{ asset('landingPage/assets/img/why-us.png') }}" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="skills section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">

            <div class="col-lg-6 d-flex align-items-center">
                <img src="{{ asset('landingPage/assets/img/skills.png') }}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-6 pt-4 pt-lg-0 content">

                <!-- <h3>Voluptatem dignissimos provident quasi corporis voluptas</h3> -->
                <p class="fst-italic">We are experts in delivering reliable, fast, and user-friendly digital services. Our team is skilled in providing seamless solutions that keep homes and businesses connected with ease and efficiency.</p>

                <div class="skills-content skills-animation">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="progress">
                                <span class="skill"><span>Internet Setup</span> <i class="val">100%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="progress">
                                <span class="skill"><span>Wi-Fi Installation</span> <i class="val">100%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="progress">
                                <span class="skill"><span>TV Services</span> <i class="val">100%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="progress">
                                <span class="skill"><span>Cable Setup</span> <i class="val">100%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="progress">
                                <span class="skill"><span>Mobile Plans</span> <i class="val">100%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="progress">
                                <span class="skill"><span>Landline Service</span> <i class="val">100%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="progress">
                                <span class="skill"><span>Bill Payments</span> <i class="val">99%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="99"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="progress">
                                <span class="skill"><span>Bundle Offers</span> <i class="val">100%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="progress">
                                <span class="skill"><span>Device Support</span> <i class="val">100%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="progress">
                                <span class="skill"><span>Tech Support</span> <i class="val">99%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="99"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="progress">
                        <span class="skill"><span>HTML</span> <i class="val">100%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="services section light-background">
    <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>We provide a full range of telecom and utility services, including TV, high-speed internet, home phone, and mobile plans, all in one place. From cable setups to secure bill payments, we make it easy and convenient. Whether you're switching providers or setting up a new service, we’re here to help with fast support and trusted options.</p>
    </div>

    <div class="container">
        <div class="row gy-4">
            @foreach ($services as $service)
            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                <a href="{{ route('services.show', $service->id) }}" class="w-100 text-decoration-none">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-activity icon"></i></div>
                        <h4>{{ $service->title }}</h4>
                        <p style="color: black !important">{!! $service->short_description !!}</p>
                    </div>
                </a>
            </div>
            @endforeach

            <!-- <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item position-relative">
                    <div class="icon"><i class="bi bi-activity icon"></i></div>
                    <h4>High-Speed Internet</h4>
                    <p>Stay online with stable and fast connections ideal for streaming, gaming, remote work, or everyday browsing.</p>
                </div>
            </div> -->

            <!-- <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item position-relative">
                    <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
                    <h4>TV & Entertainment</h4>
                    <p>Access local and international channels with flexible packages, HD/4K support, and streaming-ready setups.</p>
                </div>
            </div> -->

            <!-- <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item position-relative">
                    <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
                    <h4>Home Phone Service</h4>
                    <p>Crystal-clear calling with features like caller ID, voicemail, and unlimited local & long-distance packages.</p>
                </div>
            </div> -->

            <!-- <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                <div class="service-item position-relative">
                    <div class="icon"><i class="bi bi-broadcast icon"></i></div>
                    <h4>Mobile Plans</h4>
                    <p>Affordable SIM-only or device+plan combos with unlimited talk, text, and data options. Keep your current number too!</p>
                </div>
            </div> -->
        </div>
        <!-- <div class="row gy-4 mt-3">
            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item position-relative">
                    <div class="icon"><i class="bi bi-activity icon"></i></div>
                    <h4>Cable Setup & Support</h4>
                    <p>We handle new installations or upgrades, helping you choose the right cable plan for your needs.</p>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item position-relative">
                    <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
                    <h4>Bundle Packages</h4>
                    <p>Save more when you combine internet, TV, and phone into one customized bundle.</p>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item position-relative">
                    <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
                    <h4>Bill Payment Services</h4>
                    <p>Pay utility, internet, and other bills through a secure, easy-to-use system. No long lines, no missed due dates.</p>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                <div class="service-item position-relative">
                    <div class="icon"><i class="bi bi-broadcast icon"></i></div>
                    <h4>Customer Support</h4>
                    <p>Our support team is available 24/7 to help with setup, questions, or troubleshooting.</p>
                </div>
            </div>
        </div> -->
    </div>
</section>

<!-- Call To Action Section -->
<section id="call-to-action" class="call-to-action section dark-background">
    <img src="{{ asset('landingPage/assets/img/cta-bg.webp') }}" alt="">
    <div class="container">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-xl-9 text-center text-xl-start">
                <h3>Call To Action</h3>
                <p>Need internet, TV, phone, or mobile services? We’re here to help! Get started today with easy, affordable, and reliable solutions all in one place. Contact us now to enjoy stress-free service.</p>
            </div>
            <div class="col-xl-3 cta-btn-container text-center">
                <a class="cta-btn align-middle" href="tel:+18336217696">(833) 621-7696</a>
            </div>
        </div>
    </div>
</section>

<!-- Faq 2 Section -->
<section id="faq-2" class="faq-2 section light-background">
    <div class="container section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
        <p>Have questions? We’re here to help! Below are some of the most common questions our customers ask. From service details to billing and support, find quick and clear answers to get started with confidence.</p>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="faq-container">
                    <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
                        <i class="faq-icon bi bi-question-circle"></i>
                        <h3>1. What services do you offer?</h3>
                        <div class="faq-content">
                            <p>We offer internet, TV, home phone, mobile plans, cable services, and bill payment options—all in one place.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div>

                    <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                        <i class="faq-icon bi bi-question-circle"></i>
                        <h3>2. Can I bundle services to save money?</h3>
                        <div class="faq-content">
                            <p>Yes! We offer bundle packages so you can combine internet, TV, and phone services at a discounted price.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div>

                    <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                        <i class="faq-icon bi bi-question-circle"></i>
                        <h3>3. How can I pay my bills?</h3>
                        <div class="faq-content">
                            <p>You can pay your bills easily through our secure online payment system or visit our service center.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div>

                    <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                        <i class="faq-icon bi bi-question-circle"></i>
                        <h3>4. How fast is your internet?</h3>
                        <div class="faq-content">
                            <p>We provide high-speed internet with different plans to match your needs—perfect for streaming, working, or gaming.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div>

                    <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                        <i class="faq-icon bi bi-question-circle"></i>
                        <h3>Do you offer customer support?</h3>
                        <div class="faq-content">
                            <p>Yes, our friendly support team is available 24/7 to help you with any questions or issues.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div>

                    <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                        <i class="faq-icon bi bi-question-circle"></i>
                        <h3>How do I get started?</h3>
                        <div class="faq-content">
                            <p>To get started, just call us at the number below.</p>
                            <a href="tel:+18336217696" class="btn btn-primary mt-2">Call Us at (833) 621-7696</a>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Need help or have a question? Our team is here to assist you with anything related to our services. Whether it's about internet, TV, phone, or billing, feel free to reach out. We're just a call or message away!</p>
    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

            <div class="col-lg-5">

                <div class="info-wrap">
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Address</h3>
                            <p>7811 5th Ave #33 Brooklyn, NY 11209</p>
                        </div>
                    </div>

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Call Us</h3>
                            <p>(833) 621-7696</p>
                        </div>
                    </div>

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email Us</h3>
                            <p>support@wavesync-ny-llc.com</p>
                        </div>
                    </div>

                    <!-- <iframe src="https://www.google.com/maps/search/A108+Adam+Street+New+York,+NY+535022/@40.6983031,-73.9888563,17z/data=!3m1!4b1?entry=ttu&g_ep=EgoyMDI1MDcyNy4wIKXMDSoASAFQAw%3D%3D" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                </div>
            </div>

            <div class="col-lg-7">
                <form id="contact-form" action="#" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                    @csrf
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <label for="name-field" class="pb-2">Your Name</label>
                            <input type="text" name="name" id="name-field" class="form-control" required="">
                        </div>

                        <div class="col-md-6">
                            <label for="email-field" class="pb-2">Your Email</label>
                            <input type="email" class="form-control" name="email" id="email-field" required="">
                        </div>

                        <div class="col-md-12">
                            <label for="subject-field" class="pb-2">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject-field" required="">
                        </div>

                        <div class="col-md-12">
                            <label for="message-field" class="pb-2">Message</label>
                            <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <!-- <div class="error-message"></div> -->
                            <div class="sent-message">Your message has been sent. Thank you!</div>

                            <button type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function() {
        $('#contact-form').on('submit', function(e) {
            e.preventDefault(); // prevent default submit

            let form = $(this);
            let formData = new FormData(this);
            let submitBtn = form.find('.submit-btn');

            // Disable button to prevent double click
            submitBtn.prop('disabled', true);

            $.ajax({
                url: "{{route('contact.store')}}",
                method: "POST",
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $('.loading').show();
                },
                success: function(response) {
                    $('.loading').hide();
                    Swal.fire({
                        icon: 'success',
                        title: 'Message Sent',
                        text: 'Your message has been sent successfully!',
                    });

                    form[0].reset();
                },
                error: function(xhr) {
                    $('.loading').hide();
                    let errors = xhr.responseJSON?.errors;
                    let errorMsg = "Something went wrong. Please try again.";

                    if (errors) {
                        errorMsg = Object.values(errors).join('\n');
                    }

                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: errorMsg
                    });
                },
                complete: function() {
                    // Always re-enable the button after request
                    submitBtn.prop('disabled', false);
                }
            });
        });
    });
</script>