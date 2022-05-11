@extends('layouts.masterLayout')

@section('title', 'FAQ')

@section('content')
    <h1>Veelgestelde vragen</h1>

           <ul>
               @foreach($faqs as $faq)
               <a href="{{route('faq.show', $faq)}}"><li>{{ $faq->question }}</li></a>
               @endforeach
           </ul>

    <a href="{{route('faq.create')}}"><button type="button" class="knop">create</button></a>
@endsection
