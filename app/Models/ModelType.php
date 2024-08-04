<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ModelType extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function qrcodes(): HasMany
    {
        return $this->hasMany(Qrcode::class);
    }
}
