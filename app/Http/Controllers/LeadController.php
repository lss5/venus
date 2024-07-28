<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LeadController extends Controller
{
    public function index()
    {
        return view('admin.leads.index', [
            'leads' => Lead::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'name' => 'required|max:20',
                'phone' => 'required|min:6|max:64',
                'politics' => 'required',
            ],
            [
                'required' => 'Поле обязательно для заполнения',
                'max' => 'Превышено допустимое количество символов',
                'phone.min' => 'Неверное количество символов номера телефона',
                'politics.required' => 'Необходимо согласие с политикой конфиденциальности'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
 
        $validated = $validator->safe()->only(['name', 'phone']);

        Lead::create($validated);

        return response()->json(['message' => 'good']);

    }

    /**
     * Display the specified resource.
     */
    public function show(Lead $lead)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lead $lead)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lead $lead)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lead $lead)
    {
        //
    }
}
