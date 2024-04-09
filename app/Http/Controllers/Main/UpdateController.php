<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateRequest;
use App\Models\Product;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, int $id)
    {
        $product = Product::findOrFail($id);
        $attributes = $request->validated();
        $product->update($attributes);

        return view('main.show', compact('product'));
    }
}
