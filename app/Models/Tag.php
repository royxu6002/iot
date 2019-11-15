<?php

namespace App\Models;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name'];

    public function getRouteKeyName()
    {
        return 'name';
    }

    public function blogs()
    {
        return $this->belongsToMany('App\Models\Blog', 'article_tags', 'tag_id', 'article_id');
    }
}
