<?php

namespace Tests\Feature\Category;

use App\Models\Category;
use App\Models\User;
use Tests\TestCase;

class CategoryUpdateTest extends TestCase
{
    public function test_001(): void
    {
        $category = Category::factory()->create();

        $user = User::factory()->create();

        $categoryModified  = [
            'name' => 'name_changed'
        ];

        $this->actingAs($user)
            ->patch(route('category.update', ['category' => $category->id]) ,  $categoryModified)
            ->assertJsonFragment([
                'id' => $category->id,
                'name' => 'name_changed'
            ])->assertStatus(200);
    }
}
