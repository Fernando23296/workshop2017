@extends('store.template')

@section('content')
<div class="container text-center">
	<div class="top-brands">
		
		<h1>Locales</h1>
			<div class="grid_3 grid_5">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul  class="nav nav-tabs" role="tablist">
						<li><a href="{{route('casa')}}">Promociones</a></li>
						<li role="presentation" class="active"><a href="#locales" id="locales-tab" role="tab" data-toggle="tab" aria-controls="locales" aria-expanded="true">locales</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<!--AQUI VAN LAS PROMOCIONES--> 
						<div role="tabpanel" class="tab-pane fade in active" id="locales" aria-labelledby="promo-tab">
							<div class="agile-tp">
								<h2>Locales Disponibles</h2>
							</div>
							
							<div class="container text-center">
		
								<div id="products1">
									@foreach($stores as $store)
										<div class="locales white-panel1">
											<h3>{{ $store->nombre }}</h3><hr>
											<img src="{{asset( $store->imagen )}}" width="200">
											<div class = "store-info panel">
												<p>{{ $store -> descripcion }}</p>
													<h3>
													@if($store->slug == 'Activo')
													<span class="label label-success">{{$store->slug}}</span>
													</h3>
													<a class="btn btn-primary" href="{{ route('local-producto', $store->nombre)}}"><i class="fa fa-chevron-circle-right"></i> Ver Productos</a>
													@else
													<h2><span class="label label-danger">{{$store->slug}}</span></h2>
													@endif
												
												
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

















