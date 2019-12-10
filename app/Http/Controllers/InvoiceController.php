<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\InvoiceProduct;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::orderBy('created_at', 'desc')
            ->paginate(8);
        $data = [
            "name" => "royxu",
            "age" => 28
        ];
        dd(is_string(json_encode($data)));
        // return view('invoices.index', compact('invoices'));
    }

    public function show(Invoice $invoice)
    {
        return view('invoices.show', compact('invoice'))->with('products');
    }

    public function create()
    {
        return view('invoices.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'invoice_no' => 'required|alpha_dash|unique:invoices',
            'client' => 'required|max:255',
            'client_address' => 'required|max:255',
            'invoice_date' => 'required|date_format:Y-m-d',
            'due_date' => 'required|date_format:Y-m-d',
            'title' => 'required|max: 100',
            'discount' => 'required|numeric|min:0',
            'product.*.name' => 'required',
            'product.*.price' => 'required|numeric|min:1',
            'product.*.qty' => 'required|integer|min:1',
        ]);

        $products = collect($request->products)->transform(function($product) {
            $product['total'] = $product['qty'] * $product['price'];
            return new InvoiceProduct($product);
        });

        if($products->isEmpty()) {
            return response()
                ->json([
                    'products_empty' => 'one or more products is required.'
                ], 422);
        }

        $data = $request->except('products');
        $data['sub_total'] = $products->sum('total');
        $data['grand_total'] = $data['sub_total'] - $data['discount'];

        $invoice = Invoice::create($data);
        $invoice->products()->saveMany($products);

        return response()
            ->json([
                'created' => true,
                'id' => $invoice->id,
            ]);
    }

    public function edit(Invoice $invoice)
    {
        $invoice = Invoice::with('products')->findOrFail($invoice->id);
        return view('invoices.edit', compact('invoice'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'invoice_no' => 'required|alpha_dash|unique:invoices,invoice_no,'.$id.',id',
            'client' => 'required|max:255',
            'client_address' => 'required|max:255',
            'invoice_date' => 'required|date_format:Y-m-d',
            'due_date' => 'required|date_format:Y-m-d',
            'title' => 'required|max: 100',
            'discount' => 'required|numeric|min:0',
            'product.*.name' => 'required',
            'product.*.price' => 'required|numeric',
            'product.*.qty' => 'required|integer|min:1'
        ]);

        $invoice = Invoice::findOrFail($id);

        $products = collect($request->products)->transform(function($product) {
            $product['total'] = $product['qty'] * $product['price'];
            return new InvoiceProduct($product);
        });

        if($products->isEmpty()) {
            return response()
                ->json([
                    'products_empty' => ['one or more products is required.']
                ], 422);
        }
        $data = $request->except('products');
        $data['sub_total'] = $products->sum('total');
        $data['grand_total'] = $data['sub_total'] - $data['discount'];

        $invoice->update($data);

        //remove old products and attach new ones
        InvoiceProduct::where('invoice_id', $invoice->id)->delete();

        //update it with new
        $invoice->products()->saveMany($products);

        return response()
            ->json([
                'updated' => true,
                'id' => $invoice->id,
            ]);
    }

    public function destroy($id)
    {
        $invoice = Invoice::findOrFail($id);
        InvoiceProduct::where('invoice_id', $invoice->id)->delete();
        $invoice->delete();
        return redirect()
            ->route('invoices.index');

    }
}
