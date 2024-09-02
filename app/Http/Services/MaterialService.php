<?php

namespace App\Http\Services;

use App\Models\Material;
use Illuminate\Http\JsonResponse;
class MaterialService
{

    public function list()
    {
        $data = Material::select(['id', 'name'])->get();
        return response()->json([
            'data' => $data,
            'status' =>'success',
        ]);

    }
      public function index():JsonResponse
      {
         $data = Material::all();
         return response()->json([
             'data' => $data,
             'status' =>'success',
         ]);
      }

      public function store($data):JsonResponse
      {
         Material::create([
             'name' => $data['name'],
             'description' => $data['description'],
             'subprice' => $data['subprice'],
         ]);
          return response()->json([
              'message' => 'Material saved successfully',
              'status' =>'success',
          ]);
      }

      public function show($material):JsonResponse
      {
          return response()->json([
              'data' => $material,
              'status' =>'success',
          ]);
      }

      public function update($data, $material):JsonResponse
      {
          $material->update([
              'name' => $data['name'],
              'description' => $data['description'],
              'subprice' => $data['subprice'],
          ]);
          return response()->json([
              'message' => 'Material updated successfully',
              'status' =>'success',
          ]);
      }

      public function destroy($material):JsonResponse
      {
          $material->delete();
          return response()->json([
              'message' => 'Material deleted successfully',
              'status' =>'success',
          ]);
      }

}
