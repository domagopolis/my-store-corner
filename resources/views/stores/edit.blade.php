@extends('layouts.app')

@section('title', '| Edit Store')

@section('content')
<h2>Edit Store</h2>
{!! Form::model($store, ['route' => ['stores.update', $store->id], 'method' => 'PUT']) !!}

    {{ Form::label('name', 'Name:') }}
    {{ Form::text('name', $store->name, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

    {{ Form::label('phone', 'Phone:') }}
    {{ Form::tel('phone', $store->phone, array('class' => 'form-control', 'maxlength' => '255')) }}

    {{ Form::label('mobile', 'Mobile:') }}
    {{ Form::tel('mobile', $store->mobile, array('class' => 'form-control', 'maxlength' => '255')) }}

    {{ Form::label('country', 'Country:') }}
    {{ Form::select('country', $countries, $store->postcode->state->country->id, array('class' => 'form-control', 'maxlength' => '255')) }}

    {{ Form::label('state', 'State:') }}
    {{ Form::select('state', $states, $store->postcode->state->id, array('class' => 'form-control', 'maxlength' => '255')) }}

    {{ Form::label('address', 'Address:') }}
    {{ Form::text('address', $store->address, array('class' => 'form-control', 'maxlength' => '255')) }}

    {{ Form::label('suburb', 'Suburb:') }}
    {{ Form::text('suburb', $store->postcode->name, array('class' => 'form-control', 'maxlength' => '255')) }}

    {{ Form::label('business_registration_number', 'Business Registration Number:') }}
    {{ Form::text('business_registration_number', $store->business_registration_number, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

    {{ Form::label('website', 'Website:') }}
    {{ Form::url('website', $store->website, array('class' => 'form-control', 'maxlength' => '255')) }}

    {{ Form::label('facebook_page_url', 'Facebook Page URL:') }}
    {{ Form::url('facebook_page_url', $store->facebook_page_url, array('class' => 'form-control', 'maxlength' => '255')) }}

    {{ Form::label('twitter_username', 'Twitter Username:') }}
    {{ Form::text('twitter_username', $store->twitter_username, array('class' => 'form-control', 'maxlength' => '255')) }}

    {{ Form::label('linkedin_page_url', 'Linkedin Page URL:') }}
    {{ Form::url('linkedin_page_url', $store->linkedin_page_url, array('class' => 'form-control', 'maxlength' => '255')) }}

    {{ Form::button('Save Store', array('type' => 'submit')) }}

{!! Form::close() !!}
@endsection
