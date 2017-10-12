@extends('store.template')

@section('content')
	<h1>Detalle de la tienda</h1>

	<div class="store-block">
		<img src="{{$store->imagen}}" width="300">
	</div>

	<div class="store-block">
		<h3>{{$store->nombre}}</h3><hr>
		<div class="store-info">
			<p>{{$store->descripcion}}</p>
			<p>
				<a href="#">La quiero</a>
				</p>

		</div>
	</div>
	<p><a href="{{ route('home') }}">Regresar</a></p>

@stop

