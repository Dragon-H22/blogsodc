<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Controllers\test;

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

Route::get('/',[test::class,'index']);


Route::get("logout",[User::class,"logout"]);
Route::get('login',[admin::class,'login']);
Route::post('postlogin',[admin::class,'postlogin']);

Route::group(['prefix'=>"admin","middleware"=>'auth'],function(){
    Route::get('index',[admin::class,"index"]);
});

