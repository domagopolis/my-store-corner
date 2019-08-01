@extends('layouts.app')

@section('title', '| Create Store')

@section('content')
<h2>Create Store</h2>

{!! Form::open(array('route' => 'stores.store')) !!}
    {{ Form::label('name', 'Name:') }}
    {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

    {{ Form::label('email', 'Email:') }}
    {{ Form::email('email', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

    {{ Form::label('phone', 'Phone:') }}
    {{ Form::tel('phone', null, array('class' => 'form-control', 'maxlength' => '255')) }}

    {{ Form::label('mobile', 'Mobile:') }}
    {{ Form::tel('mobile', null, array('class' => 'form-control', 'maxlength' => '255')) }}

    {{ Form::label('country', 'Country:') }}
    {{ Form::select('country', $countries, null, array('class' => 'form-control', 'maxlength' => '255')) }}


    {{ Form::label('address', 'Address:') }}
    {{ Form::text('address', null, array('class' => 'form-control', 'maxlength' => '255')) }}

    {{ Form::label('business_registration_number', 'Business Registration Number:') }}
    {{ Form::text('business_registration_number', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

    {{ Form::label('website', 'Website:') }}
    {{ Form::url('website', null, array('class' => 'form-control', 'maxlength' => '255')) }}

    {{ Form::label('facebook_page_url', 'Facebook Page URL:') }}
    {{ Form::url('facebook_page_url', null, array('class' => 'form-control', 'maxlength' => '255')) }}

    {{ Form::label('twitter_username', 'Twitter Username:') }}
    {{ Form::text('twitter_username', null, array('class' => 'form-control', 'maxlength' => '255')) }}

    {{ Form::label('linkedin_page_url', 'Linkedin Page URL:') }}
    {{ Form::url('linkedin_page_url', null, array('class' => 'form-control', 'maxlength' => '255')) }}

    {{ Form::button('Create Store', array('type' => 'submit')) }}
{!! Form::close() !!}
@endsection
