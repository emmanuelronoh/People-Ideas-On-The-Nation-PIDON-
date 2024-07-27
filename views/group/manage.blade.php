@extends('layouts.app')

@section('content')
<h1>Manage Group</h1>
<form method="POST" action="{{ route('groups.update', $group->id) }}">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Group Name</label>
        <input id="name" type="text" name="name" value="{{ $group->name }}" required>
    </div>

    <div>
        <label for="description">Description</label>
        <textarea id="description" name="description" required>{{ $group->description }}</textarea>
    </div>

    <button type="submit">Update Group</button>
</form>
@endsection
