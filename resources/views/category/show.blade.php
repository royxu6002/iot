@extends('layouts.app')

@section('title', 'Product-category from IoScales');

@section('content')
    <div class="container">
        <div id="content" class="" role="main">
            <div class="breadcumb">
                <div class="col-md-8">
                    <span>Category</span>
                    <h2>$category->slug</h2>
                </div>
                <div class="col-md-4">
                    <form action="{{  }}" method="get">
                        <select name="filter" id="">
                            <option value="created_at">Sort by Lastest</option>
                            <option value="favored">Sort by Popularity</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
