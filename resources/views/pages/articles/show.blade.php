@extends('.layouts/masterLayout')

@section('title', 'article')

@section('content')

    <h2>{{$article->title}}</h2>
    <p><i>{{$article->excerpt}}</i></p>
    <p>{{$article->body}}</p>

@endsection
