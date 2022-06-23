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

Route::get('/search/province', [App\Http\Controllers\CariDataController::class, 'searchDataProvince']);
Route::get('/search/city', [App\Http\Controllers\CariDataController::class, 'searchDataCity']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
