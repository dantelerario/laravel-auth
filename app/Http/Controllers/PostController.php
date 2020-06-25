<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    //Posts
    public function index() {
        $posts = Post::orderBy('created_at', 'desc')->paginate(3);

        return view('guest.posts.index', compact('posts'));
    }
}
