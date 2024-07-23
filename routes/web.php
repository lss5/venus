<?php

use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ManufactureController;
use App\Http\Controllers\ModelTypeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('main');
})->name('main');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

// Products for All
Route::prefix('product')->name('product.')->group(function(){
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/{product}', [ProductController::class, 'show'])->name('show');
});
Route::prefix('product')->name('product.')->middleware('auth','verified')->group(function(){
    Route::get('/create', [ProductController::class, 'create'])->name('create');
    Route::post('/', [ProductController::class, 'store'])->name('store');
    Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('edit');
    Route::put('/{product}', [ProductController::class, 'update'])->name('update');
    Route::delete('/{product}', [ProductController::class, 'destroy'])->name('destroy');
});
Route::prefix('admin')->name('admin.')->middleware('auth','verified')->group(function(){
    Route::get('/', [AdministratorController::class, 'index'])->name('index');
});

// Manufacturers
Route::prefix('manufacture')->name('manufacture.')->middleware('auth','verified')->group(function(){
    Route::get('/', [ManufactureController::class, 'index'])->name('index');
    Route::get('/create', [ManufactureController::class, 'create'])->name('create');
    Route::get('/{manufacture}', [ManufactureController::class, 'show'])->name('show');
    Route::post('/', [ManufactureController::class, 'store'])->name('store');
    Route::get('/{manufacture}/edit', [ManufactureController::class, 'edit'])->name('edit');
    Route::put('/{manufacture}', [ManufactureController::class, 'update'])->name('update');
    Route::delete('/{manufacture}', [ManufactureController::class, 'destroy'])->name('destroy');
});

// Model type
Route::prefix('modeltype')->name('modeltype.')->middleware('auth','verified')->group(function(){
    Route::get('/', [ModelTypeController::class, 'index'])->name('index');
    Route::get('/create', [ModelTypeController::class, 'create'])->name('create');
    Route::get('/{modeltype}', [ModelTypeController::class, 'show'])->name('show');
    Route::post('/', [ModelTypeController::class, 'store'])->name('store');
    Route::get('/{modeltype}/edit', [ModelTypeController::class, 'edit'])->name('edit');
    Route::put('/{modeltype}', [ModelTypeController::class, 'update'])->name('update');
    Route::delete('/{modeltype}', [ModelTypeController::class, 'destroy'])->name('destroy');
});
