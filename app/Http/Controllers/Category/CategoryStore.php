<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;

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
