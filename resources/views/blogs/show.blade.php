@extends('layouts.app')

@section('title',  $blog->title)

@section('content')
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
