<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index() {
        $posts = Post::where('published', true)->paginate(2);
        $categories = Category::get();
        return view('dashboard', compact('posts', 'categories'));
    }
    // public function categories() {
    //     $categories = Category::get();
    //     return view('dashboard', compact('categories'));
    // }
}
