@extends('layouts.app')

@section('title', 'royXu Blog')


@section('content')
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="col-lg-10 offset-1 col-sm-12 col-md-10">
                    <div class="card">
                        <div class="card-header">
                           {{ $blog->id? 'Update': 'Create'}} a blog
                        </div>
                        <div class="card-body">
                            @if(!$blog->id)
                                <form action="{{ route('blogs.store') }}" method="post" enctype="multipart/form-data">
                            @else
                                <form action="{{ route('blogs.update', $blog->title_slug) }}" method="post" enctype="multipart/form-data">
                                {{method_field('put')}}
                            @endif
                               {{ csrf_field() }}

                              {{--  @include('shared._errors') --}}

                                <div class="form-group">
                                    <input type="text" name="title" placeholder="Title" class="form-control @error('title') is-invalid @enderror" value="{{old('title', $blog->title)}}">
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input name="article_abstract" placeholder="Article abstract"  class="form-control @error('article_abstract') invalid-feedback @enderror" value="{{ old('article_abstract', $blog->article_abstract) }}"
                                    @error('article_abstract')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="text" name="author" placeholder="Author" class="form-control @error('author') is-invalid @enderror" value="{{old('author', $blog->author)}}">
                                    @error('author')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group" >
                                    <div id="editormd">
                                    <textarea name="article" placeholder="Article" class="form-control @error('article') is-invalid @enderror" rows="10">{{ old('article', $blog->article) }}</textarea>
                                    </div>

                                    @error('article')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <input type="file" name="thumbnail" class="form-control @error('thumbnail') is-invalid @enderror" value="{{ old('thumbnail', $blog->thumbnail) }}">

                                    @error('thumbnail')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Post</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('styles')
    <link rel="stylesheet" href="{{ asset('editor/editormd.min.css') }}" type="text/css">
@stop

@section('scripts')
    <script type="text/javascript" src="{{ asset('editor/editormd.min.js') }}"></script>
    <script>
        var editor = editormd("editormd",{
            width: "100%",
            height: 600,
            path: "/editor/lib/",
            syncScrolling : "single",
            saveHTMLToTextarea: true,
        });
        editor.getHTML();
    </script>
@stop
