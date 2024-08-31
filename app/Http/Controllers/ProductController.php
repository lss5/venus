<?php

namespace App\Http\Controllers;

use App\Models\Qrcode;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        return view('products.index');
    }

    public function qrcode(Qrcode $qrcode): View
    {
        return view('products.qrcode', [
            'qrcode' => $qrcode,
        ]);
    }
}
