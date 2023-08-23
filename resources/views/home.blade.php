@extends('layouts.app')
@section('content')
@include('commons.errors')
<h1>マイページ</h1>
<p>ようこそ、{{ Auth::user()->name }}さん｜<a href="{{ route('articles.create') }}">記事を書く</a></p>
<p><a href="{{ route('articles.index') }}">記事一覧へ</a></p>
<form action="{{ route('logout') }}" method="post">
    @csrf 
    <button type="submit">ログアウト</button>
</form>
@endsection()