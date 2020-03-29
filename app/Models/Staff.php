<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Staff extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['email', 'password', 'api_token', 'login_at'];
    protected $hidden = ['password', 'api_token'];
    protected $casts = [
        'login_at' => 'datetime',
    ];
}
