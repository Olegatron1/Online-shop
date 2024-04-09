<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class  EditController extends Controller
{
    public function __invoke(Product $product)
    {
        return view('main.edit', compact('product'));
    }
}
