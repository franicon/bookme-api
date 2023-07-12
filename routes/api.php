<?php

use App\Models\Bookable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Get all Bookables
Route::get('bookables', function (Request $request) {
    return Bookable::all();
});

// Get Single Bookable
Route::get('bookables/{id}', function (Request $request, $id) {
    return Bookable::find($id);
});
