@section('seo')
    @include('frontend.seo', [
        'name' => $message_page->seo_title ?? '',
        'title' => $message_page->seo_title ?? $message_page->title,
        'description' => $message_page->meta_description ?? '',
        'keyword' => $message_page->meta_keywords ?? '',
        'schema' => $message_page->seo_schema ?? '',
        'created_at' => $message_page->created_at,
        'updated_at' => $message_page->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
    <!----page header----->
    @if ($message_page)   
    <div class="breadcumb-area d-flex" style="
    background: url('{{ asset($message_page->banner_image ?? '') }}');">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-12 text-center">
                  <div class="breadcumb-content">
                      <div class="breadcumb-title">
                          <h4>{{ $message_page->title ?? 'About Us' }}</h4>
                      </div>
                      <ul>
                          <li><a href="{{ route('frontend.home') }}"><i class="bi bi-house-door-fill"></i> Home </a></li>
                          <li class="rotates"><i class="bi bi-slash-lg"></i>{{ $message_page->title ?? 'About Us' }}</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
    @endif
    <!----page header----->
    <section class="about_area style_three">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="about_thumb message-img">
                        <img src="{{ asset($message_from_founder_1->image_1 ?? 'frontend/assets/images/main-home/about_thumb.png') }}"
                            alt="">
                        
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="section_title ">
                        {{-- <h4>{{ $message_from_founder_1->title ?? 'ABOUT Us' }}</h4> --}}
                        <h1>{!! nl2br(e($message_from_founder_1->short_description ?? 'We Help Grow the Creative')) !!}</h1>
                        <p>{!! $message_from_founder_1->description ?? 'Default about us description here.' !!}</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    {{-- messgae from founder 2 --}}
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
               
                <div class="col-lg-6 col-md-12">
                    <div class="section_title ">
                        {{-- <h4>{{ $message_from_founder_2->title ?? 'ABOUT Us' }}</h4> --}}
                        <h1>{!! nl2br(e($message_from_founder_2->short_description ?? 'We Help Grow the Creative')) !!}</h1>
                        <p>{!! $message_from_founder_2->description ?? 'Default about us description here.' !!}</p>
                    </div>
                    
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about_thumb message-img">
                        <img src="{{ asset($message_from_founder_2->image_1 ?? 'frontend/assets/images/main-home/about_thumb.png') }}"
                            alt="">
                        
                    </div>
                </div>
            </div>
        </div>
        
    </section>
@endsection
