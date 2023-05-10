<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryIndexTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $category = Category::factory()->create([
            'name' => 'Category_01'
        ]);

        $this->postJson(route('category.store'), $category->toArray())
            ->assertStatus(200);

        $this->assertDatabaseHas('categories', ['id' => $category->id]);
    }
}
