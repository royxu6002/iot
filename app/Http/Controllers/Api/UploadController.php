<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Storage;
use Str;

class UploadController extends Controller
{
    protected $allowed_ext = ['jpg', 'jpeg', 'gif', 'bmp', 'png']; 

    public function store(Request $request)
    {
        $extension = strtolower($request->file('image')->extension()) ?: 'png';

        $filename = time() . '_' . Str::random(6) . '.' .$extension;

        if (! in_array($extension, $this->allowed_ext)) {
            return response()->json([
                'msg' => 'sorry, the file is not supported',
            ]);
        }

        // 打印 $request, 看看怎么存储;
        // return $request->file('fileList');

        $path = $request->file('image')->storeAs('stock', $filename);
        return response()->json([
            'name' => $filename,
            'url' => env('APP_URL').'/'.$path,
        ]);
    }

    public function destroy($file)
    {
        // return dd(Storage::exists('stock/'.$file));
        $exists = Storage::exists('stock/'.$file);

        if ($exists) {
            $delete = Storage::delete('stock/'.$file);
            if ($delete) {
                return response()->json([
                    'msg' => 'file has been deleted',
                ]);
            } else {
                return response()->json([
                    'msg' => 'failed deleting file',
                ]);
            }
        } else {
            return response()->json([
                'msg' => 'file does not exist',
            ]);
        }
    }
}
