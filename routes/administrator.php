<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Administrator\AdministratorController;
use App\Http\Controllers\Administrator\ModelTypeController as AdministratorModelTypeController;
use App\Http\Controllers\Administrator\QrcodeController as AdministratorQrcodeController;
use App\Http\Controllers\Administrator\LeadController as AdministratorLeadController;
use App\Http\Controllers\Administrator\CategoryController as AdministratorCategoryController;
use App\Http\Controllers\Administrator\ProductController as AdministratorProductController;
use App\Http\Controllers\Administrator\ImageController as AdministratorImageController;

Route::prefix('administrator')->name('admin.')->middleware('auth','can:admin')->group(function(){
    Route::get('/', [AdministratorController::class, 'index'])->name('index');
});

Route::prefix('administrator/modeltype')->name('admin.modeltype.')->middleware('auth','can:admin')->group(function(){
    Route::get('/', [AdministratorModelTypeController::class, 'index'])->name('index');
    Route::get('/create', [AdministratorModelTypeController::class, 'create'])->name('create');
    Route::get('/{modeltype}', [AdministratorModelTypeController::class, 'show'])->name('show');
    Route::post('/', [AdministratorModelTypeController::class, 'store'])->name('store');
    Route::get('/{modeltype}/edit', [AdministratorModelTypeController::class, 'edit'])->name('edit');
    Route::put('/{modeltype}', [AdministratorModelTypeController::class, 'update'])->name('update');
    Route::delete('/{modeltype}', [AdministratorModelTypeController::class, 'destroy'])->name('destroy');
});

Route::prefix('administrator/qrcode')->name('admin.qrcode.')->middleware('auth','can:admin')->group(function(){
    Route::get('/', [AdministratorQrcodeController::class, 'index'])->name('index');
    Route::get('/create', [AdministratorQrcodeController::class, 'create'])->name('create');
    Route::get('/{qrcode}', [AdministratorQrcodeController::class, 'show'])->name('show');
    Route::post('/', [AdministratorQrcodeController::class, 'store'])->name('store');
    Route::get('/{qrcode}/edit', [AdministratorQrcodeController::class, 'edit'])->name('edit');
    Route::put('/{qrcode}', [AdministratorQrcodeController::class, 'update'])->name('update');
    Route::delete('/{qrcode}', [AdministratorQrcodeController::class, 'destroy'])->name('destroy');
});

Route::prefix('administrator/lead')->name('admin.lead.')->middleware('auth','can:admin')->group(function(){
    Route::get('/', [AdministratorLeadController::class, 'index'])->name('index');
    Route::get('/create', [AdministratorLeadController::class, 'create'])->name('create');
    Route::post('/', [AdministratorLeadController::class, 'store'])->name('store');
    Route::get('/{lead}', [AdministratorLeadController::class, 'show'])->name('show');
    Route::get('/{lead}/edit', [AdministratorLeadController::class, 'edit'])->name('edit');
    Route::put('/{lead}', [AdministratorLeadController::class, 'update'])->name('update');
    Route::delete('/{lead}', [AdministratorLeadController::class, 'destroy'])->name('destroy');
});

Route::prefix('administrator/category')->name('admin.category.')->middleware('auth','can:admin')->group(function(){
    Route::get('/', [AdministratorCategoryController::class, 'index'])->name('index');
    Route::get('/create', [AdministratorCategoryController::class, 'create'])->name('create');
    Route::post('/', [AdministratorCategoryController::class, 'store'])->name('store');
    Route::get('/{category}/edit', [AdministratorCategoryController::class, 'edit'])->name('edit');
    Route::put('/{category}', [AdministratorCategoryController::class, 'update'])->name('update');
    Route::delete('/{category}', [AdministratorCategoryController::class, 'destroy'])->name('destroy');
});

Route::prefix('administrator/product')->name('admin.product.')->middleware('auth','can:admin')->group(function(){
    Route::get('/', [AdministratorProductController::class, 'index'])->name('index');
    Route::get('/create', [AdministratorProductController::class, 'create'])->name('create');
    Route::post('/', [AdministratorProductController::class, 'store'])->name('store');
    Route::get('/{product}/edit', [AdministratorProductController::class, 'edit'])->name('edit');
    Route::put('/{product}', [AdministratorProductController::class, 'update'])->name('update');
    Route::delete('/{product}', [AdministratorProductController::class, 'destroy'])->name('destroy');
});

Route::prefix('administrator/image')->name('admin.image.')->middleware('auth','can:admin')->group(function(){
    Route::delete('/{image}', [AdministratorImageController::class, 'destroy'])->name('destroy');
});
