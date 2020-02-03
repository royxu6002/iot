@extends('layouts.app')
@section('title', 'Products, app scales, bathroom scales, kitchen scales')
@section('content')
<section class="pt-5">
  <div class="container">
    <div class="row" data-isotope-collection="" data-isotope-id="projects" style="position: relative;">
      @include('shared._messages')
      @foreach($products as $key=>$product)
        <div class="col-sm-6 col-lg-3 mb-4 text-center" >
            <a href="{{ route('products.show', $product->product_slug) }}">
                <img src="{{ empty($product->images->first())? '':url($product->images()->pluck('product_image')->first()) }}" class="rounded mb-3">
                <p class="mb-1 text-muted">{{ $product->product_name }}</p>
            </a>
        </div>
    @endforeach
</section>
@endsection

