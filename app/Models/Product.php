<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product_name', 'product_description' ];

    public function category()
    {
        return $this->belongTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function getRouteKeyName()
    {
        return 'product_slug';
    }
}
