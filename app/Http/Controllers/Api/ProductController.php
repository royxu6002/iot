<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductSku;
use App\Models\Category;
use App\Http\Resources\Product as ProductResource;
use App\Http\Resources\Package as ProductPackageResource;

class ProductController extends Controller
{
    public function getCategoryData()
    {
        return Category::all();
    }
    public function getProductsData()
    {
        return Product::with('productSkus')->with('images')->get();
    }
    
    public function getProductData($id)
    {
        return Product::where('id', $id)->with('skus')->get();
    }

    public function getPackagesData($id)
    {
        return Product::find($id)->packages()->get();
    }

    public function index()
    {
        return ProductResource::collection(Product::all());
    }
    public function show($id)
    {
        return new ProductResource(Product::find($id));
    }
    
    
}
