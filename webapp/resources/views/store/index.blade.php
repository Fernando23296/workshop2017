@extends('store.template')

@section('content')

	<div class="stores">
		@foreach($stores as $store)
			<div class="store">
				<h3>{{ $store->nombre }}</h3>
				<img src="{{ $store -> imagen }}" width="200">
				<div class = "store-descripcion">
					<p>{{ $store -> descripcion }}</p>
					<p> 
					<a href="#">ver productos</a>
					<a href="#">leer mas</a>
					</p>

			</div>

		@endforeach
	</div>

@stop