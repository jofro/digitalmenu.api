<?php

namespace App\Domain\Category\Controllers;

use App\Http\Controllers\Controller;
use App\Domain\Category\Resources\CategoryResource;
use App\Domain\Category\Models\Category;

class CategoryShow extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return CategoryResource
     */
    public function handle(int $category)
    {
        $category = Category::findOrFail($category);

        return CategoryResource::make($category);
    }
}
