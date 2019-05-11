@extends('layouts.app')

@section('title', '| '.$store_page->title)

@section('content')
<h2>{{ $store_page->title }}</h2>

{{ $store_page->content }}
@endsection
