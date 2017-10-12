@extends('store.template')

@section('content')
<div class="container">
	
	<div id="products">
		@foreach($products as $product)
			<div class="store white-panel">
				<h3>{{ $product->nombre }}</h3><hr>
				<img src="{{ $product -> imagen }}" width="200">
				<div class = "product-descripcion panel">
					<p>{{ $product -> descripcion }}</p>
					<p>Precio: ${{ $product->precio}}</p>
					<a href="#">ver productos</a>
					<a class="btn btn-primary" href="{{ route('product-detail', $product->slug) }}"><i class="fa fa-chevron-circle-right"></i> leer mas</a>
					</p>

				</div>
			</div>
		@endforeach
	</div>
</div>

@stop