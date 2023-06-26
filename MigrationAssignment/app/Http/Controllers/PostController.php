<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->get();
        return view('posts.index', compact('posts'));
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        $posts = Post::with('category')->get();
        return view('posts.index', compact('posts'))->with('success', 'Post deleted successfully');
    }

    public function getPostsByCategory($id)
    {
        $category = Category::findOrFail($id);
        $posts = $category->posts()->get();

        return view('posts.category', compact('category', 'posts'));
    }

    public function latestPosts()
    {
        $categories = Category::with('latestPost')->get();
        return view('latest_posts', compact('categories'));
    }
}

