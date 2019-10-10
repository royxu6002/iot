<div class="related-product-area">
    <div class="heading">
        <h5>Related Product</h5>
        <a class="float-right" href="{{ route('products.index') }}">View all</a>
    </div>
        <hr>
    <div class="row">
            <div class="products products-4x">
                @foreach ($relatedProducts as $key=>$product)
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
