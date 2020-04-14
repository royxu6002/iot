<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendEdm;
use App\Models\Customer;

class EmailController extends Controller
{
    public function index()
    {
        $res = $this->dispatch(new SendEdm());
        if($res) return dd('task dispatched');
    }
}
