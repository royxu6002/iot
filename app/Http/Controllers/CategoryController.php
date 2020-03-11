<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    public function show(Category $category)
    {
        $products = $category->products()->where('online', 'yes')->paginate(10);
        return view('products.index', compact('products'));
    }

}
