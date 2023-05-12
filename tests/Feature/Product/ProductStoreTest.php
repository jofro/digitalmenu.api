<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductStoreTest extends TestCase
{
    public function test_001(): void
    {
        $category = Category::factory()->create();

        $product = [
            'name' => fake()->name(),
            'category' => $category->id,
            'price' => 12.00,
            'currency' => 'EUR'
        ];

        $user = User::factory()->create();

        $this->actingAs($user)
            ->postJson(route('product.store'), $product)
            ->assertStatus(201);
    }
}
