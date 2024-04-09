<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ShowController extends Controller
{
    public function __invoke($id)
    {
        $productId = (int) $id;
        $product = Product::findOrFail($productId);
        return view('main.show', compact('product'));
    }
}
