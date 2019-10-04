<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create()
    {
        $category = Category::all();
        return view('category.create', compact('category'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'category_name' => 'required|max:50|unique:categories',
            'category_slug' => 'required|max:100|unique:categories',
        ]);

        Category::create($request->all());
        session()->flash('success', 'Category has been created successfully~');
        return redirect()->back();
    }

    public function show(Category $category)
    {
        $products = $category->product->paginate(10);
        return view('products.index', compact('products'));
    }

    public function destroy(Category $category)
    {
        Category::where('category_slug', $category->category_slug)->delete();
        session()->flash('warning', 'You have deleted one category');
        return redirect()->back();
    }

}
