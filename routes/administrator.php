<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Administrator\AdministratorController;
use App\Http\Controllers\Administrator\ModelTypeController;
use App\Http\Controllers\Administrator\QrcodeController;
use App\Http\Controllers\Administrator\LeadController;
use App\Http\Controllers\Administrator\CategoryController as AdministratorCategoryController;
use App\Http\Controllers\Administrator\ProductController as AdministratorProductController;
use App\Http\Controllers\Administrator\ImageController as AdministratorImageController;

Route::prefix('admin')->name('admin.')->middleware('auth','can:admin')->group(function(){
    Route::get('/', [AdministratorController::class, 'index'])->name('index');
});

Route::prefix('modeltype')->name('modeltype.')->middleware('auth','can:admin')->group(function(){
    Route::get('/', [ModelTypeController::class, 'index'])->name('index');
    Route::get('/create', [ModelTypeController::class, 'create'])->name('create');
    Route::get('/{modeltype}', [ModelTypeController::class, 'show'])->name('show');
    Route::post('/', [ModelTypeController::class, 'store'])->name('store');
    Route::get('/{modeltype}/edit', [ModelTypeController::class, 'edit'])->name('edit');
    Route::put('/{modeltype}', [ModelTypeController::class, 'update'])->name('update');
    Route::delete('/{modeltype}', [ModelTypeController::class, 'destroy'])->name('destroy');
});

Route::prefix('qrcode')->name('qrcode.')->middleware('auth','can:admin')->group(function(){
    Route::get('/', [QrcodeController::class, 'index'])->name('index');
    Route::get('/create', [QrcodeController::class, 'create'])->name('create');
    Route::get('/{qrcode}', [QrcodeController::class, 'show'])->name('show');
    Route::post('/', [QrcodeController::class, 'store'])->name('store');
    Route::get('/{qrcode}/edit', [QrcodeController::class, 'edit'])->name('edit');
    Route::put('/{qrcode}', [QrcodeController::class, 'update'])->name('update');
    Route::delete('/{qrcode}', [QrcodeController::class, 'destroy'])->name('destroy');
});

Route::prefix('lead')->name('lead.')->middleware('auth','can:admin')->group(function(){
    Route::get('/', [LeadController::class, 'index'])->name('index');
    Route::get('/create', [LeadController::class, 'create'])->name('create');
    Route::get('/{lead}', [LeadController::class, 'show'])->name('show');
    Route::get('/{lead}/edit', [LeadController::class, 'edit'])->name('edit');
    Route::put('/{lead}', [LeadController::class, 'update'])->name('update');
    Route::delete('/{lead}', [LeadController::class, 'destroy'])->name('destroy');
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
