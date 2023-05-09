<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryUpdateRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;

class CategoryUpdate extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return CategoryResource
     */
    public function handle(CategoryUpdateRequest $request, int $category)
    {
        $category = Category::findOrFail($category);

        $category->update([
            'name' => $request->name,
        ]);

        return CategoryResource::make($category);
    }

}
