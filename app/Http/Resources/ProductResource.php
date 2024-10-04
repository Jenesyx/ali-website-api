<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "title" => $this->title,
            'description' => $this->description,
            'price' => number_format($this->price),
            'image_cover' => $this->image_cover,
            'type' => $this->type,
            'materials' => $this->materials,
            'functions' => $this->functions,
            'customs' => $this->customs,
            "sizes" => $this->sizes,
            "images" => $this->images,

        ];
     }
}
