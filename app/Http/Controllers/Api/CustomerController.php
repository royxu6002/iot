<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Customer as CustomerResource;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index() 
    {
        return CustomerResource::collection(Customer::orderBy('updated_at', 'desc')->get());
    }

    // Model 设定了 scopeIsClient, isClient() 方法定义为成交客户;
    public function client()
    {
        return Customer::isClient()->get();
    }

    public function show($id)
    {
        return Customer::find($id);
    }


    // vue的 布尔型数据传递到后台, 是字符串格式了, 后台不能直接处理;
    // $request->is_client 拿到的是 "true", "false" 字符串;
    public function store(Request $request)
    {
        $customer = new Customer();
        
        if ($request->is_client == "true" || $request->is_client == true) {
            $customer->insert([
                'is_client' => true,
                'sale' => $request->sale,
                'rank' => $request->rank,
                'lead' => $request->lead,
                'company' => $request->company,
                'address' => $request->address,
                'tel' => $request->tel,
                'fax' => $request->fax,
                'website' => $request->website,
                'person' => $request->person,
                'position' => $request->position,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'whatsapp' => $request->whatsapp,
                'country' => $request->country,
                'memo' => $request->memo,
                'qq' => $request->qq,
                'wechat' => $request->wechat,
                'skype' => $request->skype,
            ]);
        } else {
            $customer->insert([
                'is_client' => false,
                'sale' => $request->sale,
                'rank' => $request->rank,
                'lead' => $request->lead,
                'company' => $request->company,
                'address' => $request->address,
                'tel' => $request->tel,
                'fax' => $request->fax,
                'website' => $request->website,
                'person' => $request->person,
                'position' => $request->position,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'whatsapp' => $request->whatsapp,
                'country' => $request->country,
                'memo' => $request->memo,
                'qq' => $request->qq,
                'wechat' => $request->wechat,
                'skype' => $request->skype,
            ]);
        }

        return response()->json([
            'msg' => 'Customer profile had been added',
        ]);
    }

    // public function edit($id)
    // {
    //     return Customer::findOrFail($id);
    // }

    public function update(Request $request, $id)
    {   

        $customer = Customer::findOrFail($id);

        if($request->is_client == "true" || $request->is_client == "true") {
            $customer->update([
                'is_client' => true,
                'sale' => $request->sale,
                'rank' => $request->rank,
                'lead' => $request->lead,
                'company' => $request->company,
                'address' => $request->address,
                'tel' => $request->tel,
                'fax' => $request->fax,
                'website' => $request->website,
                'person' => $request->person,
                'position' => $request->position,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'whatsapp' => $request->whatsapp,
                'country' => $request->country,
                'memo' => $request->memo,
                'qq' => $request->qq,
                'wechat' => $request->wechat,
                'skype' => $request->skype,
            ]);
        } else {
            $customer->update([
                'is_client' => false,
                'sale' => $request->sale,
                'rank' => $request->rank,
                'lead' => $request->lead,
                'company' => $request->company,
                'address' => $request->address,
                'tel' => $request->tel,
                'fax' => $request->fax,
                'website' => $request->website,
                'person' => $request->person,
                'position' => $request->position,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'whatsapp' => $request->whatsapp,
                'country' => $request->country,
                'memo' => $request->memo,
                'qq' => $request->qq,
                'wechat' => $request->wechat,
                'skype' => $request->skype,
            ]);
        }
        

        if($customer) {
            return response()->json([
                'msg' => 'customer files has been updated',
            ]);
        }
    }
        
    public function destroy($id)
    {
        Customer::where('id', $id)->delete();

        return response()->json([
            'msg' => 'profile has been deleted',
        ]);
    }

    public function dye(Customer $customer, $id)
    {
        if(!is_array($id)) {
            $nid = compact('id');
        }
        if ($customer->groups()->sync($nid, false)) {
            return response()->json([
                'msg' => 'customer has been grouped',
            ]);
        }
    }    

    public function bleach(Customer $customer,$id)
    {
        if (!is_array($id)) {
            $nid = compact('id');
        }
        if ($customer->groups()->detach($nid)) {
            return response()->json([
                'msg' => 'customer group has been removed',
            ]);
        }
    }

}
