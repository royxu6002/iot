<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StockProduct extends Model
{
    protected $table = 'stock_products';
    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
