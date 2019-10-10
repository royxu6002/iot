<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title', 'author', 'title_slug', 'article'];

    public function getRouteKeyName()
    {
        return 'title_slug';
    }
}
