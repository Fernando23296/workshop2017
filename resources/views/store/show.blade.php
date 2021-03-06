@extends('store.template1')

@section('content')

<div class="container text-center">
	<div class="page-header">
	
		<h1><i class="fa fa-shopping-cart"></i>Detalle del producto</h1>
	</div>

	<div class="row">

		<div class="col-md-6">
			<div class="product-block">
				<img src= "{{asset( 'imagenes/products/'.$product->imagen )}}"> 

			</div>
		</div>
		<div class="col-md-6">
			<div class="product-block">
				<h3>{{ $product->nombre }}</h3><hr>
				<div class="product-info panel">
					<p>{{ $product->descripcion }}</p>
					<h3><span class="label label-success"> Precio: Bs. {{ $product->precio }}</span></h3>
					<p>
					<a class="btn btn-warning btn-clock" href="{{ route('cart-add', $product->slug)}}">
						La quiero <i class="fa fa-cart-plus fa-2x"></i>
						</a>
					</p>

				</div>
			</div>
		</div>
	</div><hr>
	<p><a class="btn btn-primary" href="{{ route('home') }}"> <i class="fa fa-chevron-circle-left"></i>Regresar</a></p>
</div>

@stop

