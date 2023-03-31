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
use App\Http\Controllers\VersionMesController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\GalaryController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\MainbannerController;
use App\Http\Controllers\SayController;
use App\Http\Controllers\ScoreController;
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
// Route::resource('new',VNewController::class);
//=====================================================================
//================ New galary ==========================================
Route::resource('galary',GalaryController::class);
//=====================================================================
//================ About us Route =====================================
Route::resource('aboutUs',AboutUsController::class);
//=====================================================================
//================ About us Route =====================================
Route::resource('contactus',ContactUsController::class);
//=====================================================================
//===============  Setting Route ======================================
Route::resource('setting',SettingController::class);
//======================================================================
//=============== Version Route ========================================
Route::resource('version_mes',VersionMesController::class);
Route::resource('video',VideoController::class);
Route::get('version/attr_edit/{id}',[VersionMesController::class,'change'])->name('version.attr_edit');
Route::post('version/visionAtrrUpdate/{id}',[VersionMesController::class,'visionAtrrUpdate'])->name('version.visionAtrrUpdate');

//=======================================================================
//=============== Say Route =============================================
Route::resource('say',SayController::class);
//========================================================================
//============= Score Route ==============================================
Route::resource('score',ScoreController::class);
//========================================================================
//============== detail Route ============================================
Route::resource('detail',DetailController::class);
//========================================================================
//============== MainBanner Route ========================================
Route::resource('mainbanner',MainbannerController::class);


##############################################
// version Attr
Route::post('version-attribute/{id}',[\App\Http\Controllers\VersionMesController::class,'addProductAttribute'])->name('version.attribute');
Route::delete('version-attribute/{id}',[\App\Http\Controllers\VersionMesController::class,'attributeDelete'])->name('version.destroy');


Route::get('/',[\App\Http\Controllers\IndexController::class,'index'])->name('index');
Route::get('AboutUs',[\App\Http\Controllers\IndexController::class,'aboutus'])->name('boutusFront');

// Route::get('/',[\App\Http\Controllers\IndexController::class,'showAttributeFront'])->name('showAttributeFront');

######################
// video section
Route::post('uploadVideo',[\App\Http\Controllers\VideoController::class,'uploadVideo'])->name('videos.uploadVideo');
Route::post('video-news/{id}',[\App\Http\Controllers\VideoController::class,'addProductAttribute'])->name('video.news');
Route::delete('video-news/{id}',[\App\Http\Controllers\VideoController::class,'attributeDelete'])->name('video.deleteAtrr');

Route::get('video/edit_news/{id}',[VideoController::class,'editProductAtrr'])->name('video.edit_news');
Route::post('video/update_news/{id}',[VideoController::class,'updateNews'])->name('video.update_news');

///////////////////////////////company detgails /////////////////////////////////
Route::get('company-detail/{id}/',[\App\Http\Controllers\IndexController::class,'companyDetail'])->name('company.detail');
