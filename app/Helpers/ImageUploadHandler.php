<?php
namespace App\Helpers;

use Image;
use Str;

class ImageUploadHandler
{
    protected $allowed_ext = ['png', 'jpg', 'jpeg', 'gif'];

    public function save($file, $upload_path, $max_width=false)
    {
        $extension = strtolower($file->getClientOriginalExtension()) ?: 'png';
        $filename = time() . '_' . Str::random(10) . '.' .$extension;
        if (! in_array($extension, $this->allowed_ext)) {
            return false;
        }
        $file->storeAs($upload_path, $filename);
        if ($max_width && $extension != 'gif') {
            $this->reduceSize($upload_path . '/' . $filename, $max_width);
        }
        return [
            'path' => config('app.url') . '/'.$upload_path.'/'.$filename
        ];
    }

    public function reduceSize($file_path, $max_width)
    {
        $image = Image::make($file_path);
        $image->resize($max_width, null, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        $image->save();
    }

}
