<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Post;
use App\Models\User;

class PostTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_user_can_create_post_with_pending_status()
    {
        $response = $this->post('/posts', [
            'title' => 'New Test Post',
            'content' => 'This is the content for the test post.',
        ]);

        // Assert that the post is created with pending status
        $this->assertDatabaseHas('posts', [
            'title' => 'New Test Post',
            'content' => 'This is the content for the test post.',
            'status' => 'pending',
        ]);

        $response->assertRedirect('/');
    }

    public function test_admin_can_approve_post()
    {
        $user = User::factory()->create();

        //simulate admin
        $this->actingAs($user);

        $post = Post::factory()->create(['status' => 'pending']);

        $response = $this->post('/admin/posts/' . $post->id . '/approve');

        // Assert the post status is now approved
        $this->assertDatabaseHas('posts', [
            'id' => $post->id,
            'status' => 'approved',
        ]);

        $response->assertRedirect('/dashboard');
    }
}
