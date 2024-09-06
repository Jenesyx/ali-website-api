<?php

namespace App\Http\Services;

use App\Http\Resources\ProductCollection;
use App\Models\Product;
use App\Models\ProductCustom;
use App\Models\ProductFunction;
use App\Models\ProductMaterial;
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

      public function store($data):JsonResponse
      {

          $product = Product::create([
              'title' => $data['title'],
              'description' => $data['description'],
              'price' => $data['price'],
              'status' => $data['status'],
          ]);
          if(count($product->materials) > 0)
          {
              foreach ($product->materials as $material) {
                  $material->delete();
              }
          }
          if(count($product->customs) > 0)
          {
              foreach ($product->customs as $custom) {
                  $custom->delete();
              }
          }

          if(count($product->functions) > 0)
          {
              foreach ($product->functions as $item) {
                  $item->delete();
              }
          }


          foreach ($data['material_id'] as $material) {
              ProductMaterial::create([
                  'product_id' => $product->id,
                  'material_id' => $material,
              ]);
          }

          foreach ($data['custom_id'] as $custom) {

              ProductCustom::create([
                  'product_id' => $product->id,
                  'custom_id' => $custom,
              ]);
          }

          foreach ($data['function_id'] as $item) {

              ProductFunction::create([
                  'product_id' => $product->id,
                  'function_id' => $item,
              ]);
          }
          return response()->json([
              'message' => 'Product saved successfully',
              'status' =>'success',
          ]);

      }

      public function show($product):JsonResponse
      {
          $p = new ProductCollection($product);
          return response()->json([
              'data' => new ProductCollection($product),
              'status' =>'success',
          ]);
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
