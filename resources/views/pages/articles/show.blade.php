@extends('.layouts/masterLayout')

@section('title', 'article')

@section('content')

    <h2>{{$article->title}}</h2>
    <p><i>{{$article->excerpt}}</i></p>
    <p>{{$article->body}}</p>

    <input type="button" value="Terug" onclick="history.back()" class="terug-knop">

@endsection
