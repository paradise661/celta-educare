@section('seo')
    @include('frontend.seo', [
        'name' => $abroadstudiesingle->seo_title ?? '',
        'title' => $abroadstudiesingle->seo_title ?? $abroadstudiesingle->title,
        'description' => $abroadstudiesingle->meta_description ?? '',
        'keyword' => $abroadstudiesingle->meta_keywords ?? '',
        'schema' => $abroadstudiesingle->seo_schema ?? '',
        'created_at' => $abroadstudiesingle->created_at,
        'updated_at' => $abroadstudiesingle->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
    @if ($abroad_page)
        <div class="breadcumb-area d-flex" style="
    background: url('{{ asset($abroad_page->banner_image ?? '') }}');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 text-center">
                        <div class="breadcumb-content">
                            <div class="breadcumb-title">
                                <h4>{{ $abroadstudiesingle->title ?? 'About Us' }}</h4>
                            </div>
                            <ul>
                                <li><a href="{{ route('frontend.home') }}"><i class="bi bi-house-door-fill"></i> Home </a>
                                </li>
                                <li class="rotates"><i class="bi bi-slash-lg"></i><a
                                        href="{{ route('frontend.abroad') }}">{{ $abroad_page->title ?? 'About Us' }}</a>
                                </li>
                                <li class="rotates"><i
                                        class="bi bi-slash-lg"></i>{{ $abroadstudiesingle->title ?? 'About Us' }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 py-5">
                    <div class="country-main-section ">
                        <div class="country-img-wrapper">
                            <img src="{{ asset($abroadstudiesingle->image) }}" class="country-image" alt="">
                        </div>
                        <div class="country-content pt-3">
                            <h2 class="heading-css">{{ $abroadstudiesingle->title }}
                            </h2>
                            <div class="text-css mb-3">
                                <p>{!! $abroadstudiesingle->description !!}</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5  pt-0 pt-lg-5">
                    <div class=" form-main-container pb-5" style="position: relative !important;">
                        <form class=" main-card-sidebar contact-form shadow rounded p-4" style="position: sticky !important; top:0px !important;"
                            action="{{ route('frontend.contact.submit') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h4 class="form-title py-3 heading-css">Turn your Study Abroad Dream to
                                {{ $abroadstudiesingle->title }}
                            </h4>
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Enter your Name*" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" placeholder=" Enter Your Email*" required>
                            </div>
                            <div class="form-group">
                                <input type="phone" name="phone" placeholder=" Enter Your Phone*" required>
                            </div>
                            <div class="form-group">
                                <input type="address" name="city" placeholder=" Enter Your address*" required>
                            </div>

                            <div class="form-group">
                                <textarea name="message" placeholder="Your Message ..." rows="5" required></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit"
                                    class="contact-button button button--aylen button--round-l button--text-thick">Send
                                    Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Swiper CSS -->
        {{-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> --}}
        @if ($universities->isNotEmpty())
        <section class="country-section pb-5">
            <div class="container">
                <div class="heading-css text-center mb-4">
                    <h3>Our Partner <span>Universities</span> </h3>
                </div>
                    <div class="swiper-container swiper-universities">
                        <div class="swiper-wrapper">
                            @foreach ($universities as $university)
                                <div class="swiper-slide">
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

    </section>
@endsection
