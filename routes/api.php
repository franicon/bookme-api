<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BookableController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//
//Route::get('bookables', [BookableController::class, 'index']);
//Route::get('bookables/{id}', [BookableController::class, 'show']);

Route::apiResource('bookables', BookableController::class)->only('index', 'show');
