<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductUpdateTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_001(): void
    {
        $product = Product::factory()->create();

        $productModified  = [
            'name' => 'name_changed'
        ];

        $user = User::factory()->create();

        $this->actingAs($user)
            ->patch(route('product.update', ['product' => $product->id]) ,  $productModified)
            ->assertJsonFragment([
                'id' => $product->id,
                'name' => 'name_changed'
            ])->assertStatus(200);
    }
}
