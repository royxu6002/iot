<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomersController extends Controller
{
    // public function index()
    // {
    //     $customers = Customer::all();
    //     return view('customers.index', compact('customers'));
    // }

    // public function create()
    // {
    //     return view('customers.create');
    // }

    // public function store(Request $request)
    // {
    //     $data = [
    //         'date' => $request->date,
    //         'sale' => $request->sale,
    //         'rank' => $request->rank,
    //         'is_client' => $request->is_client,
    //         'lead' => $request->lead,
    //         'company' => $request->company,
    //         'address' => $request->address,
    //         'tel' => $request->tel,
    //         'fax' => $request->fax,
    //         'website' => $request->website,
    //         'person' => $request->person,
    //         'position' => $request->position,
    //         'email' => $request->email,
    //         'mobile' => $request->mobile,
    //         'whatsapp' => $request->whatsapp,
    //         'country' => $request->country,
    //         'memo' => $request->memo,
    //         'qq' => $request->qq,
    //         'wechat' => $request->wechat,
    //         'skype' => $request->skype,
    //     ];

    //     $customer = Customer::create($data);
    //     return redirect(route('customers.show', [$customer->id]));
    // }

    // public function show(Customer $customer)
    // {
    //     return view('customers.show', compact('customer'));
    // }

    // public function edit(Customer $customer)
    // {
    //     return view('customers.edit', compact('customer'));
    // }


    // public function save(Request $request, Customer $customer)
    // {
    //     $data = [
    //         'date' => $request->date,
    //         'sale' => $request->sale,
    //         'rank' => $request->rank,
    //         'is_client' => $request->is_client,
    //         'lead' => $request->lead,
    //         'company' => $request->company,
    //         'address' => $request->address,
    //         'tel' => $request->tel,
    //         'fax' => $request->fax,
    //         'website' => $request->website,
    //         'person' => $request->person,
    //         'position' => $request->position,
    //         'email' => $request->email,
    //         'mobile' => $request->mobile,
    //         'whatsapp' => $request->whatsapp,
    //         'country' => $request->country,
    //         'memo' => $request->memo,
    //         'qq' => $request->qq,
    //         'wechat' => $request->wechat,
    //         'skype' => $request->skype,
    //     ];

    //     $customer->update($data);
    //     return view('customers.show', compact('customer'));
    // }

    // public function destroy(Customer $customer)
    // {
    //     $customer->delete();
    //     return redirect(route('customers.index'));
    // }

}
