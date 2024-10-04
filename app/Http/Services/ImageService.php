<?php

namespace App\Http\Services;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\JsonResponse;
class ImageService
{
      public function index():JsonResponse
      {
         // Service method logic
      }

      public function store($data):JsonResponse
      {
          $product_id = $data['product_id'];
          $file = $data['image'];
          $is_cover = $data['is_cover'];
          $product = Product::find($product_id);

          $pathMain = "uploads/";
          $extensionf = $file->getClientOriginalName();
          $extension = $file->getClientOriginalExtension();
          $w = str_replace($extension, "webp", $extensionf);
          $fileName = md5(microtime()) .'.'."$extension";
          $file->move($pathMain, $fileName);
          $file = $fileName;

          if($is_cover)
          {
              if(count($product->images) > 0)
              {
                foreach ($product->images as $image)
                {
                    $image->update(['is_cover' => 0]);
                }
              }
              $is_cover = 1;
              $product->update(['image_cover' => $file]);
          }else
          {
              $is_cover = 0;
          }
          ProductImage::create([
              'product_id' => $data['product_id'],
              'image' => $file,
              'is_cover' => $is_cover
          ]);

          return response()->json([
              'message' => 'Image saved successfully',
              'status' =>'success',
          ]);

      }

      public function show():JsonResponse
      {
         // Service method logic
      }

      public function update():JsonResponse
      {
         // Service method logic
      }

      public function destroy($data):JsonResponse
      {
         $image = ProductImage::find($data->id)->delete();
          return response()->json([
              'message' => 'Image delete successfully',
              'status' =>'success',
          ]);
      }

}
