<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Auth;

class CommentController extends Controller
{

    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|min:10',
        ]);

        if(!Auth::check()) {
            return redirect()->route('login');
        }


        if(Auth::check()) {
            Auth::user()->comments()->create([
                'content' => $request->input('content'),
                'blog_id' => $request->input('blog_id'),
                'parent_id' => 0,
            ]);
            return back();
        }
    }
}
