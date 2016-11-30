<!doctype html>
<html>
    <head></head>
    <body>
        <h1>My name is {{ $name }}</h1>
    </body>
</html>
@extends('layouts.master')

@section('title','Page Title')

@section('content')
    <p>this is my body content</p>
@endsection
