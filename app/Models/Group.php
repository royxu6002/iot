<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class Group extends Model
{
    protected $fillable = ['name'];
    
    public function customers()
    {
        return $this->belongsToMany(Customer::class, 'customer_groups', 'group_id', 'customer_id');
    }
}
