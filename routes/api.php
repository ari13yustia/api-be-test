<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SeachDataSwapController;
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
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::get('/search_swap/province', [SeachDataSwapController::class, 'searchDataProvince'])->name('search_data_province');
    Route::get('/search_swap/city', [SeachDataSwapController::class, 'searchDataCity'])->name('search_data_city');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
