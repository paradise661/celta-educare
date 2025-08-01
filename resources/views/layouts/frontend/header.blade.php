<!-- =======Start Topber Area Css -->

<div class="topber_area style_two">
    <div class="container">
        <div class="row topber_upper align-items-center d-flex">
            <div class="col-lg-8">
                <div class="header-address-info">
                    <p><span><i class="bi bi-envelope"></i></span> {{ $settings['contact_email'] ?? 'asmita' }} <span
                            class="right_info"><i
                                class="fas fa-phone-alt"></i></span>{{ $settings['contact_location'] ?? 'asmita' }}</p>
                </div>
            </div>
            <div class="col-lg-4">
                <!--header top address-->
                <div class="topber_right_social style_two">
                    <h2>FOLLOW US :</h2>
                    @foreach ($socials as $item)
                        <ul class="top_header_social">
                            <li><a href="{{ $item->link }}"><i class="{{ $item->icon }}"></i></a></li>
                            {{-- <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="top-social-icon-left" href="#"><i class="fab fa-twitter"></i></a></li> --}}
                        </ul>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>

<!-- =======End Topber Area Css -->

<!--==================================================-->
<!-- Start advisar Header Area Style Three-->
<!--==================================================-->
<div class="advisar-header-area style_two style_three" id="sticky-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2">
                <div class="header-logo">
                    <a class="active_header" href="{{ route('frontend.home') }}"><img
                            src="{{ asset($settings['site_main_logo']) }}" alt="logo"></a>
                    <a class="active_sticky" href="{{ route('frontend.home') }}"><img
                            src="{{ asset($settings['site_main_logo']) }}" alt="logo"></a>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="header-menu">
                    <ul class="nav_scroll">
                        <li><a href="{{ route('frontend.home') }}">Home</a>

                        </li>
                        <li><a href="#">Our Company <span><i class="fas fa-angle-down"></i></span></a>
                            <ul class="sub_menu">
                                <li><a href="{{ route('frontend.about') }}">About us</a></li>
                                <li><a href="{{ route('frontend.team') }}">Our Teams</a></li>
                                <li><a href="{{ route('frontend.visagrantes') }}">Visa  Granted</a></li>
                                <li><a href="{{ route('frontend.messagefromfounder') }}">Message from founder</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('frontend.abroad') }}">Study Abroad <span><i
                                        class="fas fa-angle-down"></i></span></a>
                            <ul class="sub_menu">
                                @foreach ($footer_countries as $country)
                                    <li><a
                                            href="{{ route('frontend.abroadsingle', $country->slug) }}">{{ $country->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="{{ route('frontend.course') }}">Test Preparations <span><i
                                        class="fas fa-angle-down"></i></span></a>
                            <ul class="sub_menu">
                                @foreach ($footer_course as $course)
                                    <li><a
                                            href="{{ route('frontend.coursesingle', $course->slug) }}">{{ $course->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('frontend.service') }}">Services </a>
                        </li>
                        <li>
                            <a href="{{ route('frontend.blog') }}">Blogs </a>
                        </li>
                    </ul>
                    <div class="advisar_header-right">

                        <div class="header-button style_two">
                            <a href="{{ route('frontend.contact') }}">Speak With Us <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                        {{-- <div class="sidebar-btn">
                            <div class="nav-btn navSidebar-button"><span><i class="bi bi-filter-left"></i></span>
                            </div>
                        </div> --}}
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<!--==================================================-->
<!-- End advisar Header Area -->
<!--==================================================-->

<!--========= Start Mobile Memu========== -->

<div class="mobile-menu-area sticky d-sm-block d-md-block d-lg-none">
    <div class="mobile-menu">

        <nav class="header-menu">
            <ul class="nav_scroll">
                <li><a href="{{ route('frontend.home') }}">Home</a>

                </li>
                <li><a href="#">Our Company </a>
                    <ul class="sub_menu">

                        <li><a href="{{ route('frontend.about') }}">About Us</a></li>
                        <li><a href="{{ route('frontend.team') }}">Teams</a></li>
                        <li><a href="{{ route('frontend.visagrantes') }}">Visa  Granted</a></li>
                        <li><a href="{{ route('frontend.messagefromfounder') }}">Message from founder</a></li>

                    </ul>
                </li>
               
                <li><a href="{{ route('frontend.abroad') }}">Study Abroad </a>
                    <ul class="sub_menu">
                        @foreach ($footer_countries as $country)
                            <li><a
                                    href="{{ route('frontend.abroadsingle', $country->slug) }}">{{ $country->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="{{ route('frontend.course') }}">Test Preparations </a>
                    <ul class="sub_menu">
                        @foreach ($footer_course as $course)
                            <li><a href="{{ route('frontend.coursesingle', $course->slug) }}">{{ $course->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="{{ route('frontend.service') }}">Services </a>
                </li>
                <li><a href="{{ route('frontend.blog') }}">Blogs </a>
                </li>
                
            </ul>
        </nav>
    </div>
</div>
<!--========= End Mobile Memu========== -->

<!-- Sidebar Cart Item -->
<div class="xs-sidebar-group info-group">
    <div class="xs-overlay xs-bg-black"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading">
                <a href="#" class="close-side-widget">
                    <i class="far fa-times-circle"></i>
                </a>
            </div>
            <div class="sidebar-textwidget">
                <!-- Sidebar Info Content -->
                <div class="sidebar-info-contents">
                    <div class="content-inner">
                        <div class="nav-logo">
                            <a href="index-2.html"><img src="{{ asset($settings['site_main_logo']) }}"
                                    alt="sid img"></a>
                        </div>
                        <div class="row padding-two">
                            <div class="col-lg-6">
                                <div class="content-thumb-box">
                                    <img src="assets/images/main-home/team.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="content-thumb-box">
                                    <img src="assets/images/main-home/team1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="content-thumb-box">
                                    <img src="assets/images/main-home/team2.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="content-thumb-box">
                                    <img src="assets/images/main-home/team.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="contact-info">
                            <h2>Contact Info</h2>
                            <ul class="list-style-one">
                                <li><i class="bi bi-envelope"></i>Chicago 12, Melborne City, USA</li>
                                <li><i class="bi bi-envelope"></i>(+001) 123-456-7890</li>
                                <li><i class="bi bi-envelope"></i>Example.com</li>
                                <li><i class="bi bi-envelope"></i>Week Days: 09.00 to 18.00 Sunday: Closed</li>
                            </ul>
                        </div>
                        <!-- Social Box -->
                        <ul class="social-box">
                            <li class="facebook"><a href="#" class="fab fa-facebook-f"></a></li>
                            <li class="twitter"><a href="#" class="fab fa-instagram"></a></li>
                            <li class="linkedin"><a href="#" class="fab fa-twitter"></a></li>
                            <li class="instagram"><a href="#" class="fab fa-pinterest-p"></a></li>
                            <li class="youtube"><a href="#" class="fab fa-linkedin-in"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
