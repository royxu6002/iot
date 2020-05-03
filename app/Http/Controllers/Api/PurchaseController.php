<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Purchase;

class PurchaseController extends Controller
{
    public function index()
    {
        return Purchase::all();
    }

    public function show($id)
    {
        return Purchase::find($id);
    }
}
