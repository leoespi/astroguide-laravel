<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\QuizApiController;
use App\Http\Controllers\API\ForoApiController;

<<<<<<< HEAD

=======
>>>>>>> 9d30b7ed793eb98975170dee26756392c7b4e7cf

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

Route::apiResource('foro', ForoApiController::class);

