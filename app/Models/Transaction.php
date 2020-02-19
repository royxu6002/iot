<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $guarded = [];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    public function scopePayments($query)
    {
        return $query->where('type', 'payments');
    }
    
    public function scopeExpenses($query)
    {
        return $query->where('type', 'expenses');
    }

}
