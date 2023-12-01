<?php

use App\Http\Controllers\calcController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('sum/{num1}/{num2}', [calcController::class, 'sum']);
Route::get('substract/{num1}/{num2}', [calcController::class, 'substract']);
Route::get('mult/{num1}/{num2}', [calcController::class, 'mult']);
Route::get('divide/{num1}/{num2}', [calcController::class, 'divide']);
Route::get('expo/{num1}/{num2}', [calcController::class, 'expo']);
