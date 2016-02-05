@extends('master')

@section('content')

<div class="container">
	<h1>{{$product->name}}</h1>
	 <a href="/products/{{$product->id}}/edit">Edit this product</a>
	<p>{{$product->description}}</p>

  @if($product->stock)
  	<?php $stock = $product->stock ?>
  @else
    <?php $stock = "Out of Stock" ?>
  @endif
	<ul>
		<li>Oruce: ${{$product->price}}</li>
		<li>Stock:{{$stock}}</li>
	</ul>
	
</div>

@endsection