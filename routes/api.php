<?php

use App\Http\Controllers\Api\V1\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('v1')->group(function () {
    Route::controller(UserController::class)->group(function (){
        Route::post('login', 'login');
    });

    Route::prefix('portal')->middleware('auth:sanctum')->group(function (){
    });
});
