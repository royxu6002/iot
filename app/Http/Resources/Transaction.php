<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Transaction extends JsonResource
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
            'paid_at' => $this->created_at,
            'types' => $this->type,
            'invoice_id' => $this->invoice_id,
            'customer' => $this->invoice->customer,
            'amount' => $this->payment_amount,
            'currency' => $this->currency,
            'payment_method' => $this->payment_method,
            'note' => $this->internal_payment_note,
        ];
    }
}
