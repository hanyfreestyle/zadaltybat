<?php
use App\Http\Controllers\customer\ProfileController;
use App\Http\Controllers\shopping\ShoppingCartController;
use App\Http\Controllers\UsersCustomersController;
use App\Http\Controllers\web\ShopPageController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'EtmanShop'], function(){

    Route::middleware(['guest:customer'])->group(function (){

        Route::get('/login/{cart?}',
            [UsersCustomersController::class, 'CustomerLogin'])->name('Customer_login');

        Route::post('/loginCheck/{cart?}',
            [UsersCustomersController::class, 'CustomerLoginCheck'])->name('Customer_loginCheck');

        Route::get('/loginqr',
            [UsersCustomersController::class, 'CustomerQrLogin'])->name('Customer_QrLogin');

        Route::post('/loginCheckQr',
            [UsersCustomersController::class, 'CustomerLoginCheckQr'])->name('CustomerLoginCheckQr');

        Route::get('/sign-up',
            [UsersCustomersController::class, 'CustomerSignUp'])->name('Customer_Register');


        Route::post('/create',
            [UsersCustomersController::class,"CustomerCreate"])->name('Customer_Create');
    });


    Route::middleware('auth:customer')->group(function (){

        Route::post('/logout',
            [UsersCustomersController::class, 'CustomerLogout'])->name('Customer_logout');

        Route::get('/profile',
            [ProfileController::class, 'ProfileView'])->name('Customer_Profile');

        Route::post('/profile/update',
            [ProfileController::class, 'ProfileUpdate'])->name('Customer_Profile_Update');

        Route::get('/profile/address',
            [ProfileController::class, 'Profile_Address_List'])->name('Profile_Address');

        Route::get('/profile/address/add',
            [ProfileController::class, 'Profile_Address_Add'])->name('Profile_Address_Add');

        Route::post('/profile/address/save',
            [ProfileController::class, 'Profile_Address_Save'])->name('Profile_Address_Save');

        Route::get('/profile/address/edit/{uuid:uuid}',
            [ProfileController::class, 'Profile_Address_Edit'])->name('Profile_Address_Edit');

        Route::post('/profile/address/update/{uuid}',
            [ProfileController::class, 'Profile_Address_Update'])->name('Profile_Address_Update');

        Route::post('/profile/address/updatedef/{uuid}',
            [ProfileController::class, 'Profile_Address_UpdateDefault'])->name('Profile_Address_UpdateDefault');

        Route::get('/profile/password',
            [ProfileController::class, 'Profile_ChangePassword'])->name('Profile_ChangePassword');

        Route::post('/profile/password/update',
            [ProfileController::class, 'Profile_ChangePasswordUpdate'])->name('Profile_ChangePasswordUpdate');

        Route::get('/profile/order',
            [ProfileController::class, 'Profile_OrdersList'])->name('Profile_OrdersList');

        Route::get('/profile/orderView/{uuid:uuid}',
            [ProfileController::class, 'Profile_OrderView'])->name('Profile_OrderView');


        Route::get('/CartConfirm',
            [ShoppingCartController::class, 'CartConfirm'])->name('Shop_CartConfirm');

        Route::post('/PrintAddressAjax',
            [ShoppingCartController::class, 'PrintAddressAjax'])->name('Shop_PrintAddressAjax');


        Route::post('/CartOrderSave',
            [ShoppingCartController::class, 'CartOrderSave'])->name('Shop_CartOrderSave');

        Route::get('/CartOrderCompleted',
            [ShoppingCartController::class, 'CartOrderCompleted'])->name('Shop_CartOrderCompleted');

    });


});



