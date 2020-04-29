<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $guarded = [];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'client_id', 'id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class)
            ->withPivot('currency',
            'product_cost',
            'product_quantity',
            'product_number_per_carton',
            'shipping_mark',
            'cartons', 'cbm', 'net_weight', 'gross_weight')
            ->as('order_info')
            ->withTimestamps();
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function shipment()
    {
        return $this->hasOne(Shipment::class);
    }

}
