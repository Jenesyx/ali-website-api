<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Services\ProductService;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(protected ProductService $productService)
    {
    }

    public function index():JsonResponse
    {
        return $this->productService->index();
    }

    public function store(Request $request):JsonResponse
    {
        return $this->productService->store($request->all());
    }

    public function show(Product $product):JsonResponse
    {
        return $this->productService->show($product);
    }
}
