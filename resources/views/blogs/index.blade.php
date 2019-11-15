@extends('layouts.app')

@section('title', 'Blogs from Royxu')

@section('content')
 @if(count($recommendBlogs)>0)
<section data-flickity='{ "imagesLoaded": true, "wrapAround": true }' class="controls-inside controls-light p-0 bg-primary-3">
    @foreach($recommendBlogs as $blog)
        <div class="carousel-cell py-5">
            @if(!empty($blog->thumbnail))
            <img src="{{ url($blog->thumbnail) }}" alt="Image" class="bg-image opacity-50">
            @endif
              <div class="container">
              <div class="row justify-content-center min-vh-70 align-items-center">
                <div class="col-lg-10 col-xl-9">
                  <div class="text-center text-light">
                    <h1 class="display-3">{{ $blog->title }}</h1>
                    <p class="lead">
                        {!! $blog->text(200) !!}
                    </p>
                    <a href="{{ route('blogs.show', $blog->title_slug) }}" class="btn btn-primary btn-lg">Learn More</a>
                  </div>
                </div>
              </div>
            </div>
        </div>
    @endforeach
</section>
@endif

<section>
      <div class="container">
        {{-- data-isotope='{ "itemSelector": ".list-item", "layoutMode": "masonry" }'> --}}
        <div class="row mb-4 blog-portforlio" data-isotope='{"itemSelector": ".blog-list", "layoutMode":"masonry"}'>
        @foreach($blogs as $blog)
            <div class="col-md-6 col-lg-4 blog-list">
                @if(!empty($blog->thumbnail))
                    <div class="card justify-content-betweenx">
                        <a href="{{ route('blogs.show', $blog->title_slug) }}">
                            <img src="{{ url($blog->thumbnail) }}" alt="Image" class="card-img-top">
                        </a>
                @else
                    <div class="card justify-content-between bg-primary text-light">
                @endif
                          <div class="card-body d-flex flex-column">
                                <div class="d-flex justify-content-between mb-3">
                                    <div class="text-small d-flex">
                                      <div class="mr-2">
                                            <a href="{{ route('tags.show',[ $blog->tags()->pluck('name')->first() ]) }}">
                                                {{ $blog->tags()->pluck('name')->first() }}
                                            </a>
                                      </div>
                                      <span class="opacity-70">{{ $blog->created_at->diffForHumans() }}</span>
                                    </div>
                                    <span class="badge bg-primary-alt text-primary">
                                        <img src="{{ asset('images/like.svg') }}" width="24" height="24" viewBox="0 0 24 24" fill="none"> {{ $blog->like }}
                                    </span>
                                </div>
                                <a href="{{ route('blogs.show', $blog->title_slug) }}">
                                    <h4>{{ $blog->title }}</h4>
                                </a>
                                <span class="text-small opacity-70">{{ $blog->text(20) }}</span>
                        </div>
                </div>
            </div>
    @endforeach
    </div>

    <div class="row justify-content-between align-items-center">
      {{-- <div class="col-auto">
        <a href="#" class="btn btn-outline-white">Previous</a>
      </div> --}}
      <div class="col-auto">
          <div class="pagination mb-0">
            {!! $blogs->render() !!}
          </div>
      </div>
{{--       <div class="col-auto">
        <a href="#" class="btn btn-outline-white">Next</a>
      </div> --}}
    </div>

  </div>
</section>
@endsection
