<?php

namespace App\Http\Services;

use App\Models\Custom;
use Illuminate\Http\JsonResponse;
class CustomService
{
    public function index():JsonResponse
    {
        $data = Custom::all();
        return response()->json([
            'data' => $data,
            'status' =>'success',
        ]);
    }

    public function store($data):JsonResponse
    {
        Custom::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'subprice' => $data['subprice'],
        ]);
        return response()->json([
            'message' => 'Custom saved successfully',
            'status' =>'success',
        ]);
    }

    public function show($Custom):JsonResponse
    {
        return response()->json([
            'data' => $Custom,
            'status' =>'success',
        ]);
    }

    public function update($data, $Custom):JsonResponse
    {
        $Custom->update([
            'name' => $data['name'],
            'description' => $data['description'],
            'subprice' => $data['subprice'],
        ]);
        return response()->json([
            'message' => 'Custom updated successfully',
            'status' =>'success',
        ]);
    }

    public function destroy($Custom):JsonResponse
    {
        $Custom->delete();
        return response()->json([
            'message' => 'Custom deleted successfully',
            'status' =>'success',
        ]);
    }

}
