<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PresedentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});

//================= User Route========================================
//====================================================================
Route::resource('user',UserController::class);
//=====================================================================
//================= Banner Route ======================================
Route::resource('banner',BannerController::class);
//=====================================================================
//================== Company Route ====================================
Route::resource('company',CompanyController::class);
//=====================================================================
//================ Presedent Route ====================================
Route::resource('presedent',PresedentController::class);




Route::get('/',[\App\Http\Controllers\IndexController::class,'index'])->name('index');
