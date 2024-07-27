@extends('layouts.app')

@section('content')
<h1>Create New Post</h1>

<form method="POST" action="{{ route('posts.store') }}">
    @csrf

    <div>
        <label for="title">Title</label>
        <input id="title" type="text" name="title" required>
    </div>

    <div>
        <label for="content">Content</label>
        <textarea id="content" name="content" required></textarea>
    </div>

    <button type="submit">Create Post</button>
</form>
@endsection
