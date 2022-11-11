<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataPembeliController;
use App\Http\Controllers\GetPembeliController;

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


Route::get('pembeli', [DataPembeliController::class,'index']);
Route::post('pembeli', [DataPembeliController::class,'create']);
Route::put('pembeli', [DataPembeliController::class,'update']);
Route::delete('pembeli', [DataPembeliController::class,'delete']);

Route::get('idpembeli', [GetPembeliController::class,'GetPembeli']);