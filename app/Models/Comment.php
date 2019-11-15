<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\OauthUser;

class Comment extends Model
{
    protected $guarded = ['id'];

    public function oauthUser()
    {
        return $this->belongsTo(OauthUser::class);
    }

    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }

}
