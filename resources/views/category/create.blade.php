@extends('layouts.app')
@section('title', 'Create category')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @foreach ($category as $key=>$value)
                    <div class="form-control">
                        <form action="{{ route('category.destroy', $value->category_slug) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('delete') }}
                            Name: {{ $value['category_name'] }} - Slug /{{ $value['category_slug'] }}
                            <input type="submit" value="Delete" class="float-right">
                        </form>
                    </div>
                @endforeach

            </div>

            <div class="container col-md-4 mt-4">
                @include('shared._messages')
                @include('shared._errors')
            <form action="{{ route('category.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="category_name" >Category Name</label>
                    <input class="form-control" type="text" name="category_name" id="category_name" required>
                </div>
                <div class="form-group">
                    <label for="category_slug">Category Slug</label>
                    <input class="form-control" type="text" name="category_slug" id="category_slug" required>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success btn-block" value="Submit">
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection
