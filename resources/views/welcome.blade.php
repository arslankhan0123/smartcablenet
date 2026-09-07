@extends('layouts.landing.main')
@section('title', 'Home - Smartcablenet')
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
                <h1>Complete Digital & Telecom Solutions Under One Roof</h1>
                <p>Get top-tier high-speed internet, premium HD TV, dependable landline calling, flexible mobile plans, cable connections, and hassle-free bill payments in a single platform. Enjoy seamless connectivity, maximum reliability, and great value today!</p>
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
    <div class="container section-title text-center" data-aos="fade-up">
        <span class="badge-sub-heading">WHO WE ARE</span>
        <h2>About Smartcablenet</h2>
    </div>

    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                <h2>Smart & Effortless Connectivity Solutions</h2>
                <p class="lead text-secondary" style="font-size: 16px;">We aggregate all your vital utility and telecom services in one accessible hub—ranging from television and high-speed internet to home phone, mobile contracts, cable setup, and seamless bill payments.</p>
                <div class="d-flex flex-column gap-3 mt-4">
                    <div class="d-flex align-items-start gap-3">
                        <div class="icon-box flex-shrink-0" style="background: rgba(6,182,212,0.12); color: #06b6d4; width: 42px; height: 42px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 20px;">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1" style="color: #0f172a;">Hassle-Free Recurring Payments</h6>
                            <p class="text-muted small mb-0">Safe and seamless payment solutions for all your monthly utility & telecom bills.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start gap-3">
                        <div class="icon-box flex-shrink-0" style="background: rgba(37,99,235,0.12); color: #2563eb; width: 42px; height: 42px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 20px;">
                            <i class="bi bi-lightning-charge-fill"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1" style="color: #0f172a;">Fast Digital Connectivity</h6>
                            <p class="text-muted small mb-0">Dedicated to simplifying your daily routine through dependable high-speed digital connectivity.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start gap-3">
                        <div class="icon-box flex-shrink-0" style="background: rgba(139,92,246,0.12); color: #8b5cf6; width: 42px; height: 42px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 20px;">
                            <i class="bi bi-globe2"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1" style="color: #0f172a;">Nationwide Communication Coverage</h6>
                            <p class="text-muted small mb-0">Recognizing how essential fast and steady communication is in modern living.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="p-4 rounded-4 shadow-sm" style="background: linear-gradient(135deg, #f8fafc 0%, #edf2f7 100%); border: 1px solid #e2e8f0;">
                    <p class="mb-3" style="color: #475569;">Leveraging deep industry expertise, we recognize how critical uninterrupted communication is today. That is why we deliver ultra-fast broadband, crystal-clear voice lines, rich television packages, and secure bill processing—crafted around your lifestyle and financial plan.</p>
                    <p class="mb-3" style="color: #475569;">We are committed to delivering premium quality with upfront, transparent pricing and responsive customer support whenever assistance is required. Whether managing tasks at home, working remotely, or on the move, we keep you connected effortlessly.</p>
                    <p class="mb-0 fw-semibold" style="color: #0f172a;">Our core philosophy revolves around a simple commitment: transforming your digital experience into something smooth, dependable, and hassle-free. Your total satisfaction remains our primary motivation every single day.</p>
                </div>
            </div>
        </div>

        <!-- Stat Highlight Cards -->
        <div class="row g-4 mt-3" data-aos="fade-up" data-aos-delay="300">
            <div class="col-md-4">
                <div class="stat-card">
                    <h3>100K+</h3>
                    <p>Connected Households</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-card">
                    <h3>99.9%</h3>
                    <p>Network Uptime Guarantee</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-card">
                    <h3>24/7</h3>
                    <p>Expert Support Access</p>
                </div>
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
                    <span class="badge-sub-heading">WHY SMARTCABLENET</span>
                    <h3><span>Why </span><strong>Choose</strong> <span>Us</span></h3>
                    <p>We simplify modern connectivity by bringing all your key telecom and utility needs together in one place. From high-speed internet and TV to mobile coverage and quick bill payments, we deliver swift, cost-effective, and dependable solutions backed by top-tier customer assistance. Your convenience and complete satisfaction drive everything we do.</p>
                </div>
                <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="faq-item faq-active">
                        <h3><span>01</span>Streamlined Single-Source Access</h3>
                        <div class="faq-content">
                            <p>Access television, broadband, landline, cellular, and bill management through one centralized service, eliminating the hassle of dealing with multiple vendors.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div>

                    <div class="faq-item">
                        <h3><span>02</span>High-Speed & Dependable Performance</h3>
                        <div class="faq-content">
                            <p>Our blazing broadband speeds and HD voice clarity keep your communications running smoothly without lag or unexpected outages.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div>

                    <div class="faq-item">
                        <h3><span>03</span>Clear, Honest & Budget-Friendly Rates</h3>
                        <div class="faq-content">
                            <p>We maintain upfront pricing structures free of hidden surprises—delivering straightforward, fair, and competitive plans for every budget.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2 why-us-img">
                <img src="{{ asset('landingPage/assets/img/why-us.png') }}" class="img-fluid rounded-4 shadow-sm" alt="" data-aos="zoom-in" data-aos-delay="100">
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="skills section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">

            <div class="col-lg-6 d-flex align-items-center">
                <img src="{{ asset('landingPage/assets/img/skills.png') }}" class="img-fluid rounded-4" alt="">
            </div>

            <div class="col-lg-6 pt-4 pt-lg-0 content">
                <span class="badge-sub-heading">OUR CAPABILITIES</span>
                <h3>High Performance Service Reliability</h3>
                <p class="fst-italic text-secondary mb-4">We specialize in delivering fast, dependable, and intuitive digital telecom services. Our experienced team is dedicated to providing smooth solutions that empower households and enterprises with seamless, highly efficient connectivity.</p>

                <div class="skills-content skills-animation">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="progress mb-3">
                                <span class="skill"><span>Internet Setup</span> <i class="val">100%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="progress mb-3">
                                <span class="skill"><span>Wi-Fi Installation</span> <i class="val">100%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="progress mb-3">
                                <span class="skill"><span>TV Services</span> <i class="val">100%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="progress mb-3">
                                <span class="skill"><span>Cable Setup</span> <i class="val">100%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="progress mb-3">
                                <span class="skill"><span>Mobile Plans</span> <i class="val">100%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="progress mb-3">
                                <span class="skill"><span>Landline Service</span> <i class="val">100%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="progress mb-3">
                                <span class="skill"><span>Bill Payments</span> <i class="val">99%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="99"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="progress mb-3">
                                <span class="skill"><span>Bundle Offers</span> <i class="val">100%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="progress mb-3">
                                <span class="skill"><span>Device Support</span> <i class="val">100%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="progress mb-3">
                                <span class="skill"><span>Tech Support</span> <i class="val">99%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="99"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@php
    $iconMap = [
        'TV Services' => 'bi-tv-fill',
        'Internet Service' => 'bi-wifi',
        'Home Phone Service' => 'bi-telephone-fill',
        'Mobile Plans' => 'bi-phone-fill',
        'Cable Setup & Support' => 'bi-tools',
        'Bill Payment Services' => 'bi-credit-card-2-front-fill',
        'Bundle Packages' => 'bi-box-seam-fill',
        'Customer Support' => 'bi-headset',
    ];
