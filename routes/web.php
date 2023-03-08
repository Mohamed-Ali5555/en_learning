<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PresedentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServicerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\VNewController;
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
//====================================================================
//============= Eng Ahmed Khaled Mostafa =============================
//==================== Start 1/3/2023    =============================
//====================================================================

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
//=====================================================================
//============== Product Route ========================================
Route::resource('product',ProductController::class);
//=====================================================================
//================ New Route ==========================================
Route::resource('new',VNewController::class);
//=====================================================================
//================ About us Route =====================================
Route::resource('aboutUs',AboutUsController::class);
//=====================================================================
//===============  Setting Route ======================================
Route::resource('setting',SettingController::class);



Route::get('/',[\App\Http\Controllers\IndexController::class,'index'])->name('index');
Route::get('AboutUs',[\App\Http\Controllers\IndexController::class,'aboutus'])->name('boutusFront');
