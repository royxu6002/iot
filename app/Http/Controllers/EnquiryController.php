<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry;

class EnquiryController extends Controller
{

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'phone' => ['required'],
            'company' => ['required'],
            'enquiry' => ['required', 'min:20'],
        ]);

        Enquiry::create($request->except('token'));

        return back()->with('enquiry-response','Thanks for your enquiry, we shall feedback soon.');

    }
}
