@extends('layouts.app')

@section('title', 'Create a product page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="card">
                    <div class="card-body col-md-10 offset-1">
                        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <h3>Create a product</h3>
                            @include('shared._errors')

                            <div class="form-group">
                                <label for="">Product Name</label>
                                <input name="product_name" type="text" class="form-control" placeholder="please type product name" required>
                            </div>

                            <div class="form-group">
                                <label for="">Please upload images</label>
                                <input name="imgs[]" class="form-control" type="file" multiple="multiple" value="please upload multiple images">
                            </div>

                            <div class="form-group">
                                <label for="">Please select a category</label>
                                <select name="category_id" class="form-control" required>
                                    <option value="">Please select</option>
                                    @foreach ($category as $key=>$value)
                                        {{-- expr --}}
                                        <option value="{{ $value->id }}">{{ $value->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Product main feature, suited for issue invoice</label>
                                <textarea name="product_brief_intro" rows="6" class="form-control"></textarea>
                            </div>

                            <div class="form-group">
                                <textarea name="product_description" id="editor" class="form-control" rows="10"  required value="{{ old('product_description') }}">
                                    {{ old('product_description', $product->description) }}
                                </textarea>
                            </div>

                            <button class="btn btn-success" type="submit">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

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
