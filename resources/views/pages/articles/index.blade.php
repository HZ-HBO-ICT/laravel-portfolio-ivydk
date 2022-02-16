@extends('layouts.masterLayout')

@section('title', 'Test Page')

@section('content')
    <div class = "title-bar">
        <h1>Articles</h1>
    </div>

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
    <a href="articles/create"><button type="button" class="knop">create</button></a>

@endsection
