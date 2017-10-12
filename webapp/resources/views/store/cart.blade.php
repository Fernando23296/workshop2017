@extends('store.template')
@section('content')
	<div class="container text-center">
		<div class="page-header">
		<h1><i class="fa fa-shopping-cart"></i>Carrito de compras</h1>
		</div>

		<div class="table-cart"> 
		@if(count($cart))
		<p>

		<a href="{{route('cart-trash')}}" class="btn btn-danger">
			Vaciar carrito <i class="fa fa-trash"></i>
		</a>


		</p>

		<div class="table-responsive">
			<table class="table table-striped table-hover table-bordered">
				<thead>
					<tr>
						<th>Imagen</th>
						<th>Producto</th>
						<th>Precio</th>
						<th>Cantidad</th>
						<th>Subtotal</th>
						<th>Quitar</th>
					</tr>
				</thead>
				<tbody>
					@foreach($cart as $item)
					<tr>
						<td><img src="{{$item->imagen}}"></td>
						<td>{{$item->nombre}}</td>
						<td>Bs.{{number_format($item->precio,2)}}</td>
						<td>{{$item->quantity}}</td>
						<td>Bs.{{number_format($item->precio * $item->quantity,2)}}</td>
						<td>
								<a href="{{route('cart-delete', $item->slug)}}" class="btn btn-danger">
								<i class="fa fa-remove"></i>
								</a>

						</td>
					</tr>
					@endforeach
				</tbody>
				</table>
		</div>
		@else
			<h3><span class="label label-warning">No hay productos en el carrito</span></h3>

		@endif
		<hr>
		<p>
			<a href="{{route('home')}}" class="btn btn-primary">
				<i class="fa fa-chevron-circle-left"></i> seguir comprando
			</a>

			<a href="#" class="btn btn-primary">
			continuar<i class="fa fa-chevron-circle-right"></i> 
			</a>

		</p>
		</div>
	</div>

	@stop