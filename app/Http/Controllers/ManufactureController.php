<?php

namespace App\Http\Controllers;

use App\Models\Manufacture;
use App\Models\ModelType;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ManufactureController extends Controller
{
    public function index()
    {
        return view('admin.manufacturers.index', [
            'manufacturers' => Manufacture::all(),
        ]);
    }

    public function create()
    {
        return view('admin.manufacturers.create', [
            'models' => ModelType::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'model' => 'required|integer|exists:model_types,id',
            'serial_number' => 'required|integer',
            'count' => 'required|integer',
            'description' => 'nullable|integer',
        ]);

        for ($i = $request->serial_number; $i < $request->count+$request->serial_number; $i++) { 
            Manufacture::create([
                'serial_number' => $i,
                'modeltype_id' => $request->model,
                'description' => $request->description,
            ]);
        }
    
    
        return redirect()->route('manufacture.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        return view('admin.manufacturers.edit', [
            'item' => Manufacture::find($id),
            'models' => ModelType::all(),
        ]);
    }

    public function update(Request $request, Manufacture $manufacture): RedirectResponse
    {

        $validated = $request->validate([
            'model' => 'required|integer|exists:model_types,id',
            'serial_number' => 'required|integer',
            'description' => 'nullable|integer',
        ]);

        $manufacture->update([
            'serial_number' => $request->serial_number,
            'modeltype_id' => $request->model,
            'description' => $request->description,
        ]);
    
        return to_route('manufacture.index');
    }

    public function destroy(Manufacture $manufacture): RedirectResponse
    {
        $manufacture->delete();
        
        return redirect()->route('manufacture.index');
    }
}
