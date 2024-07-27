@extends('layouts.app')

@section('content')
<h1>New Message</h1>

<form method="POST" action="{{ route('messages.store') }}">
    @csrf

    <div>
        <label for="recipient">Recipient</label>
        <input id="recipient" type="text" name="recipient" required>
    </div>

    <div>
        <label for="content">Message</label>
        <textarea id="content" name="content" required></textarea>
    </div>

    <button type="submit">Send Message</button>
</form>
@endsection
