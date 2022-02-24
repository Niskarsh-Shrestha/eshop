<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return[
            'id'=> $this->id,
            'product name'=> $this->name,
            'discription'=> $this->description,
            'price'=> $this->price,
            'stock'=> $this->stock == 1 ? 'Available': 'out of stuck',
            'discount'=> $this->discount_price,
            'selling price'=> $this->selling_price,
            'photo'=> asset($this->photo),
            
        ];
    }
}
