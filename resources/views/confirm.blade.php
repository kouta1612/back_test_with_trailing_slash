@extends('app')

@section('content')
    <form action="/complete/" method="post">
        <input type="text" name="title">
        <input type="submit" name="back" value="back">
        <input type="submit" name="complete" value="complete">
    </form>
@endsection
