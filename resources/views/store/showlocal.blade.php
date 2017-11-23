@extends('store.template1')

@section('content')

<div class="container text-center">
	<div class="page-header">
	
		<h1><i class="fa fa-shopping-cart"></i>Detalle de los Locales</h1>
	</div>

	<div class="row">

		
		
			
				<div class="container text-center">
		
							@foreach($stores as $store)
								<div class="row" >

									<div class="col-md-6">
										<div class="product-block">
											<img src="{{asset( $store->imagen )}}" >

										</div>
									</div>
									<div class="col-md-6">
										<div class="product-block">
											<h3>{{ $store->nombre }}</h3><hr>
											<div class="product-info panel">
												<p>{{ $store -> descripcion }}</p>
												<h3>
													@if($store->slug == 'Activo')
													<span class="label label-success">{{$store->slug}}</span>
													</h3>
													<a class="btn btn-primary" name="searchText" href="{{ route('store-products', $store->nombre)}}"><i class="fa fa-chevron-circle-right"></i>DETALLE LOCAL  </a>
													@else
													<h2><span class="label label-danger">{{$store->slug}}</span></h2>
													<a class="btn btn-primary" href="{{ route('store-products', $store->nombre)}}"><i class="fa fa-chevron-circle-right"> </i>DETALLE LOCAL  </a>
													@endif
											</div>
										</div>
									</div>
								</div><hr>
							@endforeach
						</div>
			
		
	</div>
	<p><a class="btn btn-primary" href="{{ route('home') }}"> <i class="fa fa-chevron-circle-left"></i>Regresar</a></p>
</div>

@stop

