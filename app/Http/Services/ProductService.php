<?php

namespace App\Http\Services;

use App\Http\Resources\ProductResource;
use App\Models\Order;
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

          $materials = ProductMaterial::where('product_id', $product->id)->get();
          if(count($materials) > 0)
          {
              foreach ($materials as $material) {
                  $material->delete();
              }
          }
          $customs = ProductCustom::where('product_id', $product->id)->get();
          if(count($customs) > 0)
          {
              foreach ($customs as $custom) {
                  $custom->delete();
              }
          }
          $functions = ProductFunction::where('product_id', $product->id)->get();
          if(count($functions) > 0)
          {
              foreach ($functions as $item) {
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
                  'functions_id' => $item,
              ]);
          }
          return response()->json([
              'message' => 'Product saved successfully',
              'status' =>'success',
          ]);

      }

      public function show($product):JsonResponse
      {
          return response()->json([
              'data' => new ProductResource($product),
              'status' =>'success',
          ]);

      }

      public function update($data, $product):JsonResponse
      {
          $product->update([
              'title' => $data['title'],
              'description' => $data['description'],
              'price' => $data['price'],
              'status' => $data['status'],
          ]);

          $materials = ProductMaterial::where('product_id', $product->id)->get();
          if(count($materials) > 0)
          {
              foreach ($materials as $material) {
                  $material->delete();
              }
          }
          $customs = ProductCustom::where('product_id', $product->id)->get();
          if(count($customs) > 0)
          {
              foreach ($customs as $custom) {
                  $custom->delete();
              }
          }
          $functions = ProductFunction::where('product_id', $product->id)->get();
          if(count($functions) > 0)
          {
              foreach ($functions as $item) {
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
                  'functions_id' => $item,
              ]);
          }
          return response()->json([
              'message' => 'Product updated successfully',
              'status' =>'success',
          ]);
      }

      public function destroy($product):JsonResponse
      {
         $orders = Order::where('product_id', $product->id)->whereIn('status', ['Awaiting payment', 'Paying'])->get();
         if(count($orders) > 0)
         {
             return  response()->json([
                 "message" => "This product is already ordered",
                 "status" => "error",
             ],409);
         }

         $product->delete();
          return response()->json([
              'message' => 'Product deleted successfully',
              'status' =>'success',
          ]);
      }

}
