@extends('layouts.errorLayout')

@section('error-code')
    <img src="/img/404.png" alt="404" height=300px">
@endsection

@section('error-message')
    Page not found
@endsection

@section('error-description')
    The page you were looking for does not exist (anymore) :(
@endsection
