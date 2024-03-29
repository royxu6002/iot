<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Category;

class TestController extends Controller
{
    public function index()
    {
    
        $categories = Category::all();

        $collection = collect($categories)->mapWithKeys(function($category){
            return [$category->id => [
                'product_name' => $category->category_name,
            ]];
        }); 

        return $collection->all();

    }
}
