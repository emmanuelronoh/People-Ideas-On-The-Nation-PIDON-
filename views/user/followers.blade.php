@extends('layouts.app')

@section('content')
<h1>Followers</h1>

@if($followers->isEmpty())
    <p>No followers yet.</p>
@else
    <ul>
        @foreach($followers as $follower)
            <li>{{ $follower->name }} - <a href="{{ route('user.profile', $follower->id) }}">View Profile</a></li>
        @endforeach
    </ul>
@endif
@endsection
