<?php


namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;

class CategoryIndex extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function handle()
    {
        dd('hola');
        $category = Category::query()->get();
        return CategoryResource::collection($category);
    }
}
