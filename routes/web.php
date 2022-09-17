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
})->name('home');

Route::controller(productController::class)->group(function (){

    Route::prefix('/product')->group(function (){

        Route::post('/add','store')->name('addProduct');
        Route::get('/add','addPage')->name('addProductPage');
        Route::get('/','index')->name('viewProductPage');
        Route::get('/{id}','singleProduct')->name('viewSingleProductPage');
    });

});
Route::controller(CategoryController::class)->group(function (){

    Route::prefix('category')->group(function (){
        Route::get('/add',function (){
            return view('admin.category.add_category');
        });
        Route::post('/add','store');
        Route::get('/','index');
    });

});
Route::controller(\App\Http\Controllers\UserController::class)->group(function (){
    Route::prefix('auth')->group(function (){
        Route::get('/users', 'index');
        Route::get('create', function (){
            return view('admin.auth.create_user');
        });
        Route::post('create', 'create');
    });
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
