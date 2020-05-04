<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Supplier::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('alternative_contact');
        // json 字段存储;
        $data['alternative_contact'] = json_encode($request->alternative_contact);
        $create = Supplier::create($data);
        if($create) {
            return response()->json([
                'msg' => 'Supplier profile has been created',
            ]);
        } else {
            return response()->json([
                'msg' => 'profile failed creating',
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        return $supplier;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        $data = $request->except('alternative_contact');
        // json 字段存储;
        $data['alternative_contact'] = json_encode($request->alternative_contact);
        $update = $supplier->update($data);
        if($update) {
            return response()->json([
                'msg' => 'Supplier profile has been updated',
            ]);
        } else {
            return response()->json([
                'msg' => 'profile failed update',
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        //
    }

    public function selectId(Supplier $supplier)
    {
        return $supplier->products()
            ->get()
            ->pluck('id')
            ->unique()
            ->all();
    }

    public function dye(Supplier $supplier, Request $request)
    {
        $column = [
            'price_term' => $request->price_term,
            'price' => $request->price,
        ];
        
        $attached = $supplier->products()->sync([$request->product_id=>$column], false);

        if ($attached) {
            return response()->json([
                'msg' => 'The supplier now owns the goods producing right',
            ]);
        } else {
            return response()->json([
                'msg' => 'sorry, ',
            ]);
        }
    }

    public function bleach(Supplier $supplier, $id)
    {
        $detach = $supplier->products()->detach($id);

        if($detach) {
            return response()->json([
                'msg' => 'Products has been bleached',
            ]);
        } else {
            return response()->json([
                'msg' => 'sorry, operation failed',
            ]);
        }
    }
}
