@extends('layouts.app')

@section('content')
<h1>Following</h1>

@if($following->isEmpty())
    <p>Not following anyone yet.</p>
@else
    <ul>
        @foreach($following as $followed)
            <li>{{ $followed->name }} - <a href="{{ route('user.profile', $followed->id) }}">View Profile</a></li>
        @endforeach
    </ul>
@endif
@endsection
