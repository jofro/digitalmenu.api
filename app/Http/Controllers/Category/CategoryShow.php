<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;

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
