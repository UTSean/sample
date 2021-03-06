@extends('layouts.default')
@section('title','Login')

@section('content')
<div class="col-md-offset-2 col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5>Login</h5>
        </div>
        <div class="panel-body">
            @include('shared._errors')

            <form action="{{ route('login') }}" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    <label for="password">Password (<a href="{{ route('password.request') }}">Forgot Password?</a>):</label>:
                    <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                </div>

                <div class="checkbox">
                    <label><input type="checkbox" name="remember">Remember me</label>
                </div>

                <button type="submit" class="btn btn-primary">Login!</button>
            </form>
            <hr>

            <p>Don`t have an account?<a href="{{route('signup')}}">Sign up now!</a></p>
        </div>
    </div>
</div>
@stop
