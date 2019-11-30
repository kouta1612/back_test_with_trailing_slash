@extends('app')

@section('content')
    <form action="/confirm/" method="post">
        <input type="text" name="title">
        <input type="submit" value="confirm">
    </form>
@endsection
