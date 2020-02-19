<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Invoice extends JsonResource
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
            'issued_date' => $this->invoice_issued_date,
            'due_date' => $this->invoice_due_date,
            'client' => $this->customer,
            'from' => $this->ship_from,
            'to' => $this->ship_to,
            'deadline' => $this->deadline,
            'price_term' => $this->price_term,
            'payment_term' => $this->payment_term,
            'products' => $this->products,
            'discount' => $this->invoice_discount,
            'shipment_cost' => $this->invoice_shipment_cost,
            'total' => $this->invoice_total,
            'payments' => $this->transactions()->payments()->get(),
        ];
    }
}
