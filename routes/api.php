<?php

use App\Http\Controllers\ExpedienteApiController;
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

Route::get('/expedientes/{id}', [ExpedienteApiController::class, 'expedientes']);
Route::get('/actuaciones/{id}', [ExpedienteApiController::class, 'actuaciones']);
Route::post('/actuaciones', [ExpedienteApiController::class, 'storeActuacion']);

/* url: http://localhost:8000/api/expedientes */
