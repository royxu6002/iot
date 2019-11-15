<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use Str;

class ProductImage extends Model
{
    public $timestamps = false;

    protected $fillable = ['product_id', 'product_image'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    // public function setProductImageAttributes()
    // {
    //     if (Str::startsWith($this->attributes['product_image'], ['http://', 'https://'])) {
    //         return $this->attributes['product_image'];
    //     }
    //     return env('APP_URL').'/'.$this->attributes['product_image'];
    // }
    // public function getProductImageAttributes()
    // {
    //     if (Str::startsWith($this->attributes['product_image'], ['http://', 'https://'])) {
    //         return $this->attributes['product_image'];
    //     }
    //     return env('APP_URL').'/'.$this->attributes['product_image'];
    // }
}
