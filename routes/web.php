<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
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
    return view('admin.index');
});

//Route::controller(productController::class)->group(function (){
//
//    Route::prefix('/product')->group(function (){
//
//        Route::post('/add','store')->name('addProduct');
//        Route::get('/all','index')->name('getProduct');
//    });
//
//});
Route::apiResources(['product' =>productController::class]);
