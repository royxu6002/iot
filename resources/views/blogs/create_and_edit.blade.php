@extends('layouts.app')

@section('title', 'royXu Blog')


@section('content')
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="col-lg-10 offset-1 col-sm-12 col-md-10">
                    <div class="card">
                        <div class="card-header">
                            Create a blog
                        </div>
                        <div class="card-body">
                            <form action="{{ route('blog.store') }}" method="post">
                               {{ csrf_field() }}
                               @include('shared._errors')
                                <div class="form-group">
                                    <input type="text" name="title" placeholder="Title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="author" placeholder="Author" class="form-control">
                                </div>
                                <div class="form-group" >
                                    <textarea name="article" id="editor" class="form-control" rows="10"  required value="{{ old('article') }}">
                                    </textarea>
                                </div>
                                <button type="submit">Post</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/simditor.css') }}" type="text/css">
@stop

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/module.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/hotkeys.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/uploader.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/simditor.js') }}"></script>
    <script>
        $(document).ready(function() {
            var editor = new Simditor({
                textarea: $('#editor'),
            });
        });
    </script>
@stop
