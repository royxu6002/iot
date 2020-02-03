<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index() 
    {
        return Customer::orderBy('updated_at', 'DESC')->get();
    }
    public function show($id)
    {
        return Customer::where('id', $id)->get();
    }
    public function store(Request $request)
    {
        Customer::create($request->all());
        return response()->json([
            'msg' => 'Customer profile had been added',
        ]);
    }
    public function edit($id)
    {
        return Customer::findOrFail($id);
    }
    public function update(Request $request, $id)
    {
        Customer::findOrFail($id)->delete();
        Customer::create($request->all());
        return response()->json([
            'msg' => 'Customer profile has been updated'
        ]);
    }
    public function destroy($id)
    {
        Customer::where('id', $id)->delete();
        return response()->json([
            'msg' => 'profile has been deleted',
        ]);
    }
}
