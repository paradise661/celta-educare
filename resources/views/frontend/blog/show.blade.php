@section('seo')
    @include('frontend.seo', [
        'name' => $blogsingle->seo_title ?? '',
        'title' => $blogsingle->seo_title ?? $blogsingle->title,
        'description' => $blogsingle->meta_description ?? '',
        'keyword' => $blogsingle->meta_keywords ?? '',
        'schema' => $blogsingle->seo_schema ?? '',
        'created_at' => $blogsingle->created_at,
        'updated_at' => $blogsingle->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')

@section('content')

<div class="breadcumb-area d-flex" style="
background: url('{{ asset($blog_page->banner_image ?? '') }}');">
  <div class="container">
      <div class="row align-items-center">
          <div class="col-lg-12 text-center">
              <div class="breadcumb-content">
                <span class="category">Blog</span>
                <div class="breadcumb-title style_two style_three">
                    <h4>{{$blogsingle->title}}</h4>
                </div>
                <div class="breadcumb_meta-blog">
                    <p><span>{{ \Carbon\Carbon::parse($blogsingle->created_at)->format('d M, Y') }}</span> </p>
                </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!--==================================================-->
<!-- End advisar Breadcumb Area -->
<!--==================================================-->

<!--==================================================-->
<!-- Start advisar Service Details Area -->
<!--==================================================-->
<section class="portfolio_details">
	<div class="container">
		<div class="port_main style_two">
			<div class="row">
				<div class="col-lg-12">
					<div class="port_details_content style_two">
						<p class="quote">{!! $blogsingle->description!!}</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="blog_area inner_page two">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text-center">
                    <h1>Related Blog Post</h1>
                </div>
            </div>		
        </div>
        <div class="row">
            @foreach ($blogs as $blog)
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-box">
                        <div class="single-blog-thumb">
                            <img src="{{ asset($blog->image ?? 'frontend/assets/images/default-blog.jpg') }}" alt="{{ $blog->title }}">							
                        </div>
                        <div class="blog-content">
                            <div class="meta-blog">
                                <p><span class="solution">{{ $blog->category ?? 'General' }}</span> {{ \Carbon\Carbon::parse($blog->created_at)->format('d M, Y') }}</p>
                            </div>
                            <div class="blog-title">
                                <h3>
                                    <a href="{{ route('frontend.blogsingle', $blog->slug) }}">
                                        {{ Str::limit($blog->title, 70) }}
                                    </a>
                                </h3>
                            </div>
                            <div class="blog_btn">
                                <a href="{{ route('frontend.blogsingle', $blog->slug) }}">
                                    Read More <i class="flaticon flaticon-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection