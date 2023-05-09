<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;

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
