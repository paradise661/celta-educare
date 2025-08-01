@section('seo')
    @include('frontend.seo', [
        'name' => $team_page->seo_title ?? '',
        'title' => $team_page->seo_title ?? $team_page->title,
        'description' => $team_page->meta_description ?? '',
        'keyword' => $team_page->meta_keywords ?? '',
        'schema' => $team_page->seo_schema ?? '',
        'created_at' => $team_page->created_at,
        'updated_at' => $team_page->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
    <!----page header----->
    @if ($team_page)   
    <div class="breadcumb-area d-flex" style="
    background: url('{{ asset($team_page->banner_image ?? '') }}');">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-12 text-center">
                  <div class="breadcumb-content">
                      <div class="breadcumb-title">
                          <h4>{{ $team_page->title ?? 'About Us' }}</h4>
                      </div>
                      <ul>
                          <li><a href="{{ route('frontend.home') }}"><i class="bi bi-house-door-fill"></i> Home </a></li>
                          <li class="rotates"><i class="bi bi-slash-lg"></i>{{ $team_page->title ?? 'About Us' }}</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
    @endif
    <!----page header----->
    <!---blog--->
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
@endsection
