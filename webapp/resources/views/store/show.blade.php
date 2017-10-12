@extends('store.template')

@section('content')
	<h1>Detalle del producto/h1>

	<div class="product-block">
		<img src="{{$product->imagen}}" width="300">
	</div>

	<div class="product-block">
		<h3>{{ $product->nombre }}</h3><hr>
		<div class="product-info">
			<p>{{ $product->descripcion }}</p>
			<p> Precio: {{ $product->precio }}</p>
			<p>
				<a href="#">La quiero</a>
				</p>

		</div>
	</div>
	<p><a href="{{ route('home') }}">Regresar</a></p>

@stop

