<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Shipment extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'invoice_id' => $this->invoice_id,
            'delivery_term' => $this->delivery_term,
            'tracking_no' => $this->tracking_no,
            'vessel' => $this->vessel,
            'container_no' => $this->container_no,
            'seal_no' => $this->seal_no,
            'etd' => $this->etd,
            'eta' => $this->eta,
            'status' => $this->status,
        ];
    }
}
