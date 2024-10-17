<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'First Post',
            'content' => 'This is the content of the first post.',
            'status' => 'approved',
        ]);

        Post::create([
            'title' => 'Second Post',
            'content' => 'This is the content of the second post.',
            'status' => 'pending',
        ]);

        Post::create([
            'title' => 'Third Post',
            'content' => 'This is the content of the third post.',
            'status' => 'approved',
        ]);
    }
}
