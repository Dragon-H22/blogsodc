<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use App\Http\Controllers\Admin;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['prefix'=>"Admin","middleware"=>'auth'],function(){
  
    Route::get('addNewArticle',[Admin::class,"addNewArticle"]);
    Route::post('store',[Admin::class,"store"]);
    // Route::post('store',[Admin::class,"store"]);
    // Route::post('update',[Admin::class,"update"]);
    // Route::get('edit/{id}',[Admin::class,"edit"]);
    // Route::get('delete/{id}',[Admin::class,"delete"]);
});

Route::get('login',[Admin::class,"login"])->name("login");
Route::post("loginrequest",[Admin::class,"loginrequest"]);
Route::get("logout",[Admin::class,"logout"]);


Route::get('/',[User::class,"index"]);
Route::get('/posts',[User::class,"posts"]);