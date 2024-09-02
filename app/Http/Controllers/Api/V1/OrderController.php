<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Services\OrderService;
use App\Models\Order;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct(protected OrderService $orderService)
    {
    }

    public function orderUser($id): JsonResponse
    {
        return $this->orderService->orderUser($id);
    }

    public function index():JsonResponse
    {
        return $this->orderService->index();
    }

    public function store(Request $request):JsonResponse
    {
        return $this->orderService->store($request->all());
    }

    public function show(Order $order):JsonResponse
    {
        return $this->orderService->show($order);
    }

    public function update(Request $request, Order $order):JsonResponse
    {
        return $this->orderService->update($request->all(),$order);
    }

    public function destroy( Order $order):JsonResponse
    {
        return $this->orderService->destroy($order);
    }
}
