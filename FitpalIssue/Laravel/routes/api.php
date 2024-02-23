<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClaseController;

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
    Route::get('/', [ClaseController::class, 'index']); // Obtener todas las clases
    Route::get('/{id}', [ClaseController::class, 'show']); // Obtener una clase por su ID
    Route::post('/', [ClaseController::class, 'store']); // Agregar una nueva clase
    Route::put('/{id}', [ClaseController::class, 'update']); // Actualizar una clase existente
    Route::delete('/{id}', [ClaseController::class, 'destroy']); // Eliminar una clase por su ID
});
