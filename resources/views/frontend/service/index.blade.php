@section('seo')
    @include('frontend.seo', [
        'name' => $service_page->seo_title ?? '',
        'title' => $service_page->seo_title ?? $service_page->title,
        'description' => $service_page->meta_description ?? '',
        'keyword' => $service_page->meta_keywords ?? '',
        'schema' => $service_page->seo_schema ?? '',
        'created_at' => $service_page->created_at,
        'updated_at' => $service_page->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')

@section('content')
    <!--==================================================-->
    <!-- Start advisar Breadcumb Area -->
    <!--==================================================-->
    <div class="breadcumb-area d-flex" style="
      background: url('{{ asset($service_page->banner_image ?? '') }}');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <div class="breadcumb-content">
                        <div class="breadcumb-title">
                            <h4>{{ $service_page->title ?? 'About Us' }}</h4>
                        </div>
                        <ul>
                            <li><a href="{{ route('frontend.home') }}"><i class="bi bi-house-door-fill"></i> Home </a></li>
                            <li class="rotates"><i class="bi bi-slash-lg"></i>{{ $service_page->title ?? 'About Us' }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- for services --}}
    <section class="service_area style_four">
        <div class="container">
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
@endsection
