@extends('layouts.masterLayout')

@section('title', 'New FAQ')

@section('content')
    <h1>New FAQ</h1>

    <form method="POST" action="/articles" class = "faq-form">
        @csrf

        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" value="Your title"><br>
        <label for="excerpt">Excerpt:</label><br>
        <input type="text" id="excerpt" name="excerpt" value="Your excerpt"><br>
        <label for="body">Body:</label><br>
        <input type="text" id="body" name="body" value="Your body"><br>
        <label for="picture">Picture</label>
        <input type="text" id="picture" name="picture" value="Your body">
        <input type="submit" value="Submit">
    </form>

@endsection

