<?php

namespace App\Http\Services;

use App\Models\Product;
use Illuminate\Http\JsonResponse;
class ProductService
{
      public function index():JsonResponse
      {
         $data = Product::all();
         return  response()->json([
             'data' => $data,
             'status' => 'success',
         ]);
      }

      public function store():JsonResponse
      {
         // Service method logic
      }

      public function show():JsonResponse
      {
         // Service method logic
      }

      public function update():JsonResponse
      {
         // Service method logic
      }

      public function destroy():JsonResponse
      {
         // Service method logic
      }

}
