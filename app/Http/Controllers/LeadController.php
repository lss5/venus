<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Notifications\LeadReceived;
use App\Services\LeadCreateService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class LeadController extends Controller
{
    public $createService;

    public function __construct(LeadCreateService $LeadCreateService)
    {
        $this->createService = $LeadCreateService;
    }

    public function index()
    {
        return view('admin.leads.index', [
            'leads' => Lead::all(),
        ]);
    }

    public function create()
    {
        return view('admin.leads.create');
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

        $lead = $this->createService->leadCreate($validator);

        $lead->notify(new LeadReceived($lead));
    
        return response()->json(['message' => 'good']);

    }

    public function show(Lead $lead)
    {
        return view('admin.leads.show', ['lead' => $lead]);
    }

    public function edit(Lead $lead)
    {
        return view('admin.leads.edit', ['lead' => $lead]);
    }

    public function update(Request $request, Lead $lead)
    {
        $validated = $request->validate([
            'name' => 'required|max:20',
            'phone' => 'required|min:6|max:64',
        ]);

        $lead->update($validated);

        return Redirect::route('lead.show', $lead->id);
    }

    public function destroy(Lead $lead)
    {
        $lead->delete();

        return Redirect::route('lead.index');
    }
}
