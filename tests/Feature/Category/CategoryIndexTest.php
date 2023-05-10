<?php

namespace Tests\Feature;

use App\Models\User;
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
        $this->withoutExceptionHandling();

        $user = User::factory()->create();
 
        $response = $this->actingAs($user)
            ->get('/api');
        $response->assertOk();
    }
}
