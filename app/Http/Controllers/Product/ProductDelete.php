<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;

class ProductDelete extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function handle()
    {
        $product = Product::query()->get();

        return ProductResource::collection($product);
    }

 
}
