<?php

use App\Http\Controllers\AuthController;
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


Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('info', AuthController::class, 'getInfo');
});


Route::post('getCode', [AuthController::class, 'getCode'])->name('user get Code');
Route::post('login', [AuthController::class, 'login'])->name('user login');
Route::post('checkCode', [AuthController::class, 'CheckCode'])->name('check code');


