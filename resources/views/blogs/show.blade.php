@extends('layouts.app')

@section('title', '{{ $blog->title }}')

@section('content')
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="col-md-8 offset-2">
                    {{ $blog->title }}
                    <p><small>author: {{ $blog->author }} </small><small>created at {{ $blog->created_at->diffForHumans() }}</small></p>
                    <p>
                    {!! $blog->article !!}
                    </p>
                </div>
            </div>
        </div>

    </div>
@stop
