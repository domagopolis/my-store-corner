@extends('layouts.app')

@section('title', '| Reset Password')

@section('content')
<h2>Reset Password</h2>

<form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
    {{ csrf_field() }}

    <input type="hidden" name="token" value="{{ $token }}">

    <p>
        <label for="email">E-Mail Address</label>
        <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>
    </p>

    @if ($errors->has('email'))
        <p class="error">{{ $errors->first('email') }}</p>
    @endif

    <p>
        <label for="password" class="col-md-4 control-label">Password</label>
        <input id="password" type="password" class="form-control" name="password" required>
    </p>

    @if ($errors->has('password'))
        <p class="error">{{ $errors->first('password') }}</p>
    @endif

    <p>
        <label for="password-confirm">Confirm Password</label>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
    </p>

    @if ($errors->has('password_confirmation'))
        <p class="error">{{ $errors->first('password_confirmation') }}</p>
    @endif

    <p class="form-group">
        <button type="submit" class="btn btn-primary">Reset Password</button>
    </p>
</form>
@endsection
