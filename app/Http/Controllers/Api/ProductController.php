<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductSku;
use App\Models\Category;

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
}
