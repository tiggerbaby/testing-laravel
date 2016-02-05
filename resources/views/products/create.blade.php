@extends('master')

@section('content')
<div class="container">
<h1> Add new product</h1>
  <form action="/products/store" method="post" class="form-horizontal">
  	{!! csrf_field() !!}

	<div class="form-group">
		<label for="name">Name:</label>
		<input type="text" value="{{ old('name') }}"id="name" name="name" placeholder="Smart Watch">
		@if($errors->first('name'))
			<p class="alert alert-danger" role="alert">{{ $errors->first('name') }}</p>
		@endif
	</div>  

	<div class="form-group">
		<label for="price">Price:</label>
		<input type="number" step=".01" value="{{ old('price') }}" id="price" name="price">
		@if($errors->first('price'))
			<p class="alert alert-danger" role="alert">{{ $errors->first('price') }}</p>
		@endif
	</div>


	<div class="form-group">
		<label for="stock">Stock:</label>
		<input type="tnumber" value="{{ old('stock') }}" id="stock" name="stock">
	</div>
  	
  	<div class="form-group">
		<label for="description">Description:</label>
		<textarea class="form-control" name="description" id="description" name="description">{{ old('description') }}</textarea>
		@if($errors->first('description'))
			<p class="alert alert-danger" role="alert">{{ $errors->first('description') }}</p>
		@endif
	</div>

	<input class="button" type="submit" vaule="Add new product">
  </form>
@endsection
</div>