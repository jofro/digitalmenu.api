<?php

namespace Tests\Feature\Category;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryDeleteTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_001(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
