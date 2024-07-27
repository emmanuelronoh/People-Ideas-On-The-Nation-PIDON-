@extends('layouts.app')

@section('content')
<h1>Edit Video</h1>

<form method="POST" action="{{ route('videos.update', $video->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div>
        <label for="video">Update Video</label>
        <input id="video" type="file" name="video">
    </div>

    <button type="submit">Update Video</button>
</form>
@endsection
