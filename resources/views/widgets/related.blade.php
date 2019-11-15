<div class="container">
    <div class="row">
        <h3>Related Product</h3>
        <a class="btn btn-outline-brand btn-sm" href="{{ route('products.index') }}">View All</a>
    </div>
    <div class="row" >
       @foreach ($relatedProducts as $key=>$product)
            <div class="col-sm-6 col-lg-3 mb-4 text-center" >
                <a href="{{ route('products.show', $product->product_slug) }}">
                    <img img src="{{ empty($product->images->first())? '':url($product->images->first()->product_image) }}" class="rounded mb-3">
                    <p class="mb-1 text-muted">{{ $product->product_name }}</p>
                </a>
            </div>
        @endforeach
    </div>
</div>

