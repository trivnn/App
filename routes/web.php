<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\product\ProductController;
use App\Http\Controllers\Admin\User\UserController;
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





Route::get('login',[AuthController::class,'getLogin'] ); // Router get: /login => return login
Route::post('login',[AuthController::class,'postLogin'] );   // Router post: /login => return login
Route::get('processed',[AuthController::class,'processed'] );

Route::group(['prefix'=>'admin'], function(){ 

    Route::get('/', [AdminController::class,'index']);   // Router get: /admin => return index
    Route::get('/logout', [AdminController::class,'logout']);    // Router get: /admin/logout => return logout
   
    Route::group(['prefix'=>'product'], function(){ 
        Route::get('/',[ProductController::class,'index']); // Router get: /admin/product/ => return index
        Route::get('/create',[ProductController::class,'create']);// Router get: /admin/product/create => return create       
        Route::post('/store',[ProductController::class,'store']);// Router post: /admin/product/store => return store       
        Route::get('/edit',[ProductController::class,'edit']); // Router get: /admin/product/edit => return edit    
        Route::post('/update', [ProductController::class,'update']); // Router post: /admin/product/update => return update       
        Route::get('/delete', [ProductController::class,'delete']);// Router get: /admin/product/delete => return delete      
    });

    Route::group(['prefix'=>'user'], function(){
        Route::get('/',[UserController::class,'index']); 
        Route::get('/create',[UserController::class,'create']);   
        Route::post('/store',[UserController::class,'store']); 
        Route::get('/edit',[UserController::class,'edit']); 
        Route::post('/update', [UserController::class,'update']);      
        Route::get('/delete', [UserController::class,'delete']);
    });

    Route::group(['prefix'=>'category'], function(){
        Route::get('/',[CategoryController::class,'index']); 
        Route::get('/create',[CategoryController::class,'create']);   
        Route::post('/store',[CategoryController::class,'store']); 
        Route::get('/edit',[CategoryController::class,'edit']); 
        Route::post('/update', [CategoryController::class,'update']);      
        Route::get('/delete', [CategoryController::class,'delete']);
    });
});


