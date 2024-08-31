<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Models\Lead;
use Illuminate\View\View;

class LeadController extends Controller
{
    public function index(): View
    {
        return view('admin.leads.index', [
            'leads' => Lead::all(),
        ]);
    }

    public function create(): View
    {
        return view('admin.leads.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|max:20',
            'phone' => 'required|min:6|max:64',
        ]);

        Lead::create($validated);

        return Redirect::route('admin.lead.index');

    }

    public function show(Lead $lead): View
    {
        return view('admin.leads.show', ['lead' => $lead]);
    }

    public function edit(Lead $lead): View
    {
        return view('admin.leads.edit', ['lead' => $lead]);
    }

    public function update(Request $request, Lead $lead): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|max:20',
            'phone' => 'required|min:6|max:64',
        ]);

        $lead->update($validated);

        return Redirect::route('admin.lead.show', $lead->id);
    }

    public function destroy(Lead $lead): RedirectResponse
    {
        $lead->delete();

        return Redirect::route('admin.lead.index');
    }
}
