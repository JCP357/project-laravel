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

Route::get("travels/{id}","App\Http\Controllers\TravelController@show");

Route::post("travels", "App\Http\Controllers\TravelController@store");

Route::put("travels/{id}", "App\Http\Controllers\TravelController@update");

Route::delete("travels/{id}", "App\Http\Controllers\TravelController@destroy");


//users


Route::get("users", "App\Http\Controllers\UserController@index");

Route::get("users/{id}","App\Http\Controllers\UserController@show");

Route::post("users", "App\Http\Controllers\UserController@store");

Route::put("users/{id}", "App\Http\Controllers\UserController@update");

Route::delete("users/{id}", "App\Http\Controllers\UserController@destroy");