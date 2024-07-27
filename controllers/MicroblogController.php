<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class MicroblogController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('microblog.index', ['posts' => $posts]);
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('microblog.show', ['post' => $post]);
    }

    // Add more methods as needed for microblogging functionalities
}
