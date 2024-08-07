<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ModelTypeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\QrcodeController;


// Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->middleware(['auth', 'verified'])->name('dashboard');
    
    require __DIR__.'/auth.php';
    
Route::name('pages.')->group(function(){
    Route::get('/', [PageController::class, 'index'])->name('index');
    Route::get('/guarantee', [PageController::class, 'guarantee'])->name('guarantee');
    Route::get('/delivery', [PageController::class, 'delivery'])->name('delivery');
    Route::get('/cooperation', [PageController::class, 'cooperation'])->name('cooperation');
    Route::get('/partners', [PageController::class, 'partners'])->name('partners');
    Route::get('/politics', [PageController::class, 'politics'])->name('politics');
});

// Leads
Route::post('/lead', [LeadController::class, 'store'])->name('lead.store');

// Products for All
Route::prefix('product')->name('product.')->group(function(){
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/{product}', [ProductController::class, 'show'])->name('show');
    Route::get('/qrcode/{qrcode}', [ProductController::class, 'qrcode'])->name('qrcode')
        ->missing(function (Request $request) {
            return Redirect::route('product.index');
        });
});

// Administrator
Route::prefix('admin')->name('admin.')->middleware('auth','verified')->group(function(){
    Route::get('/', [AdministratorController::class, 'index'])->name('index');
});

// Leads
Route::prefix('lead')->name('lead.')->middleware('auth','verified')->group(function(){
    Route::get('/', [LeadController::class, 'index'])->name('index');
    Route::get('/{lead}', [LeadController::class, 'show'])->name('show');
});

// products
Route::prefix('product')->name('product.')->middleware('auth','verified')->group(function(){
    Route::get('/create', [ProductController::class, 'create'])->name('create');
    Route::post('/', [ProductController::class, 'store'])->name('store');
    Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('edit');
    Route::put('/{product}', [ProductController::class, 'update'])->name('update');
    Route::delete('/{product}', [ProductController::class, 'destroy'])->name('destroy');
});

// QRcodes
Route::prefix('qrcode')->name('qrcode.')->middleware('auth','verified')->group(function(){
    Route::get('/', [QrcodeController::class, 'index'])->name('index');
    Route::get('/create', [QrcodeController::class, 'create'])->name('create');
    Route::get('/{qrcode}', [QrcodeController::class, 'show'])->name('show');
    Route::post('/', [QrcodeController::class, 'store'])->name('store');
    Route::get('/{qrcode}/edit', [QrcodeController::class, 'edit'])->name('edit');
    Route::put('/{qrcode}', [QrcodeController::class, 'update'])->name('update');
    Route::delete('/{qrcode}', [QrcodeController::class, 'destroy'])->name('destroy');
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
