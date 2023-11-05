<?php
use App\Helpers\AdminHelper;

use App\Http\Controllers\admin\PageController;
use App\Http\Controllers\admin\ShopCategoryController;
use App\Http\Controllers\admin\ShopProductController;
use App\Http\Controllers\AdminMainController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'Dashboard'])->name('admin.Dashboard');

Route::get('/Category',[ShopCategoryController::class,'index'])->name('Shop.shopCategory.index');


Route::get('/Category/create',[ShopCategoryController::class,'create'])->name('Shop.shopCategory.create');
Route::get('/Category/Main',[ShopCategoryController::class,'index'])->name('Shop.shopCategory.index_Main');
Route::get('/Category/SubCategory/{id}',[ShopCategoryController::class,'index'])->name('Shop.shopCategory.SubCategory');
Route::get('/Category/edit/{id}',[ShopCategoryController::class,'edit'])->name('Shop.shopCategory.edit');
Route::get('/Category/destroy/{id}',[ShopCategoryController::class,'destroy'])->name('Shop.shopCategory.destroy');
Route::post('/Category/update/{id}',[ShopCategoryController::class,'storeUpdate'])->name('Shop.shopCategory.update');
Route::get('/Category/emptyPhoto/{id}', [ShopCategoryController::class,'emptyPhoto'])->name('Shop.shopCategory.emptyPhoto');
Route::get('/Category/emptyIcon/{id}', [ShopCategoryController::class,'emptyIcon'])->name('Shop.shopCategory.emptyIcon');
Route::get('/Category/Config',[ShopCategoryController::class,'config'])->name('Shop.shopCategoryConfig.Config');
Route::get('/Category/CatSort/{id}',[ShopCategoryController::class,'CategorySort'])->name('Shop.shopCategory.CatSort');
Route::post('/Category/SaveSort',[ShopCategoryController::class,'CategorySaveSort'])->name('Shop.shopCategory.CategorySaveSort');
Route::get('/Category/SoftDelete/',[ShopCategoryController::class,'SoftDeletes'])->name('Shop.shopCategory.SoftDelete');
Route::get('/Category/restore/{id}',[ShopCategoryController::class,'restored'])->name('Shop.shopCategory.restore');
Route::get('/Category/force/{id}',[ShopCategoryController::class,'ForceDeletes'])->name('Shop.shopCategory.force');



Route::get('/Product',[ShopProductController::class,'index'])->name('Shop.ShopProduct.index');
Route::get('/Product/Category/{Categoryid}',[ShopProductController::class,'ListCategory'])->name('Shop.ShopProduct.ListCategory');
Route::get('/Product/create',[ShopProductController::class,'create'])->name('Shop.ShopProduct.create');
Route::get('/Product/edit/{id}',[ShopProductController::class,'edit'])->name('Shop.ShopProduct.edit');
Route::post('/Product/update/{id}',[ShopProductController::class,'storeUpdate'])->name('Shop.ShopProduct.update');
Route::get('/Product/photos/{id}',[ShopProductController::class,'ListMorePhoto'])->name('Shop.ShopProduct.More_Photos');
Route::get('/Product/destroy/{id}',[ShopProductController::class,'destroy'])->name('Shop.ShopProduct.destroy');
Route::get('/Product/emptyPhoto/{id}', [ShopProductController::class,'emptyPhoto'])->name('Shop.ShopProduct.emptyPhoto');
Route::post('/Product/AddMore',[ShopProductController::class,'AddMorePhotos'])->name('Shop.ShopProduct.More_PhotosAdd');
Route::post('/Product/saveSort', [ShopProductController::class,'sortPhotoSave'])->name('Shop.ShopProduct.sortPhotoSave');
Route::get('/Product/PhotoDel/{id}',[ShopProductController::class,'More_PhotosDestroy'])->name('Shop.ShopProduct.More_PhotosDestroy');
Route::get('/Product/SoftDelete/',[ShopProductController::class,'SoftDeletes'])->name('Shop.ShopProduct.SoftDelete');
Route::get('/Product/restore/{id}',[ShopProductController::class,'restored'])->name('Shop.ShopProduct.restore');
Route::get('/Product/force/{id}',[ShopProductController::class,'ForceDeletes'])->name('Shop.ShopProduct.force');



Route::get('/Pages', [PageController::class,'index'])->name('Pages.pageList.index');
Route::get('/Pages/create', [PageController::class,'create'])->name('Pages.pageList.create');
Route::get('/Pages/edit/{id}', [PageController::class,'edit'])->name('Pages.pageList.edit');
Route::post('/Pages/Update/{id}', [PageController::class,'storeUpdate'])->name('Pages.pageList.update');
Route::get('/Pages/delete/{id}', [PageController::class,'delete'])->name('Pages.pageList.destroy');
Route::get('/Pages/config', [PageController::class,'config'])->name('Pages.pageList.config');
Route::get('/Pages/SoftDelete/',[PageController::class,'SoftDeletes'])->name('Pages.pageList.SoftDelete');
Route::get('/Pages/restore/{id}',[PageController::class,'restored'])->name('Pages.pageList.restore');
Route::get('/Pages/force/{id}',[PageController::class,'ForceDeletes'])->name('Pages.pageList.force');
Route::get('/Pages/emptyPhoto/{id}', [PageController::class,'emptyPhoto'])->name('Pages.pageList.emptyPhoto');
Route::get('/Pages/Sort',[PageController::class,'Sort'])->name('Pages.pageList.Sort');
Route::post('/Pages/SaveSort', [PageController::class,'SaveSort'])->name('Pages.pageList.SaveSort');



