<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/reports', [\App\Http\Controllers\Api\ReportController::class, 'index']);
Route::post('/reports', [\App\Http\Controllers\Api\ReportController::class, 'store']);
Route::patch('/reports/{report}', [\App\Http\Controllers\Api\ReportController::class, 'update']);
