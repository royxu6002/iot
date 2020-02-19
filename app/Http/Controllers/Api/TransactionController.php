<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Transaction as TransactionResource;
use App\Models\Transaction;
use App\Models\Invoice;

class TransactionController extends Controller
{
    public function index()
    {
        return TransactionResource::collection(Transaction::all());
    }

    public function store(Request $request)
    {
        Transaction::create($request->all());

        return response()->json([   
            'msg' => 'created successfully'
        ]);
    }

    public function show($id)
    {   //直接返回一个模型数据
        return Transaction::find($id);
    }

    public function update(Request $request, $id)
    {
        $transaction = Transaction::find($id);

        $transaction->update($request->all());

        return response()->json([
            'msg' => 'updated successfully',
        ]);

    }

    public function destroy($id)
    {
        Transaction::find($id)->delete();

        return response()->json([
            'msg' => 'deleted successfully',
        ]);
    }
    
}
