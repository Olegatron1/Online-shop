<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateRequest;
use App\Models\Product;

class DeleteController extends Controller
{
    public function __invoke(int $id)
    {
        $product = Product::query()->find($id);
        $product->delete();
        return redirect()->route('index');
    }
}
