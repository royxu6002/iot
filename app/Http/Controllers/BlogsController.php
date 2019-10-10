<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Str;

class BlogsController extends Controller
{
    public function index()
    {
        $blogs = Blog::paginate(12);
        return view('blogs.index', compact('blogs'));
    }
    public function create()
    {
        return view('blogs.create_and_edit');
    }
    public function store(Request $request, Blog $blog)
    {
        $this->validate($request, [
            'title' => 'required|unique:blogs',
            'article' => 'required|min:10',
            'author' => 'required',
            ]);
        $blog['title_slug'] = Str::slug($request->title);
        $blog->fill($request->all());
        $blog->save();

        session()->flash('success', 'one article has been posted');

        return view('blogs.show', compact('blog'));

    }
    public function show(Blog $blog)
    {
        return view('blogs.show', compact('blog'));
    }
    public function update()
    {

    }
    public function destroy()
    {

    }

}
