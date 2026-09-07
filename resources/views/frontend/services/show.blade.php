@extends('layouts.landing.main')
@section('title', 'Home - Wavesync')
@section('content')
<section id="hero" class="hero section dark-background">
    <div class="container position-relative">
        <h1 class="hero-title" data-aos="zoom-in" data-aos-delay="200">
            Empower Your Business with our {{ $service->title }}
        </h1>
        <p>We offer high-speed internet, crystal-clear TV, reliable phone services, mobile plans, cable connections, and easy bill payments—all under one roof. Experience convenience, reliability, and savings with us today!</p>
    </div>
</section>
<!-- Service Details Section -->
<section id="service-details" class="service-details section mt-5">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-center justify-content-between g-lg-5">
            <div class="col-lg-12" data-aos="fade-left" data-aos-delay="300">
                <div class="content">
                    <h2 class="mb-4">{{ $service->title }}</h2>
                    <h5 class="mb-4">{!! $service->short_description !!}</h5>

                    {{-- Render long description with formatting --}}
                    <p>{!! $service->long_description !!}</p>

                    {{-- Show price --}}
                    <p><strong style="font-size: 20px; font-weight:800">Price:</strong> {{ $service->price }}</p>

                    {{-- Optionally add features or extras --}}
                    <div class="features-list mt-5" data-aos="fade-up" data-aos-delay="400">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="feature-item">
                                    {{-- You can display service features here if needed --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection