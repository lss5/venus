<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\ModelType;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ModelTypeController extends Controller
{
    public function index(): View
    {
        return view('admin.modeltypes.index', [
            'modeltypes' => ModelType::all(),
        ]);
    }

    public function create(): View
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
    
        return Redirect::route('admin.modeltype.index');
    }

    public function show(ModelType $modeltype): View
    {
        return view('admin.modeltypes.show', ['modeltype' => $modeltype]);
    }

    public function edit(ModelType $modeltype): View
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
    
        return Redirect::route('admin.modeltype.index');
    }

    public function destroy(ModelType $modeltype): RedirectResponse
    {
        $modeltype->delete();

        return Redirect::route('admin.modeltype.index');
    }
}
