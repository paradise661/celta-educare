@section('seo')
    @include('frontend.seo', [
        'name' => $blog_page->seo_title ?? '',
        'title' => $blog_page->seo_title ?? $blog_page->title,
        'description' => $blog_page->meta_description ?? '',
        'keyword' => $blog_page->meta_keywords ?? '',
        'schema' => $blog_page->seo_schema ?? '',
        'created_at' => $blog_page->created_at,
        'updated_at' => $blog_page->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')

@section('content')
    <!--==================================================-->
    <!-- Start advisar Breadcumb Area -->
    <!--==================================================-->
    <div class="breadcumb-area d-flex" style="
      background: url('{{ asset($blog_page->banner_image ?? '') }}');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <div class="breadcumb-content">
                        <div class="breadcumb-title">
                            <h4>{{ $blog_page->title ?? 'About Us' }}</h4>
                        </div>
                        <ul>
                            <li><a href="{{ route('frontend.home') }}"><i class="bi bi-house-door-fill"></i> Home </a></li>
                            <li class="rotates"><i class="bi bi-slash-lg"></i>{{ $blog_page->title ?? 'About Us' }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="blog_area style_two">
        <div class="container">
            <div class="row">
                @foreach ($blog as $blog)
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
    @endsection