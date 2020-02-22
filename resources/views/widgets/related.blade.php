<div class="container">
    <div class="row align-content-center">
        <div class="align-items-left">
            <h3>Related Product</h3>
        </div>
        <div class="ml-2">
            <a class="badge badge-primary" href="{{ route('products.index') }}" style="float: right">View All</a>
        </div>
    </div>
    <div class="row" >
       @foreach ($relatedProducts as $key=>$product)
            <div class="col-sm-6 col-lg-3 mb-4 text-center" >
                <a href="{{ route('products.show', $product->product_slug) }}">
                    <img img src="{{ empty($product->imgs[0])? '':url($product->imgs[0]) }}" class="rounded mb-3">
                    <p class="mb-1 text-muted">{{ $product->product_name }}</p>
                </a>
            </div>
        @endforeach
    </div>
</div>

