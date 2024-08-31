<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Category;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index(): View
    {
        return view('admin.categories.index', ['categories' => Category::all()]);
    }

    public function create(): View
    {
        return view('admin.categories.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable|max:65535',
        ]);
    
        Category::create($validated);
    
        return Redirect::route('admin.category.index');
    }

    public function edit(Category $category): View
    {
        return view('admin.categories.edit', ['category' => $category]);
    }

    public function update(Request $request, Category $category): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable|max:65535',
        ]);
    
        $category->update($validated);
    
        return Redirect::route('admin.category.index');
    }

    public function destroy(Category $category): RedirectResponse
    {
        $category->delete();

        return Redirect::route('admin.category.index');
    }
}
