<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateRequest;
use App\Models\Product;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Product $product)
    {
        $data = $request->validated();
        $product->update($data);
        return view('main.show', compact('product'));
    }
}
