@extends('app')

@section('content')
    <form action="/confirm/" method="post">
        @csrf
        @if (session()->has('title'))
            <h1>フラッシュメッセージ：{{ session('title') }}</h1>    
        @endif
        {{-- 入力をフラッシュデータとして保存するためにold関数を使う --}}
        <input type="text" name="title" value="{{ old('title') }}">
        <input type="submit" value="confirm">
    </form>
@endsection
