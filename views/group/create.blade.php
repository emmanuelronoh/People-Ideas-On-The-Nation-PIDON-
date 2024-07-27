@extends('layouts.app')

@section('content')
<h1>Create New Group</h1>

<form method="POST" action="{{ route('groups.store') }}">
    @csrf

    <div>
        <label for="name">Group Name</label>
        <input id="name" type="text" name="name" required>
    </div>

    <div>
        <label for="description">Description</label>
        <textarea id="description" name="description" required></textarea>
    </div>

    <button type="submit">Create Group</button>
</form>
@endsection

