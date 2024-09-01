<?php

namespace App\Http\Services;

use App\Models\Functions;
use Illuminate\Http\JsonResponse;
class FunctionsService
{
      public function index():JsonResponse
      {
         return response()->json([
             'data' => Functions::all(),
             'status' =>'success',
         ]);
      }

      public function store($data):JsonResponse
      {
            Functions::create([
                'name' => $data['name'],
                'description' => $data['description'],
            ]);
          return response()->json([
              'message' => 'Function saved successfully',
              'status' =>'success',
          ]);
      }

    public function show($function):JsonResponse
    {

        return response()->json([
            'data' => $function,
            'status' =>'success',
        ]);
    }

      public function update($data, $function):JsonResponse
      {
          $function->update([
              'name' => $data['name'],
              'description' => $data['description'],
          ]);
          return response()->json([
              'message' => 'Function updated successfully',
              'status' =>'success',
          ]);
      }

      public function destroy($function):JsonResponse
      {
          $function->delete();
          return response()->json([
              'message' => 'Function deleted successfully',
              'status' =>'success',
          ]);
      }

}
