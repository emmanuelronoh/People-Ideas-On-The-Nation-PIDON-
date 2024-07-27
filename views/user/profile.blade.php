@extends('layouts.app')

@section('content')
<h1>{{ $user->name }}'s Profile</h1>

<p>Email: {{ $user->email }}</p>
<p>Joined: {{ $user->created_at->format('M d, Y') }}</p>

<a href="{{ route('user.followers', $user->id) }}">View Followers</a>
<a href="{{ route('user.following', $user->id) }}">View Following</a>
@endsection
