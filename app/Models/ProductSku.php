<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class ProductSku extends Model
{
    protected $fillable= [
        'title',
        'price',
        'color',
        'image'
    ];
    
    public function setImageAttribute($image)
    {
        if (is_array($image)) {
            $images = collect($image)->transform(function($item, $key){
                return $item = env('APP_URL').'/'.$item;
            })->toArray();
            $this->attributes['image'] = json_encode($images);
        }

    }
    public function getImageAttribute($image)
    {
        return json_decode($image, true);
    }

    protected $casts = [
        'image' => 'json'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
