<?php

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
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/product')->group(function(){
    Route::match(['get','post'],'/create',[ProductController::class,'create']);
    Route::get('/view',[ProductController::class,'view']);
    Route::match(['get','post'],'/update/{id}',[ProductController::class,'update']);
    Route::get('/delete/{id}',[ProductController::class,'delete']);
});

Route::match(['get','post'],'/admin/login',[\App\Http\Controllers\AdminController::class,'login']);
Route::get('/admin/dashboard',[\App\Http\Controllers\AdminController::class,'dashboard']);

// category route
Route::resource('/category',App\Http\Controllers\CategoryController::class);




// how to get api from third party
Route::get('/api',[App\Http\Controllers\ApiController::class,'index'])->name('user.api');
