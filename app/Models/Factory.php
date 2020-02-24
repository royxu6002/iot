<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factory extends Model
{
    protected $guarded = [];

    protected $casts = [
        'contact_person' => 'json',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'factory_id', 'id');
    }
}
