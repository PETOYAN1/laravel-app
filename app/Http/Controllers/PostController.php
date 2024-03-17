<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index() {
        $users = User::with('posts')->get();
        $posts = Post::with('users')->cursorPaginate(1);
        $categories = Category::all();
        return view('dashboard', compact('posts', 'categories', 'users'));
    }
}
