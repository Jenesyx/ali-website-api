<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Services\MaterialService;
use App\Models\Material;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function __construct(protected MaterialService $materialService)
    {
    }

    public function list():JsonResponse
    {
        return $this->materialService->list();
    }
    public function index():JsonResponse
    {
        return $this->materialService->index();
    }

    public function store(Request $request):JsonResponse
    {
        return $this->materialService->store($request->all());
    }

    public function show(Material $material):JsonResponse
    {
        return $this->materialService->show($material);
    }

    public function update(Request $request, Material $material):JsonResponse
    {
        return $this->materialService->update($request->all(),$material);
    }

    public function destroy( Material $material):JsonResponse
    {
        return $this->materialService->destroy($material);
    }
}
