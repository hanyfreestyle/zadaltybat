<?php
use App\Helpers\AdminHelper;
use App\Http\Controllers\admin\shop\CustomerController;
use App\Http\Controllers\admin\shop\OrderController;
use App\Http\Controllers\admin\ShopCategoryController;





Route::get('/Customer',[CustomerController::class,'index'])->name('ShopCustomer.Customer.index');
Route::get('/Customer/create',[CustomerController::class,'create'])->name('ShopCustomer.Customer.create');
Route::get('/Customer/edit/{id}',[CustomerController::class,'edit'])->name('ShopCustomer.Customer.edit');
Route::get('/Customer/destroy/{id}',[CustomerController::class,'destroy'])->name('ShopCustomer.Customer.destroy');
Route::post('/Customer/update/{id}',[CustomerController::class,'update'])->name('ShopCustomer.Customer.update');
Route::post('/Customer/store',[CustomerController::class,'store'])->name('ShopCustomer.Customer.store');
Route::get('/Customer/Password/{id}',[CustomerController::class,'Password'])->name('ShopCustomer.Customer.Password');
Route::post('/Customer/PassUpdate/{id}',[CustomerController::class,'Password_Update'])->name('ShopCustomer.Customer.Password_Update');
Route::get('/Customer/SoftDelete/',[CustomerController::class,'SoftDeletes'])->name('ShopCustomer.Customer.SoftDelete');
Route::get('/Customer/restore/{id}',[CustomerController::class,'restored'])->name('ShopCustomer.Customer.restore');
Route::get('/Customer/force/{id}',[CustomerController::class,'ForceDeletes'])->name('ShopCustomer.Customer.force');
Route::get('/Customer/Config',[CustomerController::class,'config'])->name('ShopCustomer.Customer.Config');
Route::get('/Customer/Address/{id}',[CustomerController::class,'AddressList'])->name('ShopCustomer.Customer.Address');
Route::post('/Customer/AddressStore/{id}',[CustomerController::class,'AddressStore'])->name('ShopCustomer.Customer.AddressStore');
Route::get('/Customer/AddressEdit/{id}',[CustomerController::class,'AddressEdit'])->name('ShopCustomer.Customer.AddressEdit');
Route::post('/Customer/AddressUpdate/{id}',[CustomerController::class,'AddressUpdate'])->name('ShopCustomer.Customer.AddressUpdate');
Route::get('/Customer/AddressDelete/{id}',[CustomerController::class,'AddressDelete'])->name('ShopCustomer.Customer.AddressDelete');
Route::get('/Customer/AddressDelete/{id}',[CustomerController::class,'AddressDelete'])->name('ShopCustomer.Customer.AddressDelete');
Route::get('/Customer/ExportLogin',[CustomerController::class,'ExportLogin'])->name('ShopCustomer.Export.ExportLogin');




Route::get('/Orders',[OrderController::class,'index'])->name('ShopOrders.Orders.index');
Route::get('/Orders/New',[OrderController::class,'index'])->name('ShopOrders.New.index');
Route::get('/Orders/Pending',[OrderController::class,'index'])->name('ShopOrders.Pending.index');
Route::get('/Orders/Recipient',[OrderController::class,'index'])->name('ShopOrders.Recipient.index');
Route::get('/Orders/Rejected',[OrderController::class,'index'])->name('ShopOrders.Rejected.index');
Route::get('/Orders/Canceled',[OrderController::class,'index'])->name('ShopOrders.Canceled.index');
Route::get('/Orders/view/{uuid}',[OrderController::class,'OrderView'])->name('ShopOrders.OrderView');
Route::get('/Orders/Config',[OrderController::class,'config'])->name('ShopOrders.OrderConfig.Config');

Route::post('/Orders/ConfirmNew/{uuid}',[OrderController::class,'ConfirmNew'])->name('ShopOrders.ConfirmNew');
Route::post('/Orders/ConfirmPending/{uuid}',[OrderController::class,'ConfirmPending'])->name('ShopOrders.ConfirmPending');

Route::get('/Orders/create',[CustomerController::class,'create'])->name('ShopOrders.Orders.create');
