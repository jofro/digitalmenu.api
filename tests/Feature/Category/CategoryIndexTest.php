<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class CategoryIndexTest extends TestCase
{
    public function test_001(): void
    {
        $user = User::factory()->create();
 
        $this->actingAs($user)
            ->getJson(route('category.index'))
            ->assertStatus(200);
    }
}
