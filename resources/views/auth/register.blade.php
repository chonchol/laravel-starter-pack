@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="wrapper">
          <form class="login form-horizontal"role="form" method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}
            <p class="title">Register</p>
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name" autofocus/>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
            <i class="fa fa-user"></i>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Address">

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            <i class="fa fa-envelope"></i>
            <input id="password" type="password" class="form-control" name="password" placeholder="Password" />
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            <i class="fa fa-key"></i>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">

            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
            <i class="fa fa-check"></i>
            <button>
              <i class="spinner"></i>
              <span class="state">Register</span>
            </button>
          </form>
          </p>
        </div>
    </div>
</div>
@endsection
