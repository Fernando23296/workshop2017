@extends('store.template1')
@section('content')
	<div class="container text-center">
		<div id="products">
			@foreach($products as $product)
				<div class="product white-panel">
					<h3>{{ $product->nombre }}</h3><hr>
					<img src="{{asset( 'imagenes/products/'.$product->imagen )}}" width="200">
					<div class = "product-info panel">
						<p>{{ $product -> descripcion }}</p>
						<h3><span class="label label-success">Precio: ${{ $product->precio}}</span></h3>
						<p>
						<a class="btn btn-warning" href="{{route('cart-add', $product->slug)}}"><i class="fa fa-cart-plus"></i>Comprar</a>
						<a class="btn btn-primary" href="{{ route('product-detail', $product->slug) }}"><i class="fa fa-chevron-circle-right"></i> leer mas</a>
						</p>

					</div>
				</div>
			@endforeach
		</div>
	</div>
@stop
