@extends('layouts.app')

@section('title', '| Create Page')

@section('content')
<h2>Create Page</h2>

{!! Form::open(array('route' => 'store_pages.store')) !!}
    {{ Form::label('title', 'Title:') }}
    {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

    {{ Form::label('content', 'Content:') }}
    {{ Form::textarea('content', null, array('class' => 'form-control', 'required' => '')) }}

    {{ Form::label('meta_keywords', 'Meta Keywords:') }}
    {{ Form::text('meta_keywords', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

    {{ Form::label('meta_description', 'Meta Description:') }}
    {{ Form::textarea('meta_description', null, array('class' => 'form-control', 'required' => '')) }}

    {{ Form::button('Create Page', array('type' => 'submit')) }}
{!! Form::close() !!}
@endsection
