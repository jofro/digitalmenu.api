<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\User;
use Tests\TestCase;

class CategoryShowTest extends TestCase
{
    public function test_001(): void
    {
        $category = Category::factory()->create();

        $user = User::factory()->create();
        
        $response = $this->actingAs($user)
            ->getJson(route('category.show', ['category' =>$category->id]));

        $response->assertStatus(200)
            ->assertJsonFragment([
                'id' => $category->id,
                'name' => $category->name
            ]);
    }
}
