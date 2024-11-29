<?php

namespace App\Http\Services;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class OrderService
{


      public function index():JsonResponse
      {
          return response()->json([
              'data' => Order::with('product','user', 'product.materials', 'product.customs', 'product.functions')->get(),
              'status' =>'success',
          ]);
      }

      public function orderUser($id)
      {
          $orders = Order::where('user_id', $id)->with('product','user', 'product.materials', 'product.customs', 'product.functions')->get();
          return response()->json([
              'data' => $orders,
              'status' => 'success',
          ]);
      }

      public function store($data):JsonResponse
      {
          $product = Product::find($data['product_id']);
         Order::create([
             'user_id' => Auth::user()->id,
             'product_id' => $data['product_id'],
             'price' => $product->price,
             'size' => $data['size'],
             'color' => $data['color'],
             "email" => $data['email'],
             "password" => $data['password'],
             'address' => $data['address'],
             ]);
          return response()->json([
              'message' => 'Order saved successfully',
              'status' =>'success',
          ]);
      }

      public function show($order):JsonResponse
      {
          return response()->json([
              'data' => $order->with('product','user', 'product.materials', 'product.customs', 'product.functions')->get(),
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

    public function changeStatus($data, $order):JsonResponse
    {
        $order->update([
            'status' => $data['status'],
        ]);
        return response()->json([
            'message' => 'Order status updated successfully',
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

    public function postcodeOrder($data, $order):JsonResponse
    {
        $order->update([
            'tracking_code' => $data['tracking_code'],
            'postal_code' => $data['postal_code'],
            'company_post' => $data['company_post'],
        ]);

        return response()->json([
            'message' => 'Order completed successfully',
            'status' =>'success',
        ]);
    }

}
