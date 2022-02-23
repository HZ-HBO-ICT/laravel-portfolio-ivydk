@extends('layouts.masterLayout')

@section('title', 'Edit Article')

{{--TODO: fix style on this page--}}

@section('content')

    <h1>Edit article</h1>

    {{--TODO: fix route()--}}
    <form method="POST" action="{{route('articles.update', $article)}}" class = "faq-form" id="faq-form">
        @csrf
        @method('PUT')

        <label for="title">Title:</label><br>
        <input
            class="input @error('title') is-danger @enderror"
            type="text"
            id="title"
            name="title"
            value="{{$errors->any() ? old('title') : $article->title}}"
        ><br>
        @error('title')
        <p class="help is-danger">{{ $errors->first('title') }}</p>
        @enderror


        <label for="excerpt">Excerpt:</label><br>
        <input
            class="input @error('excerpt') is-danger @enderror"
            type="text"
            name="excerpt"
            value="{{$errors->any() ? old('excerpt') : $article->excerpt}}"
        ><br>
        @error('excerpt')
        <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
        @enderror

        <label for="body">Body:<br>
            <textarea
                class="input @error('body') is-danger @enderror"
                name="body"
                form="faq-form"
            >{{$errors->any() ? old('body') : $article->body}}</textarea></label><br>

        @error('body')
        <p class="help is-danger">{{ $errors->first('body') }}</p>
        @enderror
it
        <label for="picture">Picture</label><br>
        <input type="file" id="picture" name="picture" value="{{$article->picture}}"><br>

        <input type="submit" value="Submit" class="knop">

        <a href="{{route('articles.show', $article)}}"><button type="button" class="knop">Cancel</button></a>

    </form>

    <form method="POST" action="{{route('articles.destroy', $article)}}">
        @csrf
        @method('DELETE')
        <button type="submit" class = "knop">Delete</button>
    </form>


@endsection