@endphp

<!-- Services Section -->
<section id="services" class="services section light-background">
    <div class="container section-title text-center" data-aos="fade-up">
        <span class="badge-sub-heading">WHAT WE PROVIDE</span>
        <h2>Services</h2>
        <p>We offer a comprehensive suite of telecommunications and utility management services, spanning HD television, high-speed internet, landlines, and wireless mobile plans. From cable installation to secure bill payments, we ensure maximum convenience. Whether you are transitioning to a better provider or launching a brand-new connection, our team provides prompt support and dependable choices every step of the way.</p>
    </div>

    <div class="container">
        <div class="row gy-4">
            @foreach ($services as $service)
            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                <a href="{{ route('services.show', $service->id) }}" class="w-100 text-decoration-none">
                    <div class="service-item position-relative h-100 d-flex flex-column justify-content-between">
                        <div>
                            <div class="icon mb-3">
                                <i class="bi {{ $iconMap[$service->title] ?? 'bi-broadcast' }}"></i>
                            </div>
                            <h4>{{ $service->title }}</h4>
                            <p style="color: #475569 !important">{!! $service->short_description !!}</p>
                        </div>
                        <div class="service-link">
                            <span>Explore Service</span>
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Call To Action Section -->
<section id="call-to-action" class="call-to-action section dark-background my-4">
    <img src="{{ asset('landingPage/assets/img/cta-bg.webp') }}" alt="" class="cta-bg-img">
    <div class="container position-relative z-2">
        <div class="p-4 p-md-5 rounded-4 shadow-lg position-relative overflow-hidden" style="background: rgba(9, 14, 26, 0.75); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.12);">
            <div class="row align-items-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-9 text-center text-xl-start">
                    <span class="badge-sub-heading text-info bg-transparent border border-info mb-3">GET CONNECTED TODAY</span>
                    <h3 class="text-white fw-bold display-6 mb-3">Ready to Elevate Your Digital Experience?</h3>
                    <p class="text-light lead fs-6 mb-0" style="max-width: 800px; color: #cbd5e1 !important; line-height: 1.7;">Looking for dependable internet, television, landline, or mobile solutions? We are at your service! Take advantage of affordable, high-quality, and unified telecom packages today. Reach out now for a smooth and worry-free setup!</p>
                </div>
                <div class="col-xl-3 cta-btn-container text-center mt-4 mt-xl-0">
                    <a class="cta-btn align-middle btn-lg fs-5 px-4 py-3 text-white fw-bold shadow-lg d-inline-flex align-items-center gap-2 justify-content-center" href="tel:+18336217696" style="background: linear-gradient(135deg, #06b6d4 0%, #2563eb 100%); border-radius: 30px; text-decoration: none; border: none;">
                        <i class="bi bi-telephone-fill"></i>
                        <span>(833) 621-7696</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Faq 2 Section -->
