@section('seo')
    @include('frontend.seo', [
        'name' => $about_us->seo_title ?? '',
        'title' => $about_us->seo_title ?? $about_us->title,
        'description' => $about_us->meta_description ?? '',
        'keyword' => $about_us->meta_keywords ?? '',
        'schema' => $about_us->seo_schema ?? '',
        'created_at' => $about_us->created_at,
        'updated_at' => $about_us->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')

@section('content')
    <!--==================================================-->
    <!-- Start advisar Breadcumb Area -->
    <!--==================================================-->

    <div class="breadcumb-area d-flex" style="
      background: url('{{ asset($about_us->banner_image ?? '') }}');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <div class="breadcumb-content">
                        <div class="breadcumb-title">
                            <h4>{{ $about_us->title ?? 'About Us' }}</h4>
                        </div>
                        <ul>
                            <li><a href="{{ route('frontend.home') }}"><i class="bi bi-house-door-fill"></i> Home </a></li>
                            <li class="rotates"><i class="bi bi-slash-lg"></i>{{ $about_us->title ?? 'About Us' }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==================================================-->
    <!-- End advisar Breadcumb Area -->
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
    <!-- Start advisar Counter Area-->
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
                            <a href="{{route('frontend.contact')}}">Get Started Now <span></span></a>
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
    <!-- Start advisar Counter Area-->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start advisar Team Area -->
    <!--==================================================-->
    <section class="team_area style_two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- section title -->
                    <div class="section_title style_three style_four text-center">
                        <h4>MEET THE TEAM</h4>
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
        <div class="team_all_shape">
            <div class="shape_one">
                <img src="{{ asset('assets/images/main-home/team_rotate.png') }}" alt="">
            </div>
            <div class="shape_two">
                <img src="{{ asset('assets/images/main-home/tir.png') }}" alt="">
            </div>
            <div class="shape_three">
                <img src="{{ asset('assets/images/main-home/about_shape_3.png') }}" alt="">
            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- End advisar Team Area -->
    <!--==================================================-->



    <!--==================================================-->
    <!-- Start advisar Marquee Area Style Two-->
    <!--==================================================-->
   
    <!--==================================================-->
    <!-- End advisar  Marquee Area-->
    <!--==================================================-->



    <!--==================================================-->
    <!-- Start advisar Why Choose Us Area -->
    <!--==================================================-->
  
    <!--==================================================-->
    <!-- End advisar Why Choose Us Area-->
    <!--==================================================-->
@endsection
