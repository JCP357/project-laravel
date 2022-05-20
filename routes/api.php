<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get("travels", "App\Http\Controllers\TravelController@index");

Route::get("travels/{id}", App\Http\Controllers\TravelController::class, "show");

Route::post("travels", "App\Http\Controllers\TravelController@store");

Route::put("travels/{id}", App\Http\Controllers\TravelController::class, "update");

Route::delete("travels/{id}", App\Http\Controllers\TravelController::class, "destroy");
