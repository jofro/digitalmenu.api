<?php
namespace App\Domain\Category\Controllers;

use App\Http\Controllers\Controller;
use App\Domain\Category\Requests\CategoryUpdateRequest;
use App\Domain\Category\Resources\CategoryResource;
use App\Domain\Category\Models\Category;

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
