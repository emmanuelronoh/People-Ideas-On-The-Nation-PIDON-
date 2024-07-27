@extends('layouts.app')

@section('content')
<h1>Messages</h1>

@foreach($messages as $message)
    <div>
        <p>From: {{ $message->sender->name }}</p>
        <p>{{ $message->content }}</p>
        <a href="{{ route('messages.show', $message->id) }}">View</a>
    </div>
@endforeach
@endsection
