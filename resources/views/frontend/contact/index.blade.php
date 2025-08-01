@extends('layouts.frontend.master')

@section('seo')
    @include('frontend.seo', [
        'name' => $contact_page->seo_title ?? '',
        'title' => $contact_page->seo_title ?? $contact_page->title,
        'description' => $contact_page->meta_description ?? '',
        'keyword' => $contact_page->meta_keywords ?? '',
        'schema' => $contact_page->seo_schema ?? '',
        'created_at' => $contact_page->created_at,
        'updated_at' => $contact_page->updated_at,
    ])
@endsection




@section('content')
    <!--==================================================-->
    <!-- Start advisar Breadcumb Area -->
    <!--==================================================-->
    <div class="breadcumb-area d-flex" style="
  background: url('{{ asset($contact_page->banner_image ?? '') }}');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <div class="breadcumb-content">
                        <div class="breadcumb-title">
                            <h4>{{ $contact_page->title ?? 'About Us' }}</h4>
                        </div>
                        <ul>
                            <li><a href="{{ route('frontend.home') }}"><i class="bi bi-house-door-fill"></i> Home </a></li>
                            <li class="rotates"><i class="bi bi-slash-lg"></i>{{ $contact_page->title ?? 'About Us' }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End advisar Breadcumb Area -->
    <!--==================================================-->

    <section class="branch-section">
        <div class="container">

            <div class="row g-4">
                @foreach ($branches as $branch)
                    <div class="col-md-4">
                        <div class="branch-card">
                            <i class="fas fa-building branch-icon"></i>
                            <h5>{{ $branch->title }}</h5>
                            <p>
                                <i class="fas fa-map-marker-alt"></i>
                                {{ $branch->location }}</p>
                            </p>
                            <p><i class="fas fa-envelope"></i> {{$branch->email}}</p>
                            <p><i class="fas fa-phone-alt"></i> {{ $branch->phone }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!--==================================================-->
    <!-- Start advisar Contact Area Inner Page -->
    <!--==================================================-->
    <section class="contact_area inner_section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section_title">
                        <h4>{{ $settings['contact_form_title'] ?? '' }}</h4>

                        <h1>{{ $settings['contact_form_subtitle'] ?? '' }}</h1>
                        <p>{{ $settings['contact_form_description'] ?? '' }}</p>
                    </div>
                    <div class="contact_main_info">
                        <div class="call-do-action-info">
                            <div class="call-do-social_icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="call_info">
                                <p>Call us Anytime</p>
                                <h3>{{ $settings['contact_phone'] ?? '+123456789' }}</h3>
                            </div>
                        </div>
                        <div class="call-do-action-info">
                            <div class="call-do-social_icon">
                                <i class="fas fa-envelope-open"></i>
                            </div>
                            <div class="call_info">
                                <p>Email us Anytime</p>
                                <h3>{{ $settings['contact_email'] ?? 'asmita' }}</h3>
                            </div>
                        </div>
                        <div class="call-do-action-info">
                            <div class="call-do-social_icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="call_info">
                                <p>Our Locations</p>
                                <span> {{ $settings['contact_location'] ?? 'asmita' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- contact form box -->
                    <div class="contact-form-box style_two">
                        <!-- section title -->
                        <div class="section_title style_three style_four text-center ">
                            <h4>CONTACT US</h4>
                            <h1>Get In Touch with Celta</h1>
                        </div>
                        <form action="{{ route('frontend.contact.submit') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box">
                                        <input type="text" name="name" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box">
                                        <input type="text" name="phone" placeholder="Phone No">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box">
                                        <input type="email" name="email" placeholder="E-Mail Address">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box">
                                        <input type="text" name="city" placeholder="City">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-box message">
                                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Write Message"></textarea>
                                    </div>
                                </div>
                                <div class="contact-form">
                                    <button type="submit"><i class="far fa-thumbs-up"></i> Request Call Back</button>
                                </div>
                            </div>
                        </form>
                        <div id="status"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact_shape2 dance2">
            <img src="assets/images/main-home/service_shpe2.png" alt="">
        </div>
    </section>
    <!--==================================================-->
    <!-- End advisar Contact Area  Inner Page -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start advisar Map Area -->
    <!--==================================================-->
    <div class="map-section">
        <div class="-custon-container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.0608181116577!2d85.34359637447275!3d27.715408425137635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19004c2211d3%3A0x1394070dc79ba956!2sCelta%20Educare%20Consultancy%20Chabahil!5e0!3m2!1sen!2snp!4v1745419515872!5m2!1sen!2snp"
                        width="1920" height="520" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <!-- Bootstrap Bundle (JS + Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const toastEl = document.querySelector('.toast');
                if (toastEl) {
                    const bsToast = new bootstrap.Toast(toastEl, {
                        delay: 3000
                    });
                    bsToast.show();
                }
            });
        </script>
    @endpush

    <!--==================================================-->
    <!-- End advisar Map Area -->
    <!--==================================================-->
@endsection
