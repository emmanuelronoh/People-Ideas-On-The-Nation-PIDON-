@extends('layouts.app')

@section('content')
<h1>Edit Photo</h1>
<form method="POST" action="{{ route('photos.update', $photo->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div>
        <label for="photo">Upload Photo</label>
        <input id="photo" type="file" name="photo">
    </div>

    <button type="submit">Update Photo</button>
</form>
@endsection
