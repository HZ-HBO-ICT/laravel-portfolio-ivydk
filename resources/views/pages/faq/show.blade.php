@extends('.layouts/masterLayout')

@section('title', 'article')

@section('content')

    <h2>{{$faq->question}}</h2>
    <p><i>{{$faq->answer}}</i></p>
    <p>{{$faq->link}}</p>

    {{--TODO: history.back() or back to the index page--}}
    <a href="{{route('faq.index')}}"><button type="button" class="knop">Terug</button></a>
    <a href="{{route('faq.edit', $faq)}}"><button type="button" class="knop">Edit</button></a>

@endsection
