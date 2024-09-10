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
            'materials' => $this->materials,
            'functions' => $this->functions,
            'customs' => $this->customs
        ];
     }
}
