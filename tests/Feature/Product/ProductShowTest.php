<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\User;
use Tests\TestCase;

class ProductShowTest extends TestCase
{
    public function test_example(): void
    {
        $product = Product::factory()->create();

        $user = User::factory()->create();
        
        $response = $this->actingAs($user)
            ->getJson(route('product.show', ['product' =>$product->id]));

        $response->assertStatus(200)
            ->assertJsonFragment([
                'id' => $product->id,
                'name' => $product->name
            ]);
    }
}
