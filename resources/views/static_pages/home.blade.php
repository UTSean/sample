@extends('layouts.default')
@section('content')
<div class="jumbotron">
    <h1>Hello Laravel</h1>
    <p class="lead">
        What you see is the homepage of my first Web App.
    </p>
    <p>Everything will begin with it.</p>
    <p><a class="btn btn-lg btn-success" href="{{route('signup')}}" role="button">Register now!</a></p>
</div>
@stop
