{{--TODO: fix style !!--}}
@extends('layouts.masterLayout')

@section('title', 'New FAQ')

@section('content')
    <h1>New FAQ</h1>

    <form method="POST" action="{{route('faq.update',$faq)}}" class = "faq-form">
        @csrf
        @method('PUT')

        <label for="question">Question:</label><br>
        <input
            class="input @error('question') is-danger @enderror"
            type="text"
            id="question"
            name="question"
            value="{{$errors->any() ? old('question') : $faq->question}}"
        ><br>
        @error('question')
        <p class="help is-danger">{{ $errors->first('question') }}</p>
        @enderror

        <label for="answer">Answer:</label><br>
        <input
            class="input @error('answer') is-danger @enderror"
            type="text"
            id="answer"
            name="answer"
            value="{{$errors->any() ? old('answer') : $faq->answer}}"
        ><br>
        @error('answer')
        <p class="help is-danger">{{ $errors->first('answer') }}</p>
        @enderror

        <label for="link">Link:</label><br>
        <input
            type="text"
            id="link"
            name="link"
            value="{{$errors->any() ? old('link') : $faq->link}}"
        ><br>


        <input type="submit" value="Submit" class = "knop">

        <a href="{{route('faq.index')}}"><button type="button" class="knop">Cancel</button></a>

    </form>

    {{--Form for the delete button--}}
    <form method="POST" action="{{route('faq.destroy', $faq)}}">
        @csrf
        @method('DELETE')
        <button type="submit" class = "knop">Delete</button>
    </form>

@endsection
