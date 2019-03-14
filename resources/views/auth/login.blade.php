@extends('layouts.app')

@section('title', '| Login')

@section('content')
<h2>Login</h2>

<form method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
    <p>
      <label for="email">E-Mail Address</label>
      <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
    </p>

    @if ($errors->has('email'))
        <p class="error">{{ $errors->first('email') }}</p>
    @endif

    <p>
      <label for="password">Password</label>
      <input id="password" type="password" class="form-control" name="password" required>
    </p>

    @if ($errors->has('password'))
        <p class="error">{{ $errors->first('password') }}</p>
    @endif

    <p>
        <button type="submit">Login</button>
    </p>
    <p>
        <a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a>
    </p>
</form>
@endsection
