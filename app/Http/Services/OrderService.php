<?php

namespace App\Http\Services;

use App\Models\Order;
use Illuminate\Http\JsonResponse;
class OrderService
{


      public function index():JsonResponse
      {
          return response()->json([
              'data' => Order::all(),
              'status' =>'success',
          ]);
      }

      public function orderUser($id)
      {
          $orders = Order::where('user_id', $id)->get();
          return response()->json([
              'data' => $orders,
              'status' => 'success',
          ]);
      }

      public function store($data):JsonResponse
      {
         Order::create([
             'user_id' => $data['user_id'],
             'product_id' => $data['product_id'],
             'price' => $data['price'],
             'size' => $data['size'],
         ]);
          return response()->json([
              'message' => 'Order saved successfully',
              'status' =>'success',
          ]);
      }

      public function show($order):JsonResponse
      {
          return response()->json([
              'data' => $order,
              'status' =>'success',
          ]);
      }

      public function update($data, $order):JsonResponse
      {
         $order->update([
             'user_id' => $data['user_id'],
             'product_id' => $data['product_id'],
             'price' => $data['price'],
             'size' => $data['size'],
         ]);
          return response()->json([
              'message' => 'Order updated successfully',
              'status' =>'success',
          ]);
      }

      public function destroy($order):JsonResponse
      {
         $order->delete();
          return response()->json([
              'message' => 'Order deleted successfully',
              'status' =>'success',
          ]);
      }

}
