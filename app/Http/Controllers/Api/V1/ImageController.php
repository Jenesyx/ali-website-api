<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Services\ImageService;
use App\Models\ProductImage;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function __construct(protected ImageService $imageService)
    {
    }

    public function store(Request $request):JsonResponse
    {
        return $this->imageService->store($request->all());
    }

    public function destroy(ProductImage $image): JsonResponse
    {
        return $this->imageService->destroy($image);
    }
}
