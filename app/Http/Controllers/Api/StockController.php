<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stock;
use DB;
use App\Http\Resources\Stock as StockResource;

class StockController extends Controller
{
    public function index()
    {
        return StockResource::collection(Stock::all());
    }

    public function show($id)
    {
        return new StockResource(Stock::find($id));
    }

    // public function create()
    // {

    // }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $stock = Stock::create([
                'number' => $request->number,
                'chart' => $request->fileList,
                'comment' => $request->comment,
            ]);

            DB::commit();
    
            if ($stock) {
                return response()->json([
                    'msg' => 'uploaded successfully',
                ]);
            }

        } catch(\Exception $e) {
            DB::rollBack();

            return $e;
        }
        
    }

    public function edit($id)
    {
        return Stock::find($id);
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        $stock = Stock::findOrFail($id);
        try {
            $stock->update([
                'number' => $request->number,
                'chart' => $request->fileList,
                'comment' => $request->comment,
            ]);

            DB::commit();
    
            if ($stock) {
                return response()->json([
                    'msg' => 'updated successfully',
                ]);
            }

        } catch(\Exception $e) {
            DB::rollBack();
            return $e;
        }
    }

    public function destroy($id)
    {
        Stock::find($id)->delete();

        return response()->json([
            'msg' => 'file has been deleted',
        ]);

    }
}
