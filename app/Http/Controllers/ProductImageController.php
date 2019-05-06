<?php

namespace App\Http\Controllers;

use App\ProductImage;
use Illuminate\Http\Request;

class ProductImageController extends Controller
{
    public function store(Request $request)
    {
        $file =  $request->file('file');
        $name = $file->getClientOriginalName();
        $path = 'images';
        $file->move($path, $name);

        ProductImage::create([
            'product_id'    => $request->id,
            'photo-path'    => $path . '/'. $name
        ]);

    }
}
