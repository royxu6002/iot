@extends('layouts.app')

@section('title', 'Product show page')

@section('styles')
<style>
.product-detail-area {
    margin-top: 50px;
}
.product-detail-area .detail-area .product-summary {
    margin-top: 40px;
    margin-right: 50px;
    line-height: 30px;
}
</style>

@endsection

@section('scripts')
<script src="https://cdn.bootcss.com/jquery/1.10.2/jquery.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {
          $(".carousel-indicators .thumbnail a").mouseenter(function() {
              $(this).parents("div").addClass("active").siblings().removeClass("active");
              $(".carousel-inner .img-thumbnail").attr('src', $(this).find("img").attr("src"));
          });
      });
      $(".products-tabs tab-panel img").addClass("img-responsive center-block");
    </script>
@stop

@section('content')
<div class="container">
        <div class="container">
        <div class="breadcum-area">

        </div>

        <div class="product-detail-area">
            <div class="row">
                <div class="col-12">
                    <div class="detail-area">
                        <div class="row">

                            <div class="col-12 col-lg-6 ">
                                 <div class="delete-product">
                                    <form action=" {{ route('products.destroy', $product) }}" method="post" onsubmit="return confirm('are you sure to delete the item?')">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                    <button type="submit" class="alert alert-warning">Delete</button>
                                    </form>
                                </div>
                                <div id="product-slider" class="carousel slide active pointer-event">
                                    <!-- main slider carousel items -->
                                    <div class="carousel-inner">
                                        <!-- default image -->
                                        <div class="active item carousel-item" data-slide-number="0">
                                            <img class="img-thumbnail" src="{{ $product->images->first()->product_image }}">
                                        </div>

                                    </div>

                                    <div class="carousel-indicators">
                                        @foreach ($product->images as $key => $image)
                                            <div class="thumbnail" data-slide-to="{{ $key }}" data-target="#product-slider" style="float: left; margin-bottom:10px;">
                                                <a id="carousel-selector-{{ $key }}">
                                                    <img class="img-thumbnail img-fluid" src="{{ $image['product_image'] }}">
                                                </a>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6">
                                <div class="product-summary">
                                    <h5 class="product-title">{{ $product->product_name }}</h5>
                                    <div class="product-brief-info">
                                        {!! $product->product_brief_intro !!}

                                    </div>
                                </div>

                            </div>

                            <div class="product-tabs align-items-center justify-content-between">
                                    <!-- Nav tabs -->
                                    <ul class="nav" id="myTab" role="tablist">
                                      <li class="nav-item">
                                        <a class="nav-link active sub-nav-link" id="product-desc-tab" data-toggle="tab" href="#product_desc" role="tab" aria-controls="product_desc" aria-selected="true">Products Description</a>
                                      </li>
                                    </ul>

                                    <!-- Tab panels -->
                                    <div class="tab-content col-lg-6 col-12">
                                        <div class="tab-panel active " id="product_desc" role="tabpanel" aria-labelledby="product-desc-tab">
                                           {!! $product->product_description !!}
                                        </div>
                                    </div>
                                </div>


                    </div>
                </div>


                @include('widgets.related', ['relatedProducts' => $relatedProducts]);

            </div>
            </div>
        </div>
    </div>
@stop
