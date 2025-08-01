@section('seo')
    @include('frontend.seo', [
        'name' => $coursesingle->seo_title ?? '',
        'title' => $coursesingle->seo_title ?? $coursesingle->title,
        'description' => $coursesingle->meta_description ?? '',
        'keyword' => $coursesingle->meta_keywords ?? '',
        'schema' => $coursesingle->seo_schema ?? '',
        'created_at' => $coursesingle->created_at,
        'updated_at' => $coursesingle->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
@if ($course_page)
<div class="breadcumb-area d-flex" style="
background: url('{{ asset($course_page->banner_image ?? '') }}');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 text-center">
                <div class="breadcumb-content">
                    <div class="breadcumb-title">
                        <h4>{{ $coursesingle->title ?? 'About Us' }}</h4>
                    </div>
                    <ul>
                        <li><a href="{{ route('frontend.home') }}"><i class="bi bi-house-door-fill"></i> Home </a>
                        </li>
                        <li class="rotates"><i class="bi bi-slash-lg"></i><a
                                href="{{ route('frontend.course') }}">{{ $course_page->title ?? 'About Us' }}</a>
                        </li>
                        <li class="rotates"><i
                                class="bi bi-slash-lg"></i>{{ $coursesingle->title ?? 'About Us' }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<section class="bg-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="img-wrapper position-relative">
                    <img src="{{ asset($coursesingle->image) }}" alt="" class="img-fluid main-img">
                </div>
                <h2 class="py-3 heading-css">{!! $coursesingle->title !!}</h2>
                <div class="demotext text-css">
                    {!! $coursesingle->description !!}
                </div>
            </div>

            <div class="col-lg-4 py-3">
                <div class="sticky-sidebar" style="position: sticky; top: 100px;">
                    <p class="course-detail-heading">Top Courses</p>
                    @foreach ($courses as $course)
                        <div class="shadow course-detail-list-card d-flex gap-3 position-relative">
                            <div class="main-img-course-detail-container">
                                <img src="{{ asset($course->image ?? 'frontend/assets/images/default.jpg') }}"
                                    alt="{{ $course->title }}" class="main-img-course-detail">
                            </div>
                            <div class="course-detail-card-text">
                                <div class="fotter-headings">
                                    {!! $course->title !!}
                                </div>
                                <div class="line-clamp-2 text-css">
                                    {{ $course->short_description }}
                                </div>
                            </div>
                            <a class="stretched-link" href="{{ route('frontend.coursesingle', $course->slug) }}"></a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
