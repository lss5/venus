<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\ModelTypeController;
use App\Http\Controllers\QrcodeController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\Administrator\CategoryController;
use App\Http\Controllers\ProductController;

Route::prefix('admin')->name('admin.')->middleware('auth','verified')->group(function(){
    Route::get('/', [AdministratorController::class, 'index'])->name('index');
});

Route::prefix('modeltype')->name('modeltype.')->middleware('auth','verified')->group(function(){
    Route::get('/', [ModelTypeController::class, 'index'])->name('index');
    Route::get('/create', [ModelTypeController::class, 'create'])->name('create');
    Route::get('/{modeltype}', [ModelTypeController::class, 'show'])->name('show');
    Route::post('/', [ModelTypeController::class, 'store'])->name('store');
    Route::get('/{modeltype}/edit', [ModelTypeController::class, 'edit'])->name('edit');
    Route::put('/{modeltype}', [ModelTypeController::class, 'update'])->name('update');
    Route::delete('/{modeltype}', [ModelTypeController::class, 'destroy'])->name('destroy');
});

Route::prefix('qrcode')->name('qrcode.')->middleware('auth','verified')->group(function(){
    Route::get('/', [QrcodeController::class, 'index'])->name('index');
    Route::get('/create', [QrcodeController::class, 'create'])->name('create');
    Route::get('/{qrcode}', [QrcodeController::class, 'show'])->name('show');
    Route::post('/', [QrcodeController::class, 'store'])->name('store');
    Route::get('/{qrcode}/edit', [QrcodeController::class, 'edit'])->name('edit');
    Route::put('/{qrcode}', [QrcodeController::class, 'update'])->name('update');
    Route::delete('/{qrcode}', [QrcodeController::class, 'destroy'])->name('destroy');
});

Route::prefix('lead')->name('lead.')->middleware('auth','verified')->group(function(){
    Route::get('/', [LeadController::class, 'index'])->name('index');
    Route::get('/create', [LeadController::class, 'create'])->name('create');
    Route::get('/{lead}', [LeadController::class, 'show'])->name('show');
    Route::get('/{lead}/edit', [LeadController::class, 'edit'])->name('edit');
    Route::put('/{lead}', [LeadController::class, 'update'])->name('update');
    Route::delete('/{lead}', [LeadController::class, 'destroy'])->name('destroy');
});

Route::prefix('administrator/category')->name('admin.category.')->middleware('auth','verified')->group(function(){
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('/create', [CategoryController::class, 'create'])->name('create');
    Route::post('/', [CategoryController::class, 'store'])->name('store');
    Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('edit');
    Route::put('/{category}', [CategoryController::class, 'update'])->name('update');
    Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('destroy');
});
