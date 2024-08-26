<?php

namespace App\Http\Controllers;

use App\Models\ModelType;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class ModelTypeController extends Controller
{
    public function index()
    {
        return view('admin.modeltypes.index', [
            'modeltypes' => ModelType::all(),
        ]);
    }

    public function create()
    {
        return view('admin.modeltypes.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|max:100',
            'article' => 'required|max:100',
            'version' => 'required|integer',
            'description' => 'nullable|max:65535',
        ]);
    
        ModelType::create($validated);
    
        return Redirect::route('modeltype.index');
    }

    public function show(ModelType $modeltype)
    {
        return view('admin.modeltypes.show', ['modeltype' => $modeltype]);
    }

    public function edit(ModelType $modeltype)
    {
        return view('admin.modeltypes.edit', ['modeltype' => $modeltype]);
    }

    public function update(Request $request, ModelType $modeltype): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|max:100',
            'article' => 'required|max:100',
            'version' => 'required|integer',
            'description' => 'nullable|max:65535',
        ]);

        $modeltype->update($validated);
    
        return Redirect::route('modeltype.index');
    }

    public function destroy(ModelType $modeltype): RedirectResponse
    {
        $modeltype->delete();

        return Redirect::route('modeltype.index');
    }
}
