<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdministratorController extends Controller
{
    public function index(): View
    {
        return view('admin.index');
    }
}
