<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManufactureController extends Controller
{
    public function index()
    {
        return view('admin.manufacturers.index');
    }

    public function create()
    {
        return view('admin.manufacturers.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
