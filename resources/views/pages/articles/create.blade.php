@extends('layouts.masterLayout')

@section('title', 'New FAQ')

@section('content')
    <h1>New article</h1>

    <form method="POST" action="{{route('articles.index')}}" class = "faq-form" id="faq-form">
        @csrf

        <label for="title">Title:</label><br>
        <input
            class="input @error('title') is-danger @enderror"
            type="text"
            id="title"
            name="title"
            placeholder="Title"
            value="{{old('title')}}"
        ><br>
        @error('title')
        <p class="help is-danger">{{ $errors->first('title') }}</p>
        @enderror


        <label for="excerpt">Excerpt:</label><br>
        <input
            class="input @error('excerpt') is-danger @enderror"
            type="text"
            name="excerpt"
            placeholder="Excerpt"
            value="{{old('excerpt')}}"
        ><br>
        @error('excerpt')
        <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
        @enderror

        <label for="body">Body:<br>
        <textarea
            class="input @error('body') is-danger @enderror"
            name="body"
            form="faq-form"
            placeholder="Body of the text"
        >{{old('body')}}</textarea></label><br>

        @error('body')
        <p class="help is-danger">{{ $errors->first('body') }}</p>
        @enderror

        <label for="picture">Picture</label><br>
        <input type="file" id="picture" name="picture" value="Picture"><br>

        <input type="submit" value="Submit" class="knop">

        <a href="{{route('articles.index')}}"><button type="button" class="knop">Cancel</button></a>
    </form>
@endsection

