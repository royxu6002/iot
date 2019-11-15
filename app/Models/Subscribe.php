<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    protected $fillable = ['email'];

    protected $casts = [
        'subscribe_status' => boolean;
    ];

}
