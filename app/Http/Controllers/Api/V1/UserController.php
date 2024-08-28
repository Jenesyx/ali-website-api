<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Services\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Psy\Util\Json;

class UserController extends Controller
{
    public function __construct(protected UserService $userService)
    {
    }

    public function store(Request $request):JsonResponse
    {
        return $this->userService->store($request->all());
    }

    public function login(Request $request):JsonResponse
    {
        return $this->userService->login($request->all());
    }
}
