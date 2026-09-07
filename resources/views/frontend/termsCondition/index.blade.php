@extends('layouts.landing.main')
@section('title', 'Terms and Conditions')
@section('content')
<section id="hero" class="hero section dark-background">
    <div class="container position-relative">
        <h1>Terms & Conditions</h1>
        <p>By using our TV, Internet, Cable, Home Phone, Cell Phone, and Bill Payment services, you agree to comply with all applicable laws and our platform’s terms. We reserve the right to modify these terms at any time, with updates communicated accordingly. All transactions are subject to verification for a secure experience.</p>
    </div>
</section>

<!-- Terms & Conditions Details Section -->
<section id="terms-conditions-details" class="terms-conditions section">
    <div class="container">
        <div class="row gy-4">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <!-- <span>Our Terms & Conditions<br></span> -->
                <h2>Our Terms & Conditions</h2>
                <p>By using our TV, Internet, Cable, Home Phone, Cell Phone, and Bill Payment services, you agree to comply with all applicable laws and our platform’s terms. We reserve the right to modify these terms at any time, with updates communicated accordingly. All transactions are subject to verification for a secure experience.</p>
            </div>

            <!-- Eligibility -->
            <div class="col-12">
                <h3>Eligibility</h3>
                <p>To use our services, you must meet the following criteria:</p>
                <ul>
                    <li>Be at least 18 years of age.</li>
                    <li>Be legally able to enter into a binding agreement.</li>
                    <li>Provide accurate, current, and complete registration details.</li>
                </ul>
            </div>

            <!-- Payment Process -->
            <div class="col-12">
                <h3>Payment Process</h3>
                <p>Payments for TV, Internet, Phone, Cable, and Bill Pay services are subject to the following:</p>
                <ul>
                    <li>All payments are processed securely through verified gateways.</li>
                    <li>Transactions may be delayed or declined pending verification.</li>
                    <li>We reserve the right to refuse or flag transactions for any reason.</li>
                </ul>
            </div>

            <!-- Refund Policy -->
            <div class="col-12">
                <h3>Refund Policy</h3>
                <p>Payments made are final and non-refundable unless:</p>
                <ul>
                    <li>An incorrect or duplicate charge occurs.</li>
                    <li>A technical error prevents successful processing.</li>
                </ul>
                <p>Contact our support team to request a review of your refund eligibility.</p>
            </div>

            <!-- Changes to Terms -->
            <div class="col-12">
                <h3>Changes to Terms</h3>
                <p>We may update these terms without prior notice. You will be informed via:</p>
                <ul>
                    <li>Website announcements.</li>
                    <!-- <li>Email notifications sent to your registered address.</li> -->
                </ul>
                <p>Continued use of our services indicates your agreement to the updated terms.</p>
            </div>

            <!-- Limitation of Liability -->
            <div class="col-12">
                <h3>Limitation of Liability</h3>
                <p>By using our services, you acknowledge and accept that:</p>
                <ul>
                    <li>We are not responsible for third-party service disruptions or failures.</li>
                    <li>We are not liable for delays in processing due to provider or technical issues.</li>
                </ul>
            </div>

            <!-- Dispute Resolution -->
            <div class="col-12">
                <h3>Dispute Resolution</h3>
                <p>In case of disputes, we follow this resolution process:</p>
                <ul>
                    <li>All disputes will be resolved through binding arbitration.</li>
                    <li>Arbitration will take place in our business jurisdiction.</li>
                    <li>We aim to resolve issues amicably and avoid litigation where possible.</li>
                </ul>
            </div>

            <!-- Compliance with Laws -->
            <div class="col-12">
                <h3>Compliance with Laws</h3>
                <p>You agree to use our services in accordance with all applicable laws, including:</p>
                <ul>
                    <li>Not using the platform for unlawful or fraudulent activity.</li>
                    <li>Complying with applicable tax regulations in your region.</li>
                    <li>Respecting intellectual property and third-party rights.</li>
                </ul>
            </div>

            <!-- Privacy -->
            <div class="col-12">
                <h3>Privacy</h3>
                <p>Your privacy is protected as outlined in our <a href="{{route('privacyPolicy')}}">Privacy Policy</a>:</p>
                <ul>
                    <li>We collect only the data necessary to process your services.</li>
                    <li>Data is stored securely and never sold to third parties.</li>
                </ul>
            </div>

        </div>
    </div>
</section>
@endsection
