<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Invoice as InvoiceResource;
use App\Models\Invoice;
use App\Models\InvoiceProduct;
use Illuminate\Support\Facades\DB; 

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

    // 为 invoiceEdit 单独创建的 API 接口
    public function getInvoiceData($id)
    {
        return Invoice::where('id', $id)->with('products')->get();
    }

    public function store(Request $request)
    { 
        // 这里是否应该开启 DB 事务处理??? 因为即使 invoiceProducts不能创建成功, invoice 还是会被创建;
        DB::beginTransaction();
        try{ 
            //中间逻辑代码
            $invoice = Invoice::create($request->except('order_info'));
            $collection = collect($request->order_info);

            $products = $collection->keyBy('product_id')->map(function($value, $key){
                unset($value['product_id']);
                return $value;
            });
 
            $invoice->products()->attach($products->all());

            DB::commit(); 

            if ($invoice) {
                return response()->json([
                    'msg' => 'created successfully'
                ]);
            } 
        }catch (\Exception $e) { 
            //接收异常处理并回滚

            DB::rollBack(); 
        }

    }
    
    public function update(Request $request, $id)
    {     
        DB::beginTransaction();

        try{
            $invoice = Invoice::find($id);
            $invoiceData = collect($request->except('products'))->except(['created_at', 'updated_at', 'id']);
    
            $invoice->update($invoiceData->all());
    
            $products = collect($request->products)->pluck('order_info')->keyBy('product_id')->map(function($value, $key){
                unset($value['product_id'],$value['invoice_id'], $value['created_at'],$value['updated_at']);
                return $value;
            });
    
            $invoice->products()->sync($products->all());

            DB::commit();

            if ($invoice) {
                return response()->json([
                    'msg' => 'updated successfully'
                ]);
            }
        } catch (\Exception $e) {
            DB::rollBack();
        }

    }
}
