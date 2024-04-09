<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class  EditController extends Controller
{
    public function __invoke(int $id)
    {
        $product = Product::query()->find($id);

        return view('main.edit', compact('product'));
    }
}
