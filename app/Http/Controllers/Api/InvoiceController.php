<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Invoice as InvoiceResource;
use App\Models\Invoice;
use App\Models\InvoiceProduct;
use Illuminate\Support\Facades\DB; 
use App\Models\Product;
use App\Models\Factory;

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


    public function purchasesIndex(Invoice $invoice)
    {
    
        // 拿到供应商 id 集合;
        $collection = $invoice->products()
            ->with('suppliers')
            // eloquent 集合
            ->get()
            // 大多数 Eloquent 集合方法会返回新的 Eloquent 集合实例，但是 pluck, keys, zip, collapse, flatten 和 flip 方法除外，它们会返回一个 集合基类 实例。同样，如果 map 操作返回的集合不包括任何 Eloquent 模型，那么它会被自动转换成集合基类。
            ->map(function ($item) {
                return $item['suppliers'];
            })
            // 多层嵌套数据去掉外衣 [];
            ->flatten();

        return $collection->all();
    }

    public function purchasesStore(Invoice $invoice, Request $request)
    {
        DB::beginTransaction();
        try {
            
            // $content = [];
            // foreach($request->all() as $item) {
            //     $content[] = [
            //         'invoice_id' => $invoice,
            //         'product_id' => $item['product_id'],
            //         'supplier_id' => $item['supplier_id'],
            //         'price' => $item['price'],
            //         'price_term' => $item['price_term'],
            //         'quantity' => $item['quantity'],
            //         'custom_requirement' => $item['custom_requirement'],
            //         'other_requirement' => $item['other_requirement'],
            //     ];    
            // }
            // return $request->formWrap;

            $collection = collect(json_decode($request->formWrap, true))->transform(function($item) {
                return [
                    'product_id' => $item['product_id'],
                    'supplier_id' => $item['supplier_id'],
                    'price' => $item['price'],
                    'price_term' => $item['price_term'],
                    'quantity' => $item['quantity'],
                    'custom_requirement' => $item['custom_requirement'],
                    'other_requirement' => isset($item['other_requirement']) ?$item['other_requirement']:'',
                ];
            });

            $invoice->purchases()->createMany($collection);

            DB::commit();

            return response()->json([
                'msg' => 'purchase order have been created successfully!',
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return $e;
        }
    }
}
