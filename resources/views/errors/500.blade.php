@extends('layouts.errorLayout')

@section('error-code')
    <img src="/img/500.png" alt="404" height=300px">
@endsection

@section('error-message')
    Internal server error
@endsection

@section('error-description')
    Sorry! We had some technical problems during the last operation.
@endsection
