<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => auth()->id(),
        ]);

        return redirect('posts');
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('post.show', ['post' => $post]);
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('post.edit', ['post' => $post]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $post = Post::find($id);
        $post->update($request->all());

        return redirect('posts');
    }
}
