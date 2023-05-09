<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;

class ProductShow extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return ProductResource
     */
    public function handle(int $product)
    {
        $product = Product::findOrFail($product);

        return ProductResource::make($product);
    }
}
