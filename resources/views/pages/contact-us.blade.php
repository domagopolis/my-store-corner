@extends('main')

@section('title', '| Contact Us')

@section('content')
<h2>Contact Us</h2>
<form action="{{ url('contact') }}" method="POST">
	{{ csrf_field() }}
	<div class="form-group">
		<label name="email" for="email">Email:</label>
		<input id="email" name="email" class="form-control">
	</div>

	<div class="form-group">
		<label name="subject" for="subject">Subject:</label>
		<input id="subject" name="subject" class="form-control">
	</div>

	<div class="form-group">
		<label name="message" for="message">Message:</label>
		<textarea id="message" name="message"></textarea>
	</div>
	<button type="submit" name="Send Message">Send Message</button>
</form>
@endsection