<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    protected $fillable = ['title', 'author', 'title_slug', 'article', 'thumbnail'];

    public function getRouteKeyName()
    {
        return 'title_slug';
    }

    public function text($length = 300)
    {
        return Str::words($this->article_abstract, $length, '...');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag', 'article_tags', 'article_id', 'tag_id');
    }
    public function scopeRecommend($query)
    {
        return $query->where('is_recommended', 1);
    }
    public function getNameTag()
    {
       return Blog::with('tags')->label->pluck('name');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'blog_id');
    }

    public function getComments()
    {
        return $this->comments()->with('user')->orderBy('id','desc')->get()->groupBy('parent_id');
    }

}
