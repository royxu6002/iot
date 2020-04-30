<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $guarded = [];

    protected $casts = [
        'alternative_contact' => 'json',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

}
