@extends('layouts.app')

@section('title',  $blog->title)

@section('content')

{{-- <div class="article-progress position-fixed" data-sticky="below-nav" style="max-width: 1680px; top: 0px;">
      <progress class="reading-position" value="11.460636685927225" max="100"></progress>
      <div class="article-progress-wrapper">
        <div class="container">
          <div class="row">
            <div class="col py-2">
              <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex">
                  <div class="text-small text-muted mr-1">Reading:</div>
                  <div class="text-small">Navigating the complexity of change aversion</div>
                </div>
                <div class="d-flex align-items-center">
                  <span class="text-small text-muted">Share:</span>
                  <div class="d-flex ml-1">
                    <a href="#" class="mx-1 btn btn-sm btn-round btn-primary">
                      <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" class="injected-svg icon" data-src="assets/img/icons/social/twitter.svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>Twitter icon</title><path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"></path></svg>
                    </a>
                    <a href="#" class="mx-1 btn btn-sm btn-round btn-primary">
                      <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" class="injected-svg icon" data-src="assets/img/icons/social/linkedin.svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>LinkedIn icon</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path></svg>
                    </a>
                    <a href="#" class="mx-1 btn btn-sm btn-round btn-primary">
                      <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" class="injected-svg icon" data-src="assets/img/icons/social/facebook.svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>Facebook icon</title><path d="M22.676 0H1.324C.593 0 0 .593 0 1.324v21.352C0 23.408.593 24 1.324 24h11.494v-9.294H9.689v-3.621h3.129V8.41c0-3.099 1.894-4.785 4.659-4.785 1.325 0 2.464.097 2.796.141v3.24h-1.921c-1.5 0-1.792.721-1.792 1.771v2.311h3.584l-.465 3.63H16.56V24h6.115c.733 0 1.325-.592 1.325-1.324V1.324C24 .593 23.408 0 22.676 0"></path></svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}

    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-8 col-10">

                    <div class="text-center">
                       <h2>{{ $blog->title }}</h2>
                        <p class="lead text-muted">
                            <small>author: {{ $blog->author }} </small>
                            <small>created at {{ $blog->created_at->diffForHumans() }}</small>
                        </p>
                    </div>

                    <div class="lead">
                     {!! $blog->article !!}
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="has-divider">
      <div class="container pt-3">
        <div class="row justify-content-center">
          <div class="col-xl-9 col-lg-10 col-md-8">
            {{-- <hr>
            <div class="d-flex align-items-center">
              <span class="text-small mr-1">like this article:</span>
              <div class="d-flex mx-2">
                <a href="#" class="btn btn-round btn-primary mx-1">
                  <img src="{{asset('images/like.svg')}}" alt="">
                </a>
              </div>
            </div> --}}
            <hr>
            @if($comments->count())
                <h5 class="my-4">Total {{ $comments[0]->count() }} Comments</h5>
                <ol class="comments">
                    @foreach ($comments[0] as $comment)
                       @include('comments.comment')
                    @endforeach
                </ol>
            @endif

            <h5 class="my-4">Post a comment</h5>
              @error('content')
                  <div class="alert alert-danger"> {{ $message }}</div>
              @enderror

            <form method="post" action="{{ route('comment.post') }}">
                <input type="hidden" name="blog_id" value="{{ $blog->id }}">
              @csrf
              <div class="form-group">
                <textarea class="form-control" name="content" rows="7"
                @if(Auth::check())
                    placeholder="Comment"
                    @else disabled placeholder="Please sign in to comment"
                    @endif></textarea>
              </div>
              {{-- <div class="d-flex align-items-center justify-content-between"> --}}
                {{-- <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="comment-form-opt-in">
                  <label class="custom-control-label text-small" for="comment-form-opt-in">Notify me when someone replies</label>
                </div> --}}
                @if(Auth::check())
                <button class="btn btn-primary" type="submit" >Submit</button>
                @else
                <button class="btn btn-primary" type="submit" disabled>Submit</button>
                @endif
              {{-- </div> --}}
            </form>

          </div>
        </div>
      </div>

    </section>

@endsection
