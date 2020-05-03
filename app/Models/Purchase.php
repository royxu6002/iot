<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $guarded = [];
    
    protected $casts = [
        'other_requirement' => 'json'
    ];

    public function invoices()
    {
        return $this->belongsTo(Invoice::class);
    }
    
}
