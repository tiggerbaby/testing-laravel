@extends('master')

@section('content')
<div class="container"> 
<form>
 <h1>Products</h1>
 <a href="/products/create">Add new</a>
 <div class="form-group">
   <h2>What's hot right now</h2>
    {{-- @foreach ($products as $product) --}}
    @foreach ($mostPopularProducts as $product)
       <p>{{$product}}</p>
    @endforeach
  </div>
  <div class="form-group">
   
      
       <h2>Latest prducts</h2>
  {{-- @foreach ($popProds as $product) --}}
         @foreach($products as $product)
         {{-- <p>{{$product->name}} at {{$product->price}} 
         each and there are {{$product->stock}} on stock.</p>
         <p>{{$product->description}}</p>   --}}

         <p><a href="/products/{{ $product->id }}"><strong>{{$product->name}}</strong></a></p> 
         {{-- <p><strong>Price:</strong>{{$product->price}} </p>
         <p><strong>Stock:</strong>{{$product->stock}} </p>
         <p><strong>Description:</strong>{{$product->description}}</p>  --}}

    @endforeach
      </div> 
   
    </form>       
  
@stop
 </div> 
