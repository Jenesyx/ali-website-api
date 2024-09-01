<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Services\FunctionsService;
use App\Models\Functions;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FunctionsController extends Controller
{
    public function __construct(protected FunctionsService $functionsService)
    {
    }

    public function index():JsonResponse
    {
        return $this->functionsService->index();
    }

    public function store(Request $request):JsonResponse
    {
        return $this->functionsService->store($request->all());
    }

    public function show(Functions $function):JsonResponse
    {
        return $this->functionsService->show($function);
    }

    public function update(Request $request, Functions $function):JsonResponse
    {
        return $this->functionsService->update($request->all(),$function);
    }

    public function destroy(Functions $function):JsonResponse
    {
        return $this->functionsService->destroy($function);
    }
}
