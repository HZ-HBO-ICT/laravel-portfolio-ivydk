@extends('.layouts/masterLayout')

@section('title', 'article')

@section('content')

    <h2>{{$article->title}}</h2>
    <p><i>{{$article->excerpt}}</i></p>
    <p>{{$article->body}}</p>

    {{--TODO: history.back() or back to the index page--}}
    <input type="button" value="Terug" onclick="history.back()" class="knop">
    <a href="{{route('articles.edit', $article)}}"><button type="button" class="knop">Edit</button></a>


@endsection
