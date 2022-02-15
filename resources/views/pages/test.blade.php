@extends('layouts.masterLayout')

@section('title', 'Test Page')

@section('content')
    <h1>Articles</h1>

    @foreach($articles as $article)
        <h2><a href = '/articles/{{$article->id}}'>{{$article->title}}</a></h2>
        <i id="excerpt">{{$article->excerpt}}</i>
    @endforeach

@endsection
