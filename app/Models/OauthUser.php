<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use App\Models\Comment;

class OauthUser extends User
{
    protected $guarded = ['id'];

    public function comments()
    {
        return $this->hasMany(Comment::class, 'oauth_user_id');
    }

}
