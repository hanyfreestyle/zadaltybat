<?php

use App\Http\Controllers\admin\config\DefPhotoController;
use App\Http\Controllers\admin\config\LangFileController;
use App\Http\Controllers\admin\config\LangFileWebController;
use App\Http\Controllers\admin\config\MetaTagController;
use App\Http\Controllers\admin\config\SettingsController;
use App\Http\Controllers\admin\config\UploadFilterController;
use App\Http\Controllers\admin\config\UploadFilterSizeController;
use App\Http\Controllers\admin\config\WebPrivacyController;
use Illuminate\Support\Facades\Route;

Route::get('/clearCash/',[SettingsController::class,'clearCash'])->name('cash.index');

Route::get('/adminlang',[LangFileController::class,'index'])->name('adminlang.index');
Route::post('/adminlang/updateFile',[LangFileController::class,'updateFile'])->name('adminlang.updateFile');

Route::get('/weblang',[LangFileWebController::class,'index'])->name('weblang.index');
Route::post('/weblang/updateFile',[LangFileWebController::class,'updateFile'])->name('weblang.updateFile');



Route::get('/config/webConfig', [SettingsController::class, 'webConfigEdit'])->name('config.web.index');
//Route::get('/config/model', [SettingsController::class, 'webConfigModel'])->name('config.model.index');
Route::post('/config/model/update', [SettingsController::class, 'webConfigModelUpdate'])->name('config.model.update');

Route::post('/config/webConfigUpdate', [SettingsController::class, 'webConfigUpdate'])->name('admin.webConfigUpdate');
Route::get('/config/show', [SettingsController::class,'defIconShow'])->name('config.defIcon.show');

Route::get('/webPrivacy', [WebPrivacyController::class,'index'])->name('config.webPrivacy.index');
Route::get('/webPrivacy/create', [WebPrivacyController::class,'create'])->name('config.webPrivacy.create');
Route::get('/webPrivacy/edit/{id}', [WebPrivacyController::class,'edit'])->name('config.webPrivacy.edit');
Route::post('/webPrivacy/Update/{id}', [WebPrivacyController::class,'storeUpdate'])->name('config.webPrivacy.update');
Route::get('/webPrivacy/delete/{id}', [WebPrivacyController::class,'delete'])->name('config.webPrivacy.destroy');
Route::get('/webPrivacy/Sort',[WebPrivacyController::class,'Sort'])->name('config.webPrivacy.Sort');
Route::post('/webPrivacy/SaveSort', [WebPrivacyController::class,'SaveSort'])->name('config.webPrivacy.SaveSort');


Route::get('/defPhotos', [DefPhotoController::class,'index'])->name('config.defPhoto.index');
Route::get('/sortDefPhoto/ListAll', [DefPhotoController::class,'sortDefPhotoList'])->name('config.defPhoto.sortDefPhotoList');
Route::get('/defPhotos/create', [DefPhotoController::class,'create'])->name('config.defPhoto.create');
Route::get('/defPhotos/edit/{id}', [DefPhotoController::class,'edit'])->name('config.defPhoto.edit');
Route::delete('/defPhotos/delete/{id}', [DefPhotoController::class,'destroy'])->name('config.defPhoto.destroy');
Route::post('/defPhotos/store/{id}', [DefPhotoController::class,'storeUpdate'])->name('config.defPhoto.storeUpdate');
Route::post('/sortDefPhoto/saveSort', [DefPhotoController::class,'sortDefPhotoSave'])->name('config.defPhoto.sortDefPhoto');

Route::get('/upFilter', [UploadFilterController::class,'index'])->name('config.upFilter.index');
Route::get('/upFilter/create', [UploadFilterController::class,'create'])->name('config.upFilter.create');
Route::get('/upFilter/edit/{id}', [UploadFilterController::class,'edit'])->name('config.upFilter.edit');
Route::get('/upFilter/delete/{id}', [UploadFilterController::class,'destroy'])->name('config.upFilter.destroy');
//Route::post('/upFilter/delete/{id}', [UploadFilterController::class,'destroy'])->name('config.upFilter.destroy');
Route::post('/upFilter/Update/{id}', [UploadFilterController::class,'storeUpdate'])->name('config.upFilter.update');

Route::get('/upFilterSize/create/{filterId}', [UploadFilterSizeController::class,'create'])->name('config.upFilter.size.create');
Route::get('/upFilterSize/edit/{id}', [UploadFilterSizeController::class,'edit'])->name('config.upFilter.size.edit');
Route::get('/upFilterSize/delete/{id}', [UploadFilterSizeController::class,'destroy'])->name('config.upFilter.size.destroy');
Route::post('/upFilterSize/store/{id}', [UploadFilterSizeController::class,'storeUpdate'])->name('config.upFilter.size.storeOrUpdate');
