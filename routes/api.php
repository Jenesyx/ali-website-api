<?php

use App\Http\Controllers\Api\V1\CustomController;
use App\Http\Controllers\Api\V1\FunctionsController;
use App\Http\Controllers\Api\V1\MaterialController;
use App\Http\Controllers\Api\V1\ProductController;
use App\Http\Controllers\Api\V1\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('v1')->group(function () {
    Route::controller(UserController::class)->group(function (){
        Route::post('login', 'login');
        Route::post('register', 'register');
    });

    Route::prefix('portal')->middleware('auth:sanctum')->group(function (){
    // Route of lists  :
        Route::get('material/list', [MaterialController::class,'list']);
        Route::get('functions/list', [FunctionsController::class,'list']);
        Route::get('custom/list', [CustomController::class,'list']);



        Route::apiResource('product', ProductController::class);
        Route::apiResource('material', MaterialController::class);
        Route::apiResource('custom', CustomController::class);
        Route::apiResource('functions', FunctionsController::class);
    });
});
