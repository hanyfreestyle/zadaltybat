<?php

use App\Http\Controllers\AuthAdminController;
use App\Http\Controllers\shopping\ShoppingCartController;
use App\Http\Controllers\web\ShopPageController;
use App\Http\Controllers\web\WebPageController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

//Auth::routes([
//    'register' => false, // Registration Routes...
//    'reset' => false, // Password Reset Routes...
//    'verify' => false, // Email Verification Routes...
//]);
//Auth::viaRemember();


Route::group(['prefix' => LaravelLocalization::setLocale()], function(){
    Route::group(['prefix'=>'admin'],function(){
        Route::get('/login', [AuthAdminController::class, 'Adminlogin'])->name('login');
        Route::post('/loginCheck', [AuthAdminController::class, 'AdminLoginCheck'])->name('AdminLoginCheck');
        Route::post('/logout', [AuthAdminController::class, 'AdminLogout'])->name('logout');
    });
});


Route::get('/',
    [ShopPageController::class, 'Shop_HomePage'])->name('Shop_HomePage');

Route::get(__('routes.ShopMainCategory'),
    [ShopPageController::class, 'MainCategory'])->name('Shop_MainCategory');

Route::get(__('routes.ShopCategoryView'),
    [ShopPageController::class, 'ShopCategoryView'])->name('Shop_CategoryView');

Route::get(__('routes.ShopProductView'),
    [ShopPageController::class, 'ShopProductView'])->name('Shop_ProductView');

Route::get(__('routes.Recently'),
    [ShopPageController::class, 'Recently'])->name('Shop_Recently');

Route::get(__('routes.WeekOffers'),
    [ShopPageController::class, 'WeekOffers'])->name('Shop_WeekOffers');


Route::get(LaravelLocalization::transRoute('routes.ContactUs'),
    [ShopPageController::class, 'ContactUs'])->name('Page_ContactUs');

Route::post('ContactSend',
    [ShopPageController::class, 'ContactSend'])->name('Page_ContactSend');

Route::get('/thanks',
    [ShopPageController::class, 'ContactUsThanks'])->name('Page_ContactUsThanks');



Route::get('/CartView',
    [ShoppingCartController::class, 'CartView'])->name('Shop_CartView');

Route::get('/CartEmpty',
    [ShoppingCartController::class, 'CartEmpty'])->name('Shop_CartEmpty');
