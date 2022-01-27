<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\JeloController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//rest API/CRUD

Route::get('/jela', [JeloController::class, 'index']);
Route::get('/jela/{jelo}', [JeloController::class, 'show']);
Route::post('/jela', [JeloController::class, 'store']);
Route::put('/jela/{jelo}', [JeloController::class, 'update']);
Route::delete('/jela/{jelo}', [JeloController::class, 'destroy']);
