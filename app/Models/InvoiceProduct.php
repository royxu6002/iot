<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvoiceProduct extends Model
{
    protected $fillable =[
        'price', 'name', 'qty', 'total'
    ];

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
