<?php

namespace App\Domain\Category\Controllers;

use App\Http\Controllers\Controller;
use App\Domain\Category\Requests\CategoryStoreRequest;
use App\Domain\Category\Resources\CategoryResource;
use App\Domain\Category\Models\Category;

class CategoryStore extends Controller
{
    /**
     * Store a newly created resource in storage.
     * 
     * @param CategoryStoreRequest $request
     * @return CategoryResource
     */
    public function handle(CategoryStoreRequest $request) : CategoryResource
    {
        $category = Category::create([
            'name' => $request->name,
        ]);
        return CategoryResource::make($category);
    }
}
