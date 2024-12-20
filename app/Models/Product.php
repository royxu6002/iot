<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductSku;
use App\Models\ProductPackage;

class Product extends Model
{
    protected $guarded = [];

    protected $casts = [
        'imgs' => 'json',
    ];

    public function setImgsAttribute($image)
    {
        if (is_array($image)) {
            $images = collect($image)->transform(function($item, $key){
                return $item = $item;
            })->toArray();
            $this->attributes['imgs'] = json_encode($images);
        }
        

    }
    // public function setImagesAttribute($value)
    // {
    //     $this->attributes['images'] = json_encode(array_values($value));
    // }

    public function getImgsAttribute($image)
    {
        return json_decode($image, true);
    }


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

    public function suppliers()
    {
        return $this->belongsToMany(Supplier::class, 'product_supplier', 'product_id', 'supplier_id')
                    ->withPivot('price','price_term')
                    ->as('purchase_info')
                    ->withTimestamps();
    }

    public function stocks()
    {
        return $this->hasMany(StockProduct::class);
    }
}
