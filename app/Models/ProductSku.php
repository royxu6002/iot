<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductSku extends Model
{
    protected $filled= [
        'title',
        'price',
        'color',
        'image'
    ];
    public function setImageAttribute($image)
    {
        if (is_array($image)) {
            $this->attributes('image') = json_encode($image);
        }
    }
    public function getImageAttribute($image)
    {
        return json_decode($image, true);
    }
}
