@extends('app')

@section('content')
    <form action="/complete/" method="post">
        @csrf
        <p>title：{{ $request->title }}</p>
        <input type="hidden" name="title" value="{{ $request->title }}">
        <input type="submit" name="action" value="back">
        <input type="submit" name="action" value="complete">
    </form>
@endsection
