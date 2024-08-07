<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function guarantee()
    {
        return view('pages.guarantee');
    }

    public function delivery()
    {
        return view('pages.delivery');
    }

    public function cooperation()
    {
        return view('pages.cooperation');
    }

    public function partners()
    {
        return view('pages.partners');
    }

    public function politics()
    {
        return view('pages.politics');
    }
}
