<?php

namespace App\Services;

use App\Models\Lead;
use Illuminate\Support\Facades\Validator;

class LeadCreateService
{
    protected Lead $lead;
    protected Validator $validator;

    public function __construct()
    {
        // 
    }

    public function leadCreate($validator)
    {
        $validated = $validator->safe()->only(['name', 'phone']);

        $lead = Lead::create($validated);

        return $lead;
    }
}
