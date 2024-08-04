<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Qrcode extends Model
{
    use HasFactory;
    use HasUuids;

    protected $guarded = [];

    public function modeltype(): BelongsTo
    {
        return $this->belongsTo(ModelType::class);
    }
}
