@extends('main')

@section('title', '| Login')

@section('content')
<h2>Login</h2>
{!! Form::open() !!}
	{{ Form::label('email', 'Email:') }}
	{{ Form::email('email', null, ['class' => 'form-control']) }}

	{{ Form::label('password', 'Password:') }}
	{{ Form::password('password', ['class' => 'form-control']) }}
	<br>

	{{ Form::checkbox('remember') }}{{ Form::label('remember', 'Remember Me') }}
	<br>
	
	{{ Form::button('Login', ['type' => 'submit']) }}
{!! Form::close() !!}
@endsection