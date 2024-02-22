<?php

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

Route::prefix('clases')->group(function () {
    Route::get('/', 'ClaseController@index'); // Obtener todas las clases
    Route::get('/{id}', 'ClaseController@show'); // Obtener una clase por su ID
    Route::post('/', 'ClaseController@store'); // Agregar una nueva clase
    Route::put('/{id}', 'ClaseController@update'); // Actualizar una clase existente
    Route::delete('/{id}', 'ClaseController@destroy'); // Eliminar una clase por su ID
});
