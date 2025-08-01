@section('seo')
    @include('frontend.seo', [
        'name' => $settings['homepage_title'] ?? '',
        'title' => $settings['homepage_seo_title'] ?? '',
        'description' => $settings['home_seo_description'] ?? '',
        'keyword' => $settings['homepage_seo_keywords'] ?? '',
        'created_at' => '2024-04-26T08:09:15+00:00',
        'updated_at' => '2024-04-26T10:54:05+00:00',
    ])
@endsection
@extends('layouts.frontend.master')

@section('content')
    <!--==================================================-->
    <!-- Start advisar Hero Area Style Two -->
    <!--==================================================-->
    <section class="hero_area d-flex align-items-center">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- hero content -->
                    <div class="hero_content">
                        <h4>{{ $sliders->title ?? 'BEST IT SOLUTION AGENCY' }}</h4>
                        <h1>{!! $sliders->short_description ?? 'Masterminds to Your <br>Positive Goals' !!}</h1>
                        <p>{!! $sliders->description ?? '' !!}</p>
                        <!-- slider button -->
                        <div class="slider_button">
                            <div class="hero_btn style_twos">
                                <a href="{{ route('frontend.contact') }}">
                                    <i class="far fa-thumbs-up"></i>{{ $sliders->button_text ?? 'Get Started' }}
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-thumb">
                        <img src="{{ asset($slider->image ?? 'frontend/assets/images/main-home/hero_thumb3.png') }}"
                            alt="">
                        <div class="hero_thumb_shape">
                            {{-- <img src="{{ asset('frontend/assets/images/main-home/hero3_dot_shape.png') }}" alt=""> --}}
                        </div>
                        <!-- Hero Powerful Box -->
                        {{-- <div class="powerful_box bounce-animate4">
                            <div class="hero_power_check">
                                <i class="bi bi-check-circle"></i>
                            </div>
                            <div class="hero_powerful_content">
                                <h4>{{ $slider->team_title ?? 'Powerful Team' }}</h4>
                                <p>{{ $slider->team_count ?? '36+ Members' }}</p>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="hero_shape rotate">
            {{-- <img src="{{ asset('frontend/assets/images/main-home/box.png') }}" alt=""> --}}
        </div>
    </section>

    <!--==================================================-->
    <!-- End advisar Hero Area Style Two -->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start advisar About Area Style Two-->
    <!--==================================================-->
    <section class="about_area style_three">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="about_thumb">
                        <img src="{{ asset($about_us->image_1 ?? 'frontend/assets/images/main-home/about_thumb.png') }}"
                            alt="">

                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="section_title style_eight">
                        <h4>{{ $about_us->title ?? 'ABOUT Us' }}</h4>
                        <h1>{!! nl2br(e($about_us->short_description ?? 'We Help Grow the Creative')) !!}</h1>
                        <p>{!! $about_us->description ?? 'Default about us description here.' !!}</p>
                    </div>
                    <div class="about_button style_upper">
                        <div class="about_btn style_two style_three">
                            <a href="{{ route('frontend.about') }}"><i class="far fa-thumbs-up"></i>More
                                About<span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="about_shape two style_five bounce-animate ">
            <img src="{{ asset('frontend/assets/images/main-home/about_shape2.png') }}" alt="">
        </div>
        <div class="about_shpe-three bounce-animate ">
            <img src="{{ asset('frontend/assets/images/main-home/about_shape.png') }}" alt="">
        </div>
        <div class="about_shpe-four bounce-animate2">
            <img src="{{ asset('frontend/assets/images/main-home/about_shape_3.png') }}" alt="">
        </div> --}}
    </section>

    <!--==================================================-->
    <!-- End advisar About Area Style Two-->
    <!--==================================================-->
    <!--==================================================-->
    <!-- Start advisar Marquee Area Style Two-->
    <!--==================================================-->
    {{-- <div class="marquee_area style_two">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slide-har st1">
                        <div class="box">
                            @foreach ($services as $item)
                                <div class="item">
                                    <h4 class="d-flex align-items-center">
                                        <a href="#">

                                            <img class="marqee_img_left" src="{{ asset('assets/images/main-home/marqee_star.png') }}" alt="">


                                            <span>{{ $item->title }}</span>


                                            <span class="icon-img-50 ml-40">
                                                <img src="{{ asset('assets/images/main-home/marqee_star.png') }}" alt="">
                                            </span>
                                        </a>
                                    </h4>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--==================================================-->
    <!-- End advisar  Marquee Area-->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start advisar country Area Style three -->
    <!--==================================================-->
    <section class="service_area style_two style_three country-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- section title -->
                    <div class="section_title style_three style_four text-center">
                        <h4>{{ $settings['countries_title'] ?? 'country' }}</h4>
                        <h1> {{ $settings['countries_subtitle'] ?? 'country' }}</h1>
                    </div>
                </div>
            </div>

            <div class="swiper-container swiper-countriesss">
                <div class="swiper-wrapper">
                    @foreach ($countries as $item)
                        <div class="swiper-slide">
                            <div class="country-card countrycard-hover mb-4 position-relative">
                                <img src="{{ asset($item->image) }}" alt="Card image">
                                <div class="overlay">
                                    <img class="corner-img" src="{{ asset($item->image_1) }}" alt="Corner image">
                                    <h5 class="title">{{ $item->title }}</h5>
                                    <button class="info-btns">More Info</button>

                                </div>
                                <a class="stretched-link" href="{{ route('frontend.abroadsingle', $item->slug) }}"></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Decorative Shapes -->
        {{-- <div class="service_shape_three style_four rotate">
            <img src="{{ asset('frontend/assets/images/main-home/service_shpe2.png') }}" alt="">
        </div>
        <div class="service_shape_five bounce-animate2">
            <img src="{{ asset('frontend/assets/images/main-home/service_shape.png') }}" alt="">
        </div>
        <div class="service_shape_three style_six bounce-animate4">
            <img src="{{ asset('frontend/assets/images/main-home/tir.png') }}" alt="">
        </div>
        <div class="service_shape_seven bounce-animate">
            <img src="{{ asset('frontend/assets/images/main-home/boxs.png') }}" alt="">
        </div> --}}
    </section>
    <!--==================================================-->
    <!-- End advisar country Area Style Two-->
    <!--==================================================-->
    <!--==================================================-->
    <!-- Start advisar Why Choose Us Area -->
    <!--==================================================-->
    {{-- <section class="why_choose_us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="choose_thumb">
                        <img src="{{ asset( $why_choose_us->image) }}" alt="">
                        <div class="choose_thumb_shpae bounce-animate">
                            <img src="{{ asset('frontend/assets/images/main-home/choose_dot.png') }}" alt="">
                        </div>
                        <div class="choose_thumb_shpae2 bounce-animate2">
                            <img src="{{ asset('frontend/assets/images/main-home/choose_dot2.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="choose_right">
                        <div class="section_title style_three pb-13">
                            <h4>{{ $why_choose_us->title }}</h4>
                            <h1>{{ $why_choose_us->title }}</h1>
                            <p>{!! $why_choose_us->description !!}</p>
                        </div>
                        <!-- choose shape -->
                        <div class="choose_all_shape">
                            <div class="choose_one bounce-animate">
                                <img src="{{ asset('frontend/assets/images/main-home/box.png') }}" alt="">
                            </div>
                            <div class="choose_two rotate">
                                <img src="{{ asset('frontend/assets/images/main-home/choose_rotete.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!--==================================================-->
    <!-- End advisar Why Choose Us Area-->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start advisar Team Area -->
    <!--==================================================-->

    {{-- for course --}}
    <section class="  course-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- section title -->
                    <div class="section_title style_three style_four text-center">
                        <h4>{{ $settings['courses_title'] ?? 'courses_title' }}</h4>
                        <h1> {{ $settings['courses_subtitle'] ?? 'asmita' }}</h1>
                    </div>
                </div>
            </div>
            <section class="">
                <div class="services container">
                    <div class="card-container row justify-content-center gap-x-4">
                        @foreach ($courses as $item)
                            <div class="col-md-4 position-relative py-3">
                                <!-- Wrap the whole card with the <a> tag -->
                                <a href="{{ route('frontend.coursesingle', $item->slug) }}" class="course-card">
                                    <img src="{{ asset($item->image) }}" alt="Course Image">
                                    <div class="overlay"></div>
                                    <div class="course-content">
                                        <button class="course-btn">{{ $item->title ?? '' }}</button>
                                        <p class="mb-0 line-clamp-2 course-desc">{{ $item->short_description ?? '' }}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                
            </section>
        </div>
    </section>

    {{-- for services --}}
    <section class="service_area style_four">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- section title -->
                    <div class="section_title style_three style_four text-center">
                        <h4> {{ $settings['services_title'] ?? 'asmita' }}</h4>
                        <h1>{{ $settings['services_subtitle'] ?? 'asmita' }}</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="service_list owl-carousel">
                    @foreach ($services as $service)
                        <div class="col-lg-12">
                            <div class="service_single_item style_two style_four">
                                <div class="service_content">
                                    <div class="service_icon">
                                        <img src="{{ asset($service->image) }}" alt="">
                                    </div>
                                    <h4>{{ $service->category }}</h4>
                                    <h3>{{ $service->title }}</h3>
                                    <p>{{ $service->short_description }}</p>
                                    <div class="service_btn">
                                        {{-- <a href="{{ route('service.show', $service->slug) }}">
                                            View Details <i class="flaticon flaticon-right-arrow"></i>
                                        </a> --}}
                                    </div>
                                </div>
                                @if ($service->image_1)
                                    <div class="service_thumb">
                                        <img src="{{ asset($service->image_1) }}" alt="">
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="team_area style_two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- section title -->
                    <div class="section_title style_three style_four text-center">
                        <h4> {{ $settings['teams_title'] ?? 'Our Team' }}</h4>
                        <h1>We’ve {{ $teams->count() }}+ Dedicated Members</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($teams as $team)
                    <div class="col-lg-3 col-md-6">
                        <div class="single-team_item style_two">
                            <div class="team_thumb">
                                <img src="{{ asset($team->image) }}" alt="{{ $team->name }}">
                                {{-- <div class="team-share">
                                    <div class="team-share-icon">
                                        <span><i class="bi bi-share"></i></span>
                                    </div>
                                </div> --}}

                            </div>
                            <div class="team-content">
                                <h3><a href="#">{{ $team->name }}</a></h3>
                                <span>{{ $team->position }}</span>
                            </div>
                            <div class="team_box_shape">
                                <img src="{{ asset('frontend/assets/images/main-home/team-dot.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- <div class="team_all_shape">
            <div class="shape_one">
                <img src="{{ asset('assets/images/main-home/team_rotate.png') }}" alt="">
            </div>
            <div class="shape_two">
                <img src="{{ asset('assets/images/main-home/tir.png') }}" alt="">
            </div>
            <div class="shape_three">
                <img src="{{ asset('assets/images/main-home/about_shape_3.png') }}" alt="">
            </div>
        </div> --}}
    </section>
    <!--==================================================-->
    <!-- End advisar Team Area -->
    <!--==================================================-->
    <!--==================================================-->
    <!-- Start Testimonial Area Style Three-->
    <!--==================================================-->
    @if ($universities->isNotEmpty())
        <section class="country-section univerisity-section">
            <div class="container">
                <div class="heading-css text-center mb-4">
                    <h3>Our Partner <span>Universities</span> </h3>
                </div>

                <div class="swiper-container swiper-universities ">
                    <div class="swiper-wrapper ">
                        @foreach ($universities as $university)
                            <div class="swiper-slide p-3">
                                <div class="university-card mb-3 position-relative">
                                    <div class="card-img-container shadow">
                                        <img src="{{ asset($university->image) }}" alt="{{ $university->name }}"
                                            class="card-img-top">
                                    </div>
                                    <a class="stretched-link" href=""></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>

        </section>
    @endif
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper('.swiper-universities', {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            autoplay: {
                delay: 2100,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                },
            },
        });
    </script>
    <section class="testimonial_area style_two style_three">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- section title -->
                    <div class="section_title style_three style_four text-center">
                        <h4> {{ $settings['testioninal_title'] ?? 'Our Team' }}</h4>
                        <h1>{{ $settings['testioninal_subtitle'] ?? 'Our Team' }}</h1>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="testi_list2 owl-carousel">
                        @foreach ($testimonials as $index => $testimonial)
                            <div class="col-lg-12">
                                <div class="testimonial_item style_two style_three {{ $index % 2 == 1 ? 'second' : '' }}">
                                    <div class="tesit-auothor">
                                        <div class="auothor_img">
                                            <img src="{{ asset($testimonial->image) }}" alt="">
                                        </div>
                                        <div class="bio">
                                            <h4 class="name">{{ $testimonial->name }}</h4>
                                            <h5 class="designation">{{ $testimonial->position }}</h5>
                                        </div>
                                    </div>

                                    <div class="testimonal-content">
                                        <p>{!! $testimonial->description !!}</p>
                                        <div class="testi-star">
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                        </div>
                                    </div>

                                    {{-- <div class="{{ $index % 2 == 1 ? 'testi_item_shape2' : 'testi_item_shape' }}">
                                        <img src="{{ asset('frontend/assets/images/main-home/' . ($index % 2 == 1 ? 'testi_shape2.png' : 'testi_shape.png')) }}"
                                            alt="">
                                    </div> --}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="testi_shape_all">
            <div class="testi_shape_two dance3">
                <img src="{{ asset('frontend/assets/images/main-home/service_shpe2.png') }}" alt="">
            </div>
            <div class="testi_shape_three dance">
                <img src="{{ asset('frontend/assets/images/main-home/service_shpe2.png') }}" alt="">
            </div>
            <div class="testi_shape_four bounce-animate">
                <img src="{{ asset('frontend/assets/images/main-home/tir.png') }}" alt="">
            </div>
        </div> --}}
    </section>
    <!--==================================================-->
    <!-- End advisar Testimonial Area Style Three -->
    <!--==================================================-->
    <!--==================================================-->
    <!-- Start advisar Counter Area Style Three-->
    <!--==================================================-->
    <section class="counter_area boxed">
        <div class="container">
            <div class="counter_upper">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="section_title style_two">
                            <h1>Trend analysis across educational</h1>
                            <h1> sectors and destinations </h1>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="advisar_btn text-right">
                            <a href="{{ route('frontend.contact') }}">Get Started Now <span></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="counter-single-item">
                        <div class="counter-content none">
                            <div class="counter-_number">
                                <h1 class="counter">{{ $settings['home_counter_students'] ?? '' }}</h1>

                            </div>
                            <div class="counter_title">
                                <h5>{{ $settings['home_counter_students_title'] ?? '' }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="counter-single-item">
                        <div class="counter-content">
                            <div class="counter-_number">
                                <h1 class="counter">{{ $settings['home_counter_scholarship'] ?? '' }}</h1>

                            </div>
                            <div class="counter_title">
                                <h5>{{ $settings['home_counter_scholarship_title'] ?? '' }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="counter-single-item">
                        <div class="counter-content">
                            <div class="counter-_number">
                                <h1 class="counter">{{ $settings['home_counter_enrolled'] ?? '' }}</h1>

                            </div>
                            <div class="counter_title">
                                <h5>{{ $settings['home_counter_enrolled_title'] ?? '' }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- Start advisar Counter Area Style Three -->
    <!--==================================================-->
    <!--==================================================-->
    <!-- Start advisar Contact Area -->
    <!--==================================================-->
    <section class="contact_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="contact_thumb">
                        <img src="{{ asset('frontend/assets/images/main-home/contact.png') }}" alt="">
                        <div class="call-do-action-info style_two">
                            <div class="call-do-social_icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="call_info">
                                <h3>{{ $settings['contact_phone'] ?? '+123456789' }}</h3>
                            </div>
                        </div>
                        <div class="contact_thumb_shape bounce-animate">
                            <img src="{{ asset('frontend/assets/images/main-home/contact_shapes.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <!-- contact form box -->
                    <div class="contact-form-box style_two">
                        <!-- section title -->
                        <div class="section_title style_three style_four text-center ">
                            <h4>CONTACT US</h4>
                            <h1>Get In Touch with Celta</h1>
                        </div>
                        <form action="{{ route('frontend.contact.submit.home') }}" method="POST"
                            enctype="multipart/form-data">
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
                                        <input type="text" name="city" placeholder="city">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-box message">
                                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Write Message"></textarea>
                                    </div>
                                </div>

                                <div class="contact-form">
                                    <button type="submit"><i class="far fa-thumbs-up"></i> Request Call Back
                                    </button>
                                </div>
                            </div>
                        </form>
                        {{-- <div class="contact_shape bounce-animate">
                            <img src="{{ asset('frontend/assets/images/main-home/contact_shape.png') }}" alt="">
                        </div> --}}
                        <div id="status"></div>
                    </div>
                </div>
            </div>

        </div>
        {{-- <div class="contact_shape1 dance">
            <img src="{{ asset('frontend/assets/images/main-home/animate.png') }}" alt="">
        </div>
        <div class="contact_shape2 dance2">
            <img src="{{ asset('frontend/assets/images/main-home/service_shpe2.png') }}" alt="">
        </div> --}}
    </section>
    <!--==================================================-->
    <!-- End advisar Contact Area-->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start advisar Blog Area style Two-->
    <!--==================================================-->
    <section class="blog_area style_two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title style_three style_four text-center">
                        <h4> {{ $settings['blogs_title'] ?? 'asmita' }}</h4>
                        <h1> {{ $settings['blogs_subtitle'] ?? 'asmita' }}</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                <div class="col-lg-4 col-md-6">
                    <!-- Wrap the whole card with a link -->
                    <a href="{{ route('frontend.blogsingle', $blog->slug) }}" class="single-blog-box style_three">
                        <div class="single-blog-thumb">
                            <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}">
                        </div>
                        <div class="blog-content">
                            <div class="blog-title">
                                <h3>{{ $blog->title }}</h3>
                            </div>
                            <p class="blog_text">{{ Str::limit(strip_tags($blog->description), 100) }}</p>
                            <div class="meta-blog style_two">
                                <p>{{ \Carbon\Carbon::parse($blog->created_at)->format('d M, Y') }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var swiperCountries = new Swiper('.swiper-countriesss', {
                slidesPerView: 1,
                spaceBetween: 10,
                loop: true,
                autoplay: {
                    delay: 1500,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                },
            });
        });
    </script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!--==================================================-->
    <!-- End advisar Blog Area style Two-->
    <!--==================================================-->
@endsection
