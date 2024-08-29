<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as ImageManager;

class Image extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function save(array $options = [])
    {
        $save = parent::save($options);

        $imageFacade = ImageManager::make(public_path('storage/'.$this->link))->fit(1000, 667, function ($constraint) {
            $constraint->upsize();
        });
        $imageFacade->save();

        return $save;
    }

    public function delete()
    {
        if (Storage::disk('public')->exists($this->link)) {
            Storage::disk('public')->delete($this->link);
        }
        return parent::delete();
    }

}
