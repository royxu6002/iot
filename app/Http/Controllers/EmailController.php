<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendEdm;
use App\Models\Customer;

class EmailController extends Controller
{
    public function index()
    {
        // return Customer::where('country', 'like', 'France')->orderBy('id', 'asc')->pluck('email');
        $res = $this->dispatch(new SendEdm());
        if($res) return dd('task dispatched');
    }
}
