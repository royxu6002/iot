@extends('layouts.app')

@section('title', 'Products, app scales, bathroom scales, kitchen scales')

@section('content')
<div class="container col-12">
        <div class="row">
            <div class="products products-4x">
                @foreach ($products as $key=>$product)
                    <div class="product">
                        <article>
                        <div class="thumb img-fluid"><img src="{{ empty($product->images->first())? '':$product->images->first()->product_image }}">
                        </div>
                        <h6 class="title text-center"><a href="{{ route('products.show', $product->product_slug) }}">{{ $product->product_name }}</a></h6>
                    </article>
                  </div>
                @endforeach
            </div>
        </div>
        {!! $products->render() !!}
</div>
@stop
