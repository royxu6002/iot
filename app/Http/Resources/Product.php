<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resource\ProductImage as ProductImageResource;
use App\Models\ProductImage;

class Product extends JsonResource
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
            'name' => $this->product_name,
            'images' => $this->imgs,
            'stock' => $this->stocks,
            'category_id' => $this->category_id,
        ];
    }
}
