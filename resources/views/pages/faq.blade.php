@extends('layouts.masterLayout')

@section('title', 'FAQ')

@section('content')

    <ul>
        @foreach($posts as $post)
            <li>{{ $post->question }}</li>
        @endforeach
    </ul>

@endsection
