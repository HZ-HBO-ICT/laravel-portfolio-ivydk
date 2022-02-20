@extends('layouts.masterLayout')

@section('title', 'Edit Article')

{{--TODO: fix style on this page--}}

@section('content')

    <h1>Edit article</h1>

    <form method="POST" action="/articles/{{$article->id}}" class = "faq-form" id="faq-form">
        @csrf
        @method('PUT')

        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" value="{{$article->title}}"><br>

        <label for="excerpt">Excerpt:</label><br>
        <input type="text" id="excerpt" name="excerpt" value="{{$article->excerpt}}"><br>

        <label for="body">Body:<br>
        <textarea name="body" form="faq-form">{{$article->body}}</textarea><br></label>

        <label for="picture">Picture</label><br>
        <input type="file" id="picture" name="picture" value="{{$article->picture}}"><br>

        <input type="submit" value="Submit" class="knop">

        <a href="/articles"><button type="button" class="knop">Cancel</button></a>
    </form>

    <form method="POST" action="/articles/{{ $article->id }}">
        @csrf
        @method('DELETE')
        <button type="submit" class = "button">Delete</button>
    </form>


@endsection

