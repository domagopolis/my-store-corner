@extends('main')

@section('title', '| View Trade')

@section('content')
<h2>{{ $trade->title }}</h2>
<ul>
	@foreach($trade->stores as $store)
	<li>
		<a href="{{ route('stores.show', ['country_slug' => $postcode->state->country->slug, 'state_slug' => $postcode->state->slug, 'postcode_slug' => $postcode->slug, 'trade_slug' => $trade->slug, 'store_slug' => $store->slug]) }}">{{ $store->name }}</a>
	</li>
	@endforeach
</ul>
@endsection