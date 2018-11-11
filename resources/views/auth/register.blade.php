@extends('main')

@section('title', '| Registration')

@section('content')
<h2>Register</h2>
{!! Form::open() !!}
	{{ Form::label('email', 'Email:') }}
	{{ Form::email('email', null, ['class' => 'form-control']) }}

	{{ Form::label('password', 'Password:') }}
	{{ Form::password('password', ['class' => 'form-control']) }}
	
	{{ Form::button('Register', ['type' => 'submit']) }}
{!! Form::close() !!}
@endsection