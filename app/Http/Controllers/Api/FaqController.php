<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    public function index()
    {
        return Faq::all();
    }
    public function store(Request $request)
    {
        $create = Faq::create($request->all());
        if($create) {
            return response()->json([
                'msg' => 'The faq has been listed'
            ]);
        } else {
            return response()->json([
                'err' => 'receiving data failed'    
            ]);
        }
        
    }
}
