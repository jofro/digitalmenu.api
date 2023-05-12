<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

//use Tests\TestCase;

class CategoryStoreTest extends TestCase
{
    public function test_001(): void
    {
        $category = ['name' => 'newCategory'];

        $user = User::factory()->create();

        $this->actingAs($user)
            ->postJson(route('category.store'), $category)
            ->assertStatus(201);
    }
}
