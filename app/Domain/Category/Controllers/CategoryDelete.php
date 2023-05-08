<?php


namespace App\Domain\Category\Controllers;

use App\Http\Controllers\Controller;
use App\Domain\Category\Resources\CategoryResource;
use App\Domain\Category\Models\Category;

class CategoryDelete extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function handle()
    {
        $category = Category::query()->get();

        return CategoryResource::collection($category);
    }

 
}
