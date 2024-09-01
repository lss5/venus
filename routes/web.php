<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\LeadController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\QrcodeController;

require __DIR__.'/auth.php';
require __DIR__.'/administrator.php';

Route::name('pages.')->group(function(){
    Route::get('/', [PageController::class, 'index'])->name('index');
    Route::get('/guarantee', [PageController::class, 'guarantee'])->name('guarantee');
    Route::get('/delivery', [PageController::class, 'delivery'])->name('delivery');
    Route::get('/cooperation', [PageController::class, 'cooperation'])->name('cooperation');
    Route::get('/partners', [PageController::class, 'partners'])->name('partners');
    Route::get('/politics', [PageController::class, 'politics'])->name('politics');
});

Route::post('/lead', [LeadController::class, 'store'])->name('lead.store');

Route::prefix('product')->name('product.')->group(function(){
    Route::get('/', [ProductController::class, 'index'])->name('index');
    // Route::get('/{product}', [ProductController::class, 'show'])->name('show');

    Route::get('/qrcode', [QrcodeController::class, 'index'])->name('qrcode.index');
    Route::get('/qrcode/registration/{qrcode}', [QrcodeController::class, 'create'])->name('qrcode.create');
    Route::post('/qrcode', [QrcodeController::class, 'store'])->name('qrcode.store');
    Route::get('/qrcode/{qrcode}', [QrcodeController::class, 'show'])->name('qrcode.show')
        ->missing(function (Request $request) {
            return Redirect::route('product.qrcode.index');
        });
});
