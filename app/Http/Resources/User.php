<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'price' => $this->price,
            'sale_price' => $this->sale_price,
            'description' => $this->description,
            'short_description' => $this->short_description,
            'image' => $this->image,
            'instock' => $this->instock,
            'hot' => $this->hot,
            'rating' => $this->rating,
            'hidden_show' => $this->hidden_show,
            'category_id' => $this->category_id,
            'updated_at' => $this->updated_at->format('d/m/Y'),
        ];
    }
}
