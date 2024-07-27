@extends('layouts.app')

@section('content')
<h1>Microblog Posts</h1>
@foreach($posts as $post)
    <div>
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
        <a href="{{ route('microblogs.show', $post->id) }}">Read More</a>
    </div>
@endforeach
@endsection
