<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\ImageUploadHandler;
use App\Models\Product;

class TestController extends Controller
{

    public function index()
    {
        return view('test.index');
    }
    public function show()
    {
        return view('test.show');
    }

}
