<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $guarded = [];

    public $timestamps = true;

    protected $casts = [
        'is_client' => 'boolean',
    ];

    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'id', 'client_id');
    }

    public function scopeIsClient($query)
    {
        return $query->where('is_client', true);
    }
}
