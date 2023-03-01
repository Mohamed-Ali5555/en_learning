<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix'=>'admin','middleware'=>'guest:admin'],function(){
    Route::get('login',[\App\Http\Controllers\Admin\LoginController::class,'show_login_view'])->name('admin.showlogin');
    Route::post('login',[\App\Http\Controllers\Admin\LoginController::class,'login'])->name('admin.login');

});


Route::group(['prefix'=>'admin','middleware'=>'auth:admin'],function(){

    Route::get('/',[\App\Http\Controllers\Admin\AdminController::class,'index'])->name('admin');
    Route::get('admin/logout',[\App\Http\Controllers\Admin\LoginController::class,'logout'])->name('admin.logout');

});
