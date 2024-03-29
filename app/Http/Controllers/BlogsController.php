<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Comment;
use Str;
use Auth;

class BlogsController extends Controller
{
    public function index()
    {
        $recommendBlogs = Blog::recommend()->get();
        $blogs = Blog::with('tags')->orderBy('created_at', 'desc')->paginate(8);
        return view('blogs.index', compact(['blogs', 'recommendBlogs']));
    }

    public function show(Blog $blog)
    {
        $blog->load('comments.user');
        $comments = $blog->getComments();

        return view('blogs.show', compact('blog', 'comments'));
    }

    public function reply(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        Auth::user()->comments()->create([
            'content' => $request->input('content'),
            'blog_id' => $request->input('blog_id'),
            'parent_id' => $request->input('parent_id'),
        ]);

        return back();
    }


}
