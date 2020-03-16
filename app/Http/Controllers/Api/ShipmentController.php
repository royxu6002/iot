<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Shipment;
use App\Http\Resources\Shipment as ShipmentResource;
use Illuminate\Http\Request;
use DB;

class ShipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ShipmentResource::collection(Shipment::all());
    }
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        DB::beginTransaction();
        try {
            $shipment = Shipment::create($request->except('status'));
            $shipment->status()->create(['status' => $request->status]);

            DB::commit();

            if($shipment) {
                return response()->json([
                    'msg' => 'Created successfully'
                ]);
            }

        } catch(\Exception $e) {
            DB::rollBack();
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shipment  $shipment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new ShipmentResource(Shipment::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shipment  $shipment
     * @return \Illuminate\Http\Response
     */
    public function edit(Shipment $shipment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shipment  $shipment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shipment $shipment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shipment  $shipment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shipment $shipment)
    {
        DB::beginTransaction();
        try {
            $shipment->delete();
            $shipment->status()->delete();

            DB::commit();
            
            return response()->json([
                'msg' => 'deleted successfully'
            ]);
        } catch (\Exception $e) {

            DB::rollBack();
        } 
       
    }
}
