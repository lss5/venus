<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class ImageController extends Controller
{
    public function destroy(Image $image): RedirectResponse
    {
        $image->delete();

        return Redirect::route('admin.product.edit', $image->product);
    }
}
