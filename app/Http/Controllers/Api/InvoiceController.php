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
use App\Models\Supplier;

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

    // 复制 Invoice 
    public function duplicate(Invoice $invoice) 
    {
        DB::beginTransaction();
        
        try {
            $new = Invoice::create([
                'type' => $invoice->type,
                'invoice_issued_date' => $invoice->invoice_issued_date,
                'invoice_due_date' => $invoice->invoice_due_date,
                'client_id' => $invoice->client_id,
                'ship_from' => $invoice->ship_from,
                'ship_to' => $invoice->ship_to,
                'deadline' => $invoice->deadline,
                'price_term' => $invoice->price_term,
                'payment_term' => $invoice->payment_term,
                'invoice_discount' => $invoice->invoice_discount,
                'invoice_shipment_cost' => $invoice->invoice_shipment_cost,
                'invoice_total' => $invoice->invoice_total,
                'currency_type' => $invoice->currency_type,
            ]);

            // $array = [
            //     "1" => [
            //         "currency" => "EU€",
            //         "product_custom" => "customized 1",
            //         "product_cost" =>  "1.50",
            //         "product_quantity" => 24,
            //         "product_number_per_carton" => 24,
            //         "shipping_mark" => "SA. kitchen scale /NW|GW",
            //         "cartons" => "1.00",
            //         "cbm" => "0.12",
            //         "net_weight" => "12.00",
            //         "gross_weight" => "14.00"
            //     ],
            //     "3" => [
            //         "currency" => "EU€",
            //         "product_custom" =>"customized 2",
            //         "product_cost" => "5.85",
            //         "product_quantity" => 1000,
            //         "product_number_per_carton" => 10,
            //         "shipping_mark" =>null,
            //         "cartons" => "100.00",
            //         "cbm"=> "6.00",
            //         "net_weight"=> "1600.00",
            //         "gross_weight"=> "1800.00"
            //     ]
            //     ];
            // $new->products()->attach($array);


            $products = collect($invoice->products()->get())->pluck('order_info')->keyBy('product_id')->map(function($value, $key) {
                unset($value['id'],$value['product_id'],$value['invoice_id'], $value['created_at'], $value['updated_at']);
                // 此处必须 toArray(),否则不能添加;
                return $value->toArray();
            });

            $new->products()->attach($products->all());

            DB::commit();

            return response()->json([
                'msg' => 'duplicate successfully',
            ]);
        } catch(\Exception $e) {
            DB::rollBack();
        }
    }


    public function getUniqueIds(Invoice $invoice)
    {
    
        // 拿到供应商 id 集合;
        // $collection = $invoice->products()
        //     ->with('suppliers')
        //     // eloquent 集合
        //     ->get()
        //     // 大多数 Eloquent 集合方法会返回新的 Eloquent 集合实例，但是 pluck, keys, zip, collapse, flatten 和 flip 方法除外，它们会返回一个 集合基类 实例。同样，如果 map 操作返回的集合不包括任何 Eloquent 模型，那么它会被自动转换成集合基类。
        //     ->map(function ($item) {
        //         return $item['suppliers'];
        //     })
        //     // 多层嵌套数据去掉外衣 [];
        //     ->flatten();

        // return $collection->all();

        $collection = $invoice->purchases()
            ->get()
            ->pluck('supplier_id')
            ->unique();
    
        return $collection->all();
    }

    public function purchasesStore(Invoice $invoice, Request $request)
    {
        DB::beginTransaction();

        try {
            $invoice->purchases()->createMany($request->all());

            DB::commit();
            return response()->json([
                'msg' => 'purchase order have been created successfully!',
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return $e;
        }
    }

    public function purchasesUpdate(Invoice $invoice, Request $request)
    {
        DB::beginTransaction();
        try {
            $collection = collect($request->all())->transform(function($item){
                return [
                    'product_id' => $item['product_id'],
                    'supplier_id' => $item['supplier_id'],
                    'price' => $item['price'],
                    'price_term' => $item['price_term'],
                    'quantity' => $item['quantity'],
                    'custom_requirement' => $item['custom_requirement'],
                    'other_requirement' => json_encode($item['other_requirement']),
                ];
            });
            // return count($collection);
            // for($i=0; $i<count($collection); $i++) {
            //     $invoice->purchases()->update($collection[$i]);
            // }
            $invoice->purchases()->delete();
            $invoice->purchases()->createMany($collection->all());

            DB::commit();
            return response()->json([
                'msg' => 'purchase order have been updated successfully!',
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return $e;
        }
    }

    // public function getOneSupplierPurchases(Invoice $invoice, $id) 
    // {
    //     return $invoice
    //         ->purchases()
    //         ->where('supplier_id',$id)
    //         ->get();
    // }
}
