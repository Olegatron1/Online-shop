<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['data'] = json_encode($data['data']);
        Product::firstOrCreate($data);

        return redirect()->route('index');
    }
}
