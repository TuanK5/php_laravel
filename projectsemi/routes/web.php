<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Admin\CartadmController;
use League\Flysystem\UrlGeneration\PrefixPublicUrlGenerator;

use App\Http\Controllers\FrontendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontendController::class, 'getHome']);

Route::get('detail/{id}/{slug}.html', [FrontendController::class, 'getDetail']);
Route::post('detail/{id}/{slug}.html', [FrontendController::class, 'postComment']);

Route::get('category/{id}/{slug}.html',[FrontendController::class, 'getCategory']);

Route::get('search',[FrontendController::class, 'getSearch']);

Route::group(['prefix'=>'cart'],function(){
    Route::get('add/{id}',[CartController::class, 'getAddCart']);
    Route::get('show',[CartController::class, 'getShowCart']);
    Route::get('delete/{id}',[CartController::class, 'getDeleteCart']);
    Route::get('update',[CartController::class, 'getUpdateCart']);
    Route::post('show',[CartController::class, 'postOrderstatus']);
});

Route::get('orderstatus',[CartController::class, 'getOrderstatus']);

Route::group(['prefix'=>'signup'],function(){
    Route::get('/', [FrontendController::class, 'getSignup']);
    Route::post('/', [FrontendController::class, 'postSignup'])->name('signup');
});

Route::group(['namespace'=>'Admin'],function(){
    
    Route::group(['prefix'=>'login', 'middleware'=>'CheckLogedIn'],function(){
        Route::get('/', [LoginController::class, 'getLogin']);
        Route::post('/', [LoginController::class, 'postLogin']);
    });
    Route::get('logout', [HomeController::class, 'getLogout']);
    Route::group(['prefix'=>'admin', 'middleware'=>'CheckLogedOut'], function(){
        Route::get('home', [HomeController::class, 'getHome']);

        Route::group(['prefix'=>'category'], function(){
            Route::get('/',[CategoryController::class, 'getCate'])->name('category');
            Route::post('/',[CategoryController::class, 'postCate']);

            Route::get('edit/{id}',[CategoryController::class, 'getEditCate']);
            Route::post('edit/{id}',[CategoryController::class, 'postEditCate']);

            Route::get('delete/{id}',[CategoryController::class, 'getDeleteCate']);
        });

        Route::group(['prefix'=>'product'], function(){
            Route::get('/',[ProductController::class, 'getProduct'])->name('product');

            Route::get('add',[ProductController::class, 'getAddProduct']);
            Route::post('add',[ProductController::class, 'postAddProduct']);

            Route::get('edit/{id}',[ProductController::class, 'getEditProduct']);
            Route::post('edit/{id}',[ProductController::class, 'postEditProduct']);

            Route::get('delete/{id}',[ProductController::class, 'getDeleteProduct']);
        });
        Route::group(['prefix'=>'user'], function(){
            Route::get('/',[UserController::class, 'getUser'])->name('user');

            // Route::get('add',[UserController::class, 'getAddProduct']);
            // Route::post('add',[UserController::class, 'postAddProduct']);

            // Route::get('edit/{id}',[UserController::class, 'getEditProduct']);
            // Route::post('edit/{id}',[UserController::class, 'postEditProduct']);

            // Route::get('delete/{id}',[UserController::class, 'getDeleteProduct']);
        });
        Route::group(['prefix'=>'orderconfirm'], function(){
            Route::get('/',[CartadmController::class, 'getOrderconfirm'])->name('orderconfirm');
           
        });
    });
});
