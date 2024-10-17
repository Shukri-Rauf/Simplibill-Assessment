<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Post;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->post('/posts', [
            'title' => 'New Test Post',
            'content' => 'This is the content for the test post.',
        ]);

        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
