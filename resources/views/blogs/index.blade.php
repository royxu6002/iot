@extends('layouts.app')

@section('title', 'Blogs from Royxu')

@section('content')
<div class="container">
    <div class="row">
        <div class="container ">
            @include('shared._messages')
            @foreach ($blogs as $blog)
                <div class="col-md-4 col-sm-12 mb-2 float-left">
                    <a href="{{ route('blog.show', $blog->title_slug) }}">
                         <h5>{{ $blog->title }}</h5>
                    </a>
                    <small>{{ $blog->created_at->diffForHumans() }}</small>
s
                </div>
            @endforeach

            {{ $blogs->render() }}
        </div>
    </div>
</div>
@stop
