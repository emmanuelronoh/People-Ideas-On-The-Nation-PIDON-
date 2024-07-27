@extends('layouts.app')

@section('content')
<h1>Upload Video</h1>

<form method="POST" action="{{ route('videos.store') }}" enctype="multipart/form-data">
    @csrf

    <div>
        <label for="video">Upload Video</label>
        <input id="video" type="file" name="video" required>
    </div>

    <button type="submit">Upload Video</button>
</form>
@endsection
