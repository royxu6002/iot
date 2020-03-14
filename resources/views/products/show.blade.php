@extends('layouts.app')

@section('title', 'Product show page')

@section('styles')
<style>
.product-slider {
        margin: 0 auto;
    }
    .carousel-inner{
      /*  display: flex;
        justify-content: center;
        align-items: center;*/
    }

    .carousel-item{
        /*display: table-cell;*/
        display: flex;
        justify-content: center;
        align-items: center;
        height: 500px;
        width: 500px;
    }
    .carousel-item img {
        width: 500px;
        height: auto;
    }
    .img-fluid{
        width: 100%;
        height: auto;
    }
    .carousel-indicators {
        position: relative !important;
        max-width: 500px;
        float: left;
        display: table-cell;
        vertical-align: middle;
        text-align: center;
    }
    .thumbnail {
        width: 60px;
        height: 60px;
         float: left;
         margin: 10px;
         border: 1px solid #e3e3e3;
    }
  /*  .thumbnail a{
        width: 58px;
        height: 58px;

    }*/
    .thumbnail img{
        max-width: 58px;
        max-height: 58px;
    }

    .related-product-area{
            margin-top: 100px;
    }
    .related-product-area .heading a{
        float: right;
        margin-top: -30px;
    }
    .related-product-area .product{
        float: left;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 20px 0 20px;
    }
    .related-product-area img{
        max-width: 240px;
        max-height: 240px;
    }
    .related-product-area .thumb{
        display: table-cell;
        vertical-align: middle;
        text-align: center;
    }

    @media only screen and (max-width: 767px){
        .carousel-item{
        /*display: table-cell;*/
        display: flex;
        justify-content: center;
        align-items: center;
        height: 350px !important;
        width: 350px !important;
    }
    .carousel-item img {
        width: 350px !important;
        height: auto !important;
    }
}


</style>

@endsection

@section('scripts')
<script src="https://cdn.bootcss.com/jquery/1.10.2/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
      $(".carousel-indicators .thumbnail a").mouseenter(function() {
          $(this).parents("div").addClass("active").siblings().removeClass("active");
          $(".carousel-inner img").attr('src', $(this).find("img").attr("src"));
      });
  });
  $(".products-tabs tab-panel img").addClass("img-responsive center-block");
</script>
@endsection

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="detail-area">
                    <div class="row">
                        <div class="product-slider col-lg-6 col-md-12 col-sm-12">
                            <div class="carousel-inner col-12">
                                <div class="carousel-item">
                                    <a href="">
                                        <img src="{{ url($product->imgs[0]) }}" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="carousel-indicators">
                                @foreach ($product->imgs as $key => $image)
                                     <div class="thumbnail">
                                        <a href="">
                                            <img src="{{ url($image) }}" alt="">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="product-tabs align-items-center justify-content-between col-lg-6 col-md-12 col-sm-12">
                                <!-- Nav tabs -->
                                <ul class="nav" id="myTab" role="tablist">
                                  <li class="nav-item">
                                    <a class="nav-link active sub-nav-link" id="product-desc-tab" data-toggle="tab" href="#product_desc" role="tab" aria-controls="product_desc" aria-selected="true">
                                        <h4>
                                            {{ $product->product_name }}
                                        </h4>
                                    </a>
                                  </li>
                                </ul>

                                <!-- Tab panels -->
                                <div class="tab-content col-12">
                                    <div class="tab-panel active " id="product_desc" role="tabpanel" aria-labelledby="product-desc-tab">
                                       {!! $product->product_description !!}
                                    </div>
                                </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    @include('widgets.related', ['relatedProducts' => $relatedProducts])
</section>
@endsection
