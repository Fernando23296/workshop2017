@extends('store.template')

@section('content')
<div class="container text-center">
	<div class="top-brands">
		
		<h1>Ofertas de la semana</h1>
			<div class="grid_3 grid_5">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul  class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#promo" id="promo-tab" role="tab" data-toggle="tab" aria-controls="promo" aria-expanded="true">Promociones</a></li>
						<li><a href="{{route('local')}}">Locales</a></li>
						
					</ul>
					<div id="myTabContent" class="tab-content">
						<!--AQUI VAN LAS PROMOCIONES--> 
						<div role="tabpanel" class="tab-pane fade in active" id="promo" aria-labelledby="promo-tab">
							<div class="agile-tp">
								<h2>Promociones de la semana</h2>
							</div>
							
							<div class="container text-center">
		
								<div id="products">
									@foreach($products as $product)
										<div class="product white-panel">
											<h3>{{ $product->nombre }}</h3><hr>
											<img src="{{asset( 'imagenes/products/'.$product->imagen )}}" width="200">
											<div class = "product-info panel">
												<p>{{ $product -> descripcion }}</p>
												<h3>{{ $product -> stores }}</h3>
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
						</div>
					</div>

				</div>
			</div>
		
	</div>
	</div>
@stop

















