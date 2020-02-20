<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductPackage extends Model
{
    protected $table = "product_packages";

    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
