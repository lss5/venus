<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Qrcode;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Validation\Rules;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class QrcodeController extends Controller
{
    public function index(): View
    {
        return view('qrcodes.index');
    }

    public function show(Qrcode $qrcode): View
    {
        return view('qrcodes.show', [
            'qrcode' => $qrcode,
        ]);
    }

    public function create(Qrcode $qrcode): View
    {
        return view('qrcodes.create', ['qrcode' => $qrcode]);
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', 'min:6', 'max:20'],
            'qrcode' => ['required', 'exists:qrcodes,id'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $qrcode = Qrcode::find($request->qrcode);
        $user->qrcodes()->attach($qrcode);

        Auth::login($user);

        return Redirect::route('product.qrcode.show', $qrcode);
    }
}
