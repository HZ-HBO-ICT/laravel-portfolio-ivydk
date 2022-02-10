@extends('layouts.masterLayout')

@section('title', 'FAQ')

@section('content')
        @foreach($posts as $post)
            <details class="bottom">
                <summary>{{ $post->question }}</summary>
                <p>
                    {{$post->answer}}
                </p>
            {{--TODO: check if there is a link--}}
                <p>
                    <a href="{{ $post->link }}">{{$post->link}}</a>
                </p>
            </details>
        @endforeach
@endsection
