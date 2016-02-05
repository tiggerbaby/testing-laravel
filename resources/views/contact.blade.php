@extends('master')

@section('content')
  <div class="container">
	<h1>Content Us</h1>

	<form action="/contentform" method="post">
		<div class="form-group">
			<label for="email">Email:</label>
			<input class="form-control" type="email" name="email" placeholder="batman@batcave.com">
		</div>

		<div class="form-group">
			<label for="message">Message</label>
			<textarea class="form-control" name="message" id="message" cols="30" row="10"></textarea>
		</div>

	<input type="submit" name="contact" value="Send">

	</form>
@endsection
</div>

