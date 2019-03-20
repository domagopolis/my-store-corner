@extends('layouts.app')

@section('title', '| View State')
@section('subheading', ' - '.$state->name)

@section('content')
<h2>{{ $state->name }}</h2>

<div id="town_listing">
    @foreach($state->postcodes as $key=>$postcode)
    @if($key === 0 OR $key == ceil( sizeof( $state->postcodes )/2 ))
    <div class="tab-column">
    @endif
        <p>
            <a href="{{ route('postcodes.show', ['country_slug' => $state->country->slug, 'state_slug' => $state->slug, 'postcode_slug' => $postcode->slug]) }}">{{ $postcode->name }}</a>
        </p>
    @if($key == ceil( sizeof( $state->postcodes )/2 )-1 OR $key == sizeof( $state->postcodes )-1)
    </div>
    @endif
    @endforeach
</div>

<h2>Find Businesses in {{ $state->name }}</h2>

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
            <p class="address">{{ $store->postcode->name }}</p>
        </div>
    </li>
    @endforeach
</ul>
@endsection
