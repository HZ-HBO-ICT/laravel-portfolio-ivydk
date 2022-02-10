@extends('layouts.masterLayout')

@section('title', 'FAQ')

@section('content')
    <h1>Veelgestelde vragen</h1>
        @foreach($posts as $post)
            <details class="bottom">

                <summary>{{ $post->question }}</summary>
                <p>
                    {{$post->answer}}
                </p>

                    @if($post->link != null)
                        <p>
                            <a href="{{ $post->link }}">{{$post->link}}</a>
                        </p>
                    @endif

            </details>
        @endforeach

@endsection
