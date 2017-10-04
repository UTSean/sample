@extends('layouts.default')
@section('title', 'Reset password')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Reset password
                </div>
                <div class="panel-body">
                    @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status' )}}
                    </div>
                    @endif

                    <form class="form-horizontal" action="{{ route('password.email')}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email')? 'has-error' : ''}}">
                            <label for="email" class="col-md-4 control-label">E-mail:</label>

                            <div class="col-md-6">
                                <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                   @if($errors->has('email'))
                                   <span class="help-block">
                                       <strong>{{ $errors->first('email') }}</strong>
                                   </span>
                                   @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send the password reset E-mail
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
