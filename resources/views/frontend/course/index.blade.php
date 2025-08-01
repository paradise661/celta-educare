@section('seo')
    @include('frontend.seo', [
        'name' => $course_page->seo_title ?? '',
        'title' => $course_page->seo_title ?? $course_page->title,
        'description' => $course_page->meta_description ?? '',
        'keyword' => $course_page->meta_keywords ?? '',
        'schema' => $course_page->seo_schema ?? '',
        'created_at' => $course_page->created_at,
        'updated_at' => $course_page->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')

@section('content')
    <!--==================================================-->
    <!-- Start advisar Breadcumb Area -->
    <!--==================================================-->
    <div class="breadcumb-area d-flex" style="
      background: url('{{ asset($course_page->banner_image ?? '') }}');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <div class="breadcumb-content">
                        <div class="breadcumb-title">
                            <h4>{{ $course_page->title ?? 'About Us' }}</h4>
                        </div>
                        <ul>
                            <li><a href="{{ route('frontend.home') }}"><i class="bi bi-house-door-fill"></i> Home </a></li>
                            <li class="rotates"><i class="bi bi-slash-lg"></i>{{ $course_page->title ?? 'About Us' }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="">
        <div class="services  container py-5">
            <div class="card-container row justify-content-center gap-x-4">
                @foreach ($course as $item)
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
@endsection