<section id="faq-2" class="faq-2 section light-background">
    <div class="container section-title text-center" data-aos="fade-up">
        <span class="badge-sub-heading">HAVE QUESTIONS?</span>
        <h2>Frequently Asked Questions</h2>
        <p>Got questions? We have answers! Explore responses to the most frequently asked queries about our telecom packages, bill processing, and technical support to guide your decisions with clarity.</p>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="faq-container">
                    <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
                        <i class="faq-icon bi bi-question-circle"></i>
                        <h3>1. Which digital and telecom services do you provide?</h3>
                        <div class="faq-content">
                            <p>We deliver high-speed broadband, television packages, home telephone connections, mobile plans, cable configuration, and utility bill processing within a single platform.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div>

                    <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                        <i class="faq-icon bi bi-question-circle"></i>
                        <h3>2. Is it possible to bundle multiple services for extra savings?</h3>
                        <div class="faq-content">
                            <p>Absolutely! Combining internet, TV, and landline services into a customized bundle package unlocks significant monthly discounts.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div>

                    <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                        <i class="faq-icon bi bi-question-circle"></i>
                        <h3>3. What options are available for bill payment?</h3>
                        <div class="faq-content">
                            <p>You can conveniently settle your invoices using our encrypted online payment portal or by visiting an authorized service location.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div>

                    <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                        <i class="faq-icon bi bi-question-circle"></i>
                        <h3>4. What broadband speeds can I expect?</h3>
                        <div class="faq-content">
                            <p>We offer tier-based high-speed internet packages tailored to your demands—ideal for 4K streaming, remote work, online gaming, and multi-device households.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div>

                    <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                        <i class="faq-icon bi bi-question-circle"></i>
                        <h3>5. Do you provide ongoing customer support?</h3>
                        <div class="faq-content">
                            <p>Yes, our dedicated customer service representatives are accessible around the clock (24/7) to resolve inquiries and technical concerns promptly.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div>

                    <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                        <i class="faq-icon bi bi-question-circle"></i>
                        <h3>6. How can I enroll or request a new service?</h3>
                        <div class="faq-content">
                            <p>Getting started is easy! Simply give us a call at the hotline below to speak with an advisor.</p>
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
    <div class="container section-title text-center" data-aos="fade-up">
        <span class="badge-sub-heading">REACH OUT TO US</span>
        <h2>Get in Touch</h2>
        <p>Have questions or need assistance? Our support team is ready to help you with any inquiries regarding broadband, television, telephone plans, or billing. Feel free to contact us via phone or online message!</p>
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
                            <p>sales@smartcablenet.com</p>
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