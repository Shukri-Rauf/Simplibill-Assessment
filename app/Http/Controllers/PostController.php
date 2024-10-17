<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //admin home show all data
    public function index()
    {
        $posts = Post::all(); // Retrieve all posts
        return view('dashboard', compact('posts'));
    }

    //admin change status
    public function approve(Post $post)
    {
        $post->status = 'approved'; // Change status to approved
        $post->save();

        return redirect()->route('dashboard')->with('success', 'Post approved successfully.');
    }

    // home page only get approved posts
    public function showApprovedPosts()
    {
        $posts = Post::where('status', 'approved')->get(); // Get only approved posts
        return view('posts.index', compact('posts'));
    }

    // Store the new post
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'status' => 'pending', // Default status is 'pending'
        ]);

        return redirect()->route('posts.index')->with('success', 'Post submitted for approval.');
    }
}
