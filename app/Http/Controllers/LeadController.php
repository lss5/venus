<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Notifications\LeadReceived;

class LeadController extends Controller
{
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

        $lead = Lead::create($validated);

        $lead->notify(new LeadReceived($lead));
    
        return response()->json(['message' => 'good']);

    }
}
