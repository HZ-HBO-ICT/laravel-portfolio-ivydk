@extends('layouts.masterLayout')

@section('title', 'Blog')

@section('content')
        <h2>Programmeerervaring</h2>
        <p>Op de middelbare heb ik in jaar vier en vijf informatica gehad, hier heb ik
            basis van een aantal programeertalen geleerd. Hier hebben wij aandacht besteed
            aan HTML, CSS, Python turtle, SQL en PHP.
        </p>
        <p><img src="/img/code.png" alt="code" height="300px"></p>


        <input type="button" value="Terug" onclick="history.back()" class="terug-knop">
@endsection
