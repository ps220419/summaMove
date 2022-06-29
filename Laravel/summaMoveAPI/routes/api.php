<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OefeningenController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\PrestatiesController;

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

Route::apiResource('oefenings', OefeningenController::class)
    ->parameters(['oefenings' => 'oefeningen'])->only(['index']);

Route::apiResource('prestaties', PrestatiesController::class)
->parameters(['prestaties' => 'prestatie'])->only(['index']);


    
Route::post('/register', [AuthenticationController::class, 'register']);
Route::post('/login', [AuthenticationController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::apiResource('oefenings', OefeningenController::class)
    ->parameters(['oefenings' => 'oefeningen'])->except(['index']);

    Route::delete('oefenings/delete/{id}',[OefeningenController::class,'delete']);

      Route::apiResource('prestaties', PrestatiesController::class)
    ->parameters(['prestaties' => 'prestatie'])->except(['index']);
    
    Route::delete('prestaties/delete/{id}',[PrestatiesController::class,'delete']);


});