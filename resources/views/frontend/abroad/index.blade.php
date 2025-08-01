@section('seo')
    @include('frontend.seo', [
        'name' => $abroad_page->seo_title ?? '',
        'title' => $abroad_page->seo_title ?? $abroad_page->title,
        'description' => $abroad_page->meta_description ?? '',
        'keyword' => $abroad_page->meta_keywords ?? '',
        'schema' => $abroad_page->seo_schema ?? '',
        'created_at' => $abroad_page->created_at,
        'updated_at' => $abroad_page->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')

@section('content')
    <!--==================================================-->
    <!-- Start advisar Breadcumb Area -->
    <!--==================================================-->
    <div class="breadcumb-area d-flex" style="
      background: url('{{ asset($abroad_page->banner_image ?? '') }}');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <div class="breadcumb-content">
                        <div class="breadcumb-title">
                            <h4>{{ $abroad_page->title ?? 'About Us' }}</h4>
                        </div>
                        <ul>
                            <li><a href="{{ route('frontend.home') }}"><i class="bi bi-house-door-fill"></i> Home </a></li>
                            <li class="rotates"><i class="bi bi-slash-lg"></i>{{ $abroad_page->title ?? 'About Us' }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="service_area style_two style_three">
        <div class="container ">
            <div class="row">
                @foreach ($abroadstudies as $item)
                    <div class="col-md-4">
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
        
    </section>
@endsection