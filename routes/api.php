<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\QuizApiController;
use App\Http\Controllers\API\ForoApiController;
use App\Http\Controllers\API\LeccionesApiController;
use App\Http\Controllers\API\UserApiController;
use App\Http\Controllers\API\RolApiController;
use App\Http\Controllers\API\RespuestasApiController;







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

Route::apiResource('quiz', QuizApiController::class);
Route::apiResource('foro', ForoApiController::class);
Route::apiResource('lecciones', LeccionesApiController::class);
Route::apiResource('user', UsersApiController::class);
Route::apiResource('rol', RolApiController::class);
Route::apiResource('respuestas', RespuestasApiController::class);
Route::get('api/respuestas-foro/{foroId}', [RespuestasApiController::class,'hola']);

