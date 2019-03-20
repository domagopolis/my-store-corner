@extends('layouts.app')

@section('title', '| View Postcode')

@section('content')
<h2>{{ $postcode->name }}</h2>
<ul>
    @foreach($trades as $trade)
    <li>
        <a href="{{ route('trades.show', ['country_slug' => $postcode->state->country->slug, 'state_slug' => $postcode->state->slug, 'postcode_slug' => $postcode->slug, 'trade_slug' => $trade->slug]) }}">{{ $trade->title }}</a>
    </li>
    @endforeach
</ul>

<h2>Find Businesses in {{ $postcode->name }}</h2>

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
            <p class="store-name">
                <a href="{{ route('stores.show', ['country_slug' => $store->postcode->state->country->slug, 'state_slug' => $store->postcode->state->slug, 'postcode_slug' => $store->postcode->slug, 'trade_slug' => $store->trades->first()->slug, 'store_slug' => $store->slug]) }}">{{ $store->name }}</a>
            </p>
            <p class="address">{{ $store->address }}</p>
        </div>
    </li>
    @endforeach
</ul>
@endsection
