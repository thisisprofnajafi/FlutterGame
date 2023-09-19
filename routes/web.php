<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('setups', [Controller::class,'setups']);

Route::get('login',[Controller::class,'getLogin'])->name('login');
Route::get('logout',[Controller::class,'logout'])->name('logout');
Route::post('login',[Controller::class,'login'])->name('login');

Route::get('/',function (){
   return redirect('dashboard');
});

Route::group(['middleware'=>'auth','prefix'=>'dashboard'],function (){

    Route::get('/',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/sales',[DashboardController::class,'indexSales'])->name('dashboard sales');
    Route::get('/users',[DashboardController::class,'indexUsers'])->name('dashboard users');
    Route::get('/user/{id}',[DashboardController::class,'user'])->name('user');
    Route::get('/settings',[DashboardController::class,'settings'])->name('settings');
    Route::post('/changepass',[DashboardController::class,'changePass'])->name('change pass');
});
