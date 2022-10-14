<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoesController;

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

Route::get('/shoes',[ShoesController::class, 'index']);
Route::post('/shoes',[ShoesController::class, 'store']);
Route::put('/shoes/{id}',[ShoesController::class, 'update']);
Route::delete('/shoes/{id}',[ShoesController::class, 'destroy']);
