<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubscribesController extends Controller
{

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'unique:subscribes'],
        ],[
            'email.unique' => 'You had already subscribed',
        ]);

        Subscribe::create($request->all());

        return back()->with('subscribe-response', 'Thanks, you have suscribed successfully.');
    }

}
