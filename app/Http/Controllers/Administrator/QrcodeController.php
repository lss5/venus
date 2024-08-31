<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\ModelType;
use App\Models\Qrcode;
use Illuminate\View\View;
use SimpleSoftwareIO\QrCode\Facades\QrCode as QrCodeGenerator;

class QrcodeController extends Controller
{
    public function index(): View
    {
        return view('admin.qrcodes.index', [
            'qrcodes' => Qrcode::all(),
        ]);
    }

    public function create(): View
    {
        return view('admin.qrcodes.create', [
            'models' => ModelType::all(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'model' => 'required|integer|exists:model_types,id',
            'serial_number' => 'required|integer',
            'count' => 'required|integer',
        ]);

        for ($i = $request->serial_number; $i < $request->count+$request->serial_number; $i++) { 
            $qrcode = Qrcode::create([
                'serial_number' => $i,
                'modeltype_id' => $request->model,
            ]);

            Storage::put('public/qrcodes/'.$qrcode->modeltype_id .'_'. $qrcode->serial_number . '.png', QrCodeGenerator::size(256)->format('png')->generate('https://clean-spc.ru/product/qrcode/'.$qrcode->id));
        }

        return redirect()->route('qrcode.index');
    }

    public function show(Qrcode $qrcode)
    {
        // return view('');
    }

    public function edit(Qrcode $qrcode): View
    {
        return view('admin.qrcodes.edit', [
            'item' => $qrcode,
            'models' => ModelType::all(),
        ]);
    }

    public function update(Request $request, Qrcode $qrcode): RedirectResponse
    {

        $validated = $request->validate([
            'model' => 'required|integer|exists:model_types,id',
            'serial_number' => 'required|integer',
            'description' => 'nullable|max:4096',
        ]);

        $qrcode->update([
            'serial_number' => $request->serial_number,
            'modeltype_id' => $request->model,
            'description' => $request->description,
        ]);
    
        return redirect()->route('qrcode.index');
    }

    public function destroy(Qrcode $qrcode): RedirectResponse
    {
        $qrcode->delete();
        
        return redirect()->route('qrcode.index');
    }
}
