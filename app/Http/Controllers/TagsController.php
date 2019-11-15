<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Blog;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        $blogs = $tag->blogs()->paginate(8);
        $recommendBlogs = $tag->blogs()->recommend()->get();
        return view('blogs.index', compact(['blogs', 'recommendBlogs']));
    }


}
