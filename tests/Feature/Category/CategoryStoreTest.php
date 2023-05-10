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
        $this->withoutExceptionHandling();

        $category  = [
            'name' => fake()->name()
        ];

       $user = User::factory()->create();
       
       $response = $this->actingAs($user)
            ->postJson(route('category.store'), $category);
        
        $response->assertStatus(200);

       // $this->assertDatabaseHas('categories', ['name' => $category->name]);

    }
}

