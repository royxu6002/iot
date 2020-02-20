<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Invoice as InvoiceResource;
use App\Models\Invoice;
use App\Models\InvoiceProduct;

class InvoiceController extends Controller
{
    public function index()
    {
        return InvoiceResource::collection(Invoice::all());
    }

    public function show(Invoice $invoice)
    {
        return new InvoiceResource(Invoice::find($invoice->id));
    }

    public function store(Request $request)
    { 
        // 这里是否应该开启 DB 事务处理??? 因为即使 invoiceProducts不能创建成功, invoice 还是会被创建;
        $invoice = Invoice::create($request->except('order_info'));
        $collection = collect($request->order_info);

        $products = $collection->keyBy('product_id')->map(function($value, $key){
            unset($value['product_id']);
            return $value;
        });

        $invoice->products()->attach($products->all());

        if ($invoice) {
            return response()->json([
                'msg' => 'created successfully'
            ]);
        } 

    }



}
