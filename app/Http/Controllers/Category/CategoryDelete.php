<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryDelete extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function handle(int $category)
    {
        $category = Category::findOrFail($category);

        $category->delete();
    }

 
}
