@extends('layouts.masterLayout')

@section('title', 'Test Page')

@section('content')
    <h1>Articles</h1>

{{--    @foreach($articles as $article)--}}
{{--        <h2><a href = '/articles/{{$article->id}}'>{{$article->title}}</a></h2>--}}
{{--        <i id="excerpt">{{$article->excerpt}}</i>--}}
{{--    @endforeach--}}

    <div class="blog-posts" id="box-container">

        @foreach($articles as $article)
        <div class="container-item">
            <a href="/articles/{{$article->id}}">
                <div class="card">
                    <div class = 'fake-img'></div>
{{--                    <img src="{{$article->picture}}"  alt="">--}}
                    <h2>{{$article->title}}</h2>
                </div>
            </a>
        </div>
        @endforeach

    </div>

@endsection
