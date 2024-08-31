<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Services\CustomService;
use App\Models\Custom;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CustomController extends Controller
{
    public function __construct(protected CustomService $customService)
    {
    }

    public function index():JsonResponse
    {
        return $this->customService->index();
    }

    public function store(Request $request):JsonResponse
    {
        return $this->customService->store($request->all());
    }

    public function show(Custom $custom):JsonResponse
    {
        return $this->customService->show($custom);
    }

    public function update(Request $request, Custom $custom):JsonResponse
    {
        return $this->customService->update($request->all(),$custom);
    }

    public function destroy( Custom $custom):JsonResponse
    {
        return $this->customService->destroy($custom);
    }
}
