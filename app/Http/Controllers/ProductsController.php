<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index()
    {
        return view('products.index');
    }

    public function create()
    {
        return view('products.create_and_edit');
    }

    public function store()
    {

    }

    public function show()
    {
        return view('products.show');
    }

    public function edit()
    {
        return view('products.create_and_edit');
    }



    public function update()
    {

    }

}
