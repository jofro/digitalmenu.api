<?php
namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductUpdateRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;

class ProductUpdate extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return ProductResource
     */
    public function handle(ProductUpdateRequest $request, int $product)
    {
        $product = Product::findOrFail($product);

        $product->update([
            'name' => $request->name,
        ]);

        return ProductResource::make($product);
    }

}
