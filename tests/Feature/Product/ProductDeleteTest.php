<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductDeleteTest extends TestCase
{
    public function test_001(): void
    {
        $this->withExceptionHandling();
        $product = Product::factory()->create();
 
        $user = User::factory()->create();
 
        $response = $this->actingAs($user)
            ->deleteJson(route('product.delete', $product->id));
            
//       $this->assertModelMissing($product);
        
        $response->assertStatus(200);
    }
}
