<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductSku;
use App\Models\ProductPackage;

class Product extends Model
{
    protected $fillable = ['product_name', 'product_description', 'category_id', 'product_slug', 'product_brief_intro' ];

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
    public function skus()
    {
        return $this->hasMany(ProductSku::class);
    }
    
    public function packages()
    {
        return $this->hasMany(ProductPackage::class);
    }

    public function invoices()
    {
        return $this->belongsToMany(Invoice::class);
    }
}
