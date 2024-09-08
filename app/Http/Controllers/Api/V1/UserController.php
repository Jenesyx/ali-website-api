<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Services\UserService;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Psy\Util\Json;

class UserController extends Controller
{
    public function __construct(protected UserService $userService)
    {
    }

    public function index():JsonResponse
    {
        return $this->userService->index();
    }

    public function register(Request $request):JsonResponse
    {
        return $this->userService->register($request->all());
    }

    public function login(Request $request):JsonResponse
    {
        return $this->userService->login($request->all());
    }

    public function orderUsers(User $user):JsonResponse
    {
        return $this->userService->orderUsers($user);
    }
}
