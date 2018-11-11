@extends('main')

@section('title', '| View Country')
@section('subheading', ' - '.$country->name)

@section('content')
<h2>{{ $country->name }}</h2>

<ul class="content-navigation content-navigation-icon">
	@foreach($country->states as $state)
	<li><a href="{{ route('states.show', ['country_slug' => $country->slug, 'state_slug' => $state->slug]) }}">{{ $state->name }}</a></li>
	@endforeach
</ul>
@endsection