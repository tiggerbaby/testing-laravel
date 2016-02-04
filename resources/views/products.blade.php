@extends('master')

@section('content')
	<h1>Products</h1>
    
     <h2>Latest prducts</h2>
{{-- @foreach ($popProds as $product) --}}
       @foreach($products as $product)
       <p>{{$product->name}} at {{$product->price}} 
       each and there are {{$product->stock}} on stock.</p>
    @endforeach
    
   <h2>What's hot right now</h2>
    {{-- @foreach ($products as $product) --}}
    @foreach ($mostPopularProducts as $product)
       <p>{{$product}}</p>
    @endforeach
@stop
