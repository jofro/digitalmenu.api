<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\User;
use Tests\TestCase;

class CategoryDeleteTest extends TestCase
{
    public function test_001(): void
    {
        $category = Category::factory()->create();
 
        $user = User::factory()->create();
 
        $response = $this->actingAs($user)
            ->deleteJson(route('category.delete', $category->id));
            
        $this->assertModelMissing($category);
        
        $response->assertStatus(200);
    }
}
