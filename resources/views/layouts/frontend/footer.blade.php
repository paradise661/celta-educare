<!--==================================================-->
<!-- Start advisar Call Area -->
<!--==================================================-->
<section class="call_area style_three">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="call-do-action-info">
                    <div class="call-do-social_icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="call_info">
                        <p>Say Hello</p>
                        <h3> {{ $settings['contact_email'] }}</h3>
                    </div>
                </div>
            </div>


            <div class="col-md-6">
                <div class="call_social_icon">
                    <ul>
                        @foreach ($socials as $item)
                            <li><a href="{{ $item->link }}"><i class="{{ $item->icon }}"></i></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>
<!--==================================================-->
<!-- End advisar Call Area -->
<!--==================================================-->

<!--==================================================-->
<!-- Start advisar Footer Area -->
<!--==================================================-->
<section class="footer_area style_two style_three">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget-content style_two">
                    <div class="footer-widget-title">
                        <h4>About Us</h4>
                    </div>
                    <p class="footer_desc">{{ $settings['site_information'] }}</p>
                    {{-- <form action="https://formspree.io/f/myyleorq" method="POST" id="dreamit-form">
                        <div class="subscribe_form">
                            <input type="email" name="email" id="email" class="form-control" required=""
                                data-error="Please enter your email" placeholder="Your E-Mail">
                            <button type="submit" class="btn"><i class="bi bi-send-fill"></i></button>
                        </div>
                    </form> --}}
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-2 col-md-6">
                <div class="footer-widget-content style_two">
                    <div class="footer-widget-title">
                        <h4>Useful Links</h4>
                    </div>
                    <div class="footer-widget-menu">
                        <ul>
                            <li><a href="{{ route('frontend.about') }}"><i class="bi bi-chevron-double-right"></i> Our
                                    Company</a></li>
                            <li><a href="{{ route('frontend.abroad') }}"><i class="bi bi-chevron-double-right"></i>
                                    Study Abroad</a>
                            </li>
                            <li><a href="{{ route('frontend.course') }}"><i class="bi bi-chevron-double-right"></i>
                                    Test Preperation
                                </a></li>
                            <li><a href="{{ route('frontend.contact') }}"><i class="bi bi-chevron-double-right"></i>
                                    Speak with Us
                                </a></li>
                            <li><a href="{{ route('frontend.blog') }}"><i class="bi bi-chevron-double-right"></i>
                                    Blogs</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget-content style_two">
                    <div class="footer-widget-title">
                        <h4>Test Preperation</h4>
                    </div>
                    <div class="footer-widget-menu">
                        <ul>
                            @foreach ($footer_course as $course)
                                <li>
                                    <a href="{{ route('frontend.coursesingle', $course->slug) }}">
                                        <i class="bi bi-chevron-double-right"></i> {{ $course->title }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="footer-widget-content style_two">
                    <div class="footer-widget-title">
                        <h4>Study Aborad</h4>
                    </div>
                    <!-- recent post -->
                    <div class="footer-widget-menu">
                        <ul>
                            @foreach ($footer_countries_1 as $country)
                                <li>
                                    <a href="{{ route('frontend.coursesingle', $country->slug) }}">
                                        <i class="bi bi-chevron-double-right"></i> {{ $country->title }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row add-border style_two align-items-center">
            <div class="col-md-7">
                <div class="footer-bottom-content">
                    <div class="footer-bottom-content-copy style_two">

                        <p>
                            {{ date('Y') }}
                            {!! $settings['site_copyright'] ?? 'u00a9 Celta Eucare. All rights reserved' !!}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-5 text-right">
                <div class="footer-bottom-content">
                    <div class="footer-bottom-menu style_two">
                        <ul>
                            <li><a href="{{ route('frontend.pages', 'terms-conditions') }}">Terms & Conditions</a></li>
                            <li><a href="{{ route('frontend.pages', 'privacy-policy') }}">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_all_shape">
        <div class="footer_shape_one dance">
            <img src="assets/images/main-home/choose_rotete.png" alt="">
        </div>
        <div class="footer_shape_two bounce-animate">
            <img src="assets/images/main-home/footer_shape.png" alt="">
        </div>
    </div>
</section>
<!--==================================================-->
<!-- End advisar Footer Area-->
<!--==================================================-->




<!--==================================================-->
<!-- Start Search Popup Section -->
<!--==================================================-->
{{-- <div class="search-popup">
    <button class="close-search style-two"><span class="flaticon-multiply"><i
                class="far fa-times-circle"></i></span></button>
    <button class="close-search"><i class="bi bi-arrow-up"></i></button>
    <form method="post" action="#">
        <div class="form-group">
            <input type="search" name="search-field" value="" placeholder="Search Here" required="">
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>
    </form>
</div>
<!--==================================================--> --}}
<!-- Start Search Popup Section -->
<!--==================================================-->


<!--==================================================-->
<!-- Start advisar Scroll Up-->
<!--==================================================-->
<div class="prgoress_indicator active-progress">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
            style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 212.78;">
        </path>
    </svg>
</div>
<!--==================================================-->
<!-- End advisar Scroll Up-->
<!--==================================================-->
