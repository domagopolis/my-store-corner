@extends('layouts.app')

@section('title', '| Register')

@section('content')
<h2>Register</h2>

<form method="POST" action="{{ route('register') }}">
    {{ csrf_field() }}

    <p>
        <label for="name">Name</label>
        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
    </p>

    @if ($errors->has('name'))
        <p class="error">{{ $errors->first('name') }}</p>
    @endif

    <p>
        <label for="email">E-Mail Address</label>
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
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
        <label for="password-confirm">Confirm Password</label>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
    </p>

    <p>
        <button type="submit">Register</button>
    </p>
</form>
@endsection
