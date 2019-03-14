@extends('layouts.app')

@section('title', '| Reset Password')

@section('content')
<h2>Reset Password</h2>

@if (session('status'))
    <p class="alert alert-success">{{ session('status') }}</p>
@endif

<form method="POST" action="{{ route('password.email') }}">
    {{ csrf_field() }}

    <p>
        <label for="email">E-Mail Address</label>
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
    </p>

    @if ($errors->has('email'))
        <p class="error">{{ $errors->first('email') }}</p>
    @endif

    <p>
        <button type="submit">Send Password Reset Link</button>
    </p>
</form>
@endsection
