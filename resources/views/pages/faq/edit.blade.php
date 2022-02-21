{{--TODO: fix style !!--}}
@extends('layouts.masterLayout')

@section('title', 'New FAQ')

@section('content')
    <h1>New FAQ</h1>

    <form method="POST" action="/FAQ/{{$faq->id}}" class = "faq-form">
        @csrf
        @method('PUT')

        <label for="question">Question:</label><br>
        <input type="text" id="question" name="question" value="{{$faq->question}}"><br>

        <label for="answer">Answer:</label><br>
        <input type="text" id="answer" name="answer" value="{{$faq->answer}}"><br>
        <label for="link">Link:</label><br>
        <input type="text" id="link" name="link" value="{{$faq->link}}"><br>

        <input type="submit" value="Submit" class = "knop">

        <a href="/FAQ"><button type="button" class="knop">Cancel</button></a>

    </form>

    {{--Form for the delete button--}}
    <form method="POST" action="/FAQ/{{$faq->id}}">
        @csrf
        @method('DELETE')
        <button type="submit" class = "knop">Delete</button>
    </form>

@endsection
