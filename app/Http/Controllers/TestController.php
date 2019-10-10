<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\ImageUploadHandler;
use App\Models\Product;

class TestController extends Controller
{

    public function index()
    {
        return view('test');
    }

    public function modelObject()
    {
        $data = Product::firstOrFail('id', 1);
        dd($data);
    }

    public function store(Request $request)
    {
        dd($request->upload_file);
    }


}
