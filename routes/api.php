<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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



Route::post('register',[AuthController::class,'register']);
Route::post('login',[AuthController::class,'login']);
Route::post('logout',[AuthController::class,'logout']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('post',[PostController::class,'store']);
    Route::delete('post/{id}',[PostController::class,'destroy']);
    Route::put('post/{id}',[PostController::class,'destroy']);
    Route::get('post',[PostController::class,'index']);
});