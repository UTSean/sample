@extends('layouts.default')
@section('title', 'Edit profile')

@section('content')
<div class="col-md-offset-2 col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5>Edit profile</h5>
        </div>
        <div class="panel-body">

            @include('shared._errors')

            <div class="gravatar_edit">
                <a href="http://gravatar.com/emails" target="_blank">
                    <img src="{{ $user->gravatar('200') }}" alt="{{ $user->name }}" class="gravatar"/>
                </a>
            </div>

            <form class="" action="{{ route('users.update', $user->id) }}" method="post">
                {{ method_field('PATCH')}}
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" calss="form-control" value="{{ $user->name }}">
                </div>

                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="text" name="email" class="form-control" value="{{ $user->email }}" disabled>
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Password confirm:</label>
                    <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}">
                </div>

                <button type="submit" class="btn btn-primary"name="button">Update</button>
            </form>
        </div>
    </div>
</div>
@stop
