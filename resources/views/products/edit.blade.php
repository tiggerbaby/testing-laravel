@extends('master')

@section('content')
<h1>Edit: {{ $product->name }}</h1>

{{-- composer require laravelcollective/html --}}
{{-- shaoting.wu$ php artisan config:cache --}}

{{ Form::open() }}

{{ Form::model($product)}}
{{ Form::text('name')}}
{{ Form::submit()}}

{{ Form::close()}}



@endsection