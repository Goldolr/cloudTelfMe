<?php

use Illuminate\Http\Request;
use App\Http\Controllers\TelefonosController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('telefonos', [TelefonosController::class, 'index']);
Route::post('telefonos', [TelefonosController::class, 'store']);
Route::get('telefonos/{id}', [TelefonosController::class, 'show']);
Route::put('telefonos/{id}', [TelefonosController::class, 'update']);
Route::delete('telefonos/{id}', [TelefonosController::class, 'destroy']);
