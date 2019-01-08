@extends('main')

@section('title', '| Search')

@section('content')
<div id="sub-content">
<h2>Search</h2>
{!! Form::open(['method' => 'get']) !!}
	{{ Form::label('query', 'Search:') }}
	{{ Form::search('query', null, ['class' => 'form-control']) }}
	{{ Form::button('Search', ['type' => 'submit']) }}
{!! Form::close() !!}

@if($query)
<h3>Results for <?php echo $query; ?></h3>
@endif
</div>
@if($query)
<div id="right-sidebar">
	<h2>Filter</h2>
</div>
@endif
@endsection