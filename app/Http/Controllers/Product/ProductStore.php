<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;

class ProductStore extends Controller
{
    /**
     * Store a newly created resource in storage.
     * 
     * @param ProductStoreRequest $request
     * @return ProductResource
     */
    public function handle(ProductStoreRequest $request) : ProductResource
    {
        $product = Product::create([
            'name' => $request->name,
            'category' => $request->category,
            'price' => $request->price,
            'currency' => $request->currency
        ]);
        
        return ProductResource::make($product);
    }
}
