<?php

namespace Tests\Feature\Category;

use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

//use Tests\TestCase;

class CategoryStoreTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_001(): void
    {        
        $this->actingAs(User::factory()->create());

        $category  = Category::factory()->create([
            'name' => fake()->name()
        ]);

        $this->postJson(route('category.store'), $category->toArray());

        $this->assertDatabaseHas('categories', ['id' => $category->id]);

    }
    public function test_002(): void
    {        
        
        $response = $this->actingAs(User::factory()->create())->get('/');
 
        $response->assertStatus(200);

    }
}

