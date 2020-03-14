<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    public function show(Category $category)
    {
        $products = $category->products()->orderBy('id', 'desc')->where('online', 'yes')->paginate(12);
        return view('products.index', compact('products'));
    }

}
