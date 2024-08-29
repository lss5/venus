<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ModelType;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules\Exists;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.products.index', ['products' => Product::all()]);
    }

    public function create()
    {
        return view('admin.products.create', [
            'categories' => Category::all(),
            'models' => ModelType::all(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable|max:65535',
            'price' => 'required',
            'characteristics' => 'nullable|json',
            'model' => 'required|integer|exists:model_types,id',
            'category' => 'required|integer|exists:categories,id',
            'image' => 'required|file|image|max:16384|dimensions:min_width=500,min_height=300',
            'image_sort' => 'required',
        ]);
    
        $product = Product::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'characteristics' => $request->characteristics,
            'modeltype_id' => $request->model,
            'category_id' => $request->category,
        ]);

        $product->images()->create([
            'link' => $request->file('image')->store('products', 'public'),
            'sort' => $request->image_sort,
        ]);
    
        return Redirect::route('admin.product.index');
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', [
            'product' => $product,
            'categories' => Category::all(),
            'models' => ModelType::all(),
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable|max:65535',
            'price' => 'required',
            'characteristics' => 'nullable|json',
            'model' => 'required|integer|exists:model_types,id',
            'category' => 'required|integer|exists:categories,id',
        ]);
        // TODO: Добавить проверку наличия сортировки при загрузке фото
    
        $product->update([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'characteristics' => $request->characteristics,
            'modeltype_id' => $request->model,
            'category_id' => $request->category,
        ]);

        if ($request->file('image')) {
            $product->images()->create([
                'link' => $request->file('image')->store('products', 'public'),
                'sort' => $request->image_sort,
            ]);
        }
    
        return Redirect::route('admin.product.index');
    }

    public function destroy(Product $product): RedirectResponse
    {
        foreach ($product->images as $image) {
            $image->delete();
        }

        $product->delete();

        return Redirect::route('admin.product.index');
    }
}
