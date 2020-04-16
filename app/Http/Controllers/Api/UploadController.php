<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Storage;
use Str;

class UploadController extends Controller
{
    protected $allowed_ext = ['jpg', 'jpeg', 'gif', 'bmp']; 

    public function store(Request $request)
    {
        $extension = strtolower($file->getClientOriginalExtension()) ?: 'png';

        $filename = time() . '_' . Str::random(6) . '.' .$extension;

        if (! in_array($extension, $this->allowed_ext)) {
            return response()->json([
                'msg' => 'sorry, the file is not supported',
            ]);
        }

        // 打印 $request, 看看怎么存储;
        // return $request->file('fileList');

        $path = $request->file('fileList')->storeAs('stock', $filename);
        return response()->json([
            'name' => $filename,
            'url' => $path,
        ]);
    }

    public function destroy($file)
    {
        Storage::delete($file);

        return response()->json([
            'msg' => 'file has been deleted',
        ]);
    }
}
