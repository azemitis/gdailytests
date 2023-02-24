<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductsTest extends TestCase
{
    public function test_see_homepage(): void
    {
        $response = $this->get('/');
        $response->assertSee('Laracasts');
        $response->assertDontSee('NoSuchTexThere');
        $response->assertStatus(200);
    }
}
