<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Storage;
use Str;

class FileController extends Controller
{
    // 对控制器进行中间件权限认证
    // public function __construct()
    // {
    //     $this->middleware('api:auth');
    // }
    
    public function store(Request $request)
    {
        $extension = $request->file('file')->extension();
        $name = time().'_'.Str::random(6);
        $fileName = $extension ? $name.'.'.$extension : $name;
        $path = $request->file('file')->storeAs('file', $fileName);

        return response()->json([
            'name' => $fileName,
            'url' => $path,
        ]);
    }

    public function destroy($file)
    {
        $exist = Storage::exists('file/'.$file);

        if ($exist) {
            $delete = Storage::delete('file/',$file);
            if ($delete) {
                return response()->json([
                    'msg' => 'file has been deleted',
                ]);
            }
        } 

        return response()->json([
            'msg' => 'file does not exist',
        ]);
    }
}
