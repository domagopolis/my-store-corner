@extends('main')

@section('title', '| View Postcode')

@section('content')
<h2>{{ $postcode->name }}</h2>
<ul>
	@foreach($trades as $trade)
	<li><a href="{{ route('trades.show', ['country_slug' => $postcode->country->slug, 'state_slug' => $postcode->state->slug, 'postcode_slug' => $postcode->slug, 'trade_slug' => $trade->slug]) }}">{{ $trade->title }}</a></li>
	@endforeach
</ul>
@endsection