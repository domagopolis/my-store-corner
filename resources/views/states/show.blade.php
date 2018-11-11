@extends('main')

@section('title', '| View State')
@section('subheading', ' - '.$state->name)

@section('content')
<h2>{{ $state->name }}</h2>

<ul>
	@foreach($state->postcodes as $postcode)
	<li><a href="{{ route('postcodes.show', ['country_slug' => $state->country->slug, 'state_slug' => $state->slug, 'postcode_slug' => $postcode->slug]) }}">{{ $postcode->name }}</a></li>
	@endforeach
</ul>
@endsection