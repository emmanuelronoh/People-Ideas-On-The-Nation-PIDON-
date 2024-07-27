@extends('layouts.app')

@section('content')
<h1>{{ $post->title }}</h1>

<p>{{ $post->content }}</p>
<p>Posted by: {{ $post->user->name }} on {{ $post->created_at->format('M d, Y') }}</p>

<!-- Add options to comment, like, or share the post -->
@endsection
