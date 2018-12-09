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

<h2>Find Businesses in your area</h2>

<ul class="content-navigation-store">
	@foreach($stores as $store)
	<li>
		<div class="container">
			@if($store->trades->first()->icon)
			<img src="{{ asset('images/icons/'.$store->trades->first()->icon.'.png') }}" alt=""/>
			@else
			<img src="{{ asset('images/icons/generic-icon.png') }}" alt=""/>
			@endif
			<h3>{{ $store->trades->first()->title }}</h3>
			<p class="store-name"><a href="{{ route('stores.show', ['country_slug' => $store->postcode->state->country->slug, 'state_slug' => $store->postcode->state->slug, 'postcode_slug' => $store->postcode->slug, 'trade_slug' => $store->trades->first()->slug, 'store_slug' => $store->slug]) }}">{{ $store->name }}</a></p>
			<p class="address">{{ $store->postcode->state->name }}</p>
		</div>
	</li>
	@endforeach
</ul>
@endsection