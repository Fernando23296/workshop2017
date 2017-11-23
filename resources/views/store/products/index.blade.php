@extends('store.template1')
@section('content')

 <div class="container text-center">
		 <div class="page-header">
		  <h1><i class="fa fa-shopping-cart"></i> Productos</h1>
		</div>
		 <div class="table-cart">
		 	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		 		<h3>Listado de Productos <a href="products/create"><button class="btn btn-success">nuevo</button></a></h3>
		 		
		 	</div>
		 	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		 		@foreach ($products as $prod)
		 		<h3>Estado del local
		 			@if($prod->slug =='Activo')
		 			<a href="#"><button class="btn btn-success">activo</button></a>
		 			@else
		 			<a href="#"><button class="btn btn-danger">inactivo</button></a>
		 			@endif
		 		</h3>
		 		@endforeach
		 	</div>

		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-condensed table-hover">
						<thead>
							<th>Id</th>
							<th>Nombre</th>
							<th>Codigo</th>
							<th>Local</th>
							<th>precio</th>
							<th>Stock</th>
							<th>Imagen</th>
							<th>Estado</th>
							<th>Opciones</th>
						</thead> 
							@foreach ($products as $prods)
							<tr>
								<td>{{$prods->idproducto}}</td>	
								<td>{{$prods->nombre}}</td>
								<td>{{$prods->codigo}}</td>
								<td>{{$prods->stores}}</td>
								<td>{{$prods->precio}}</td>
								<td>{{$prods->stock}}</td>
								<td>
									<img src="{{asset ('imagenes/products/'.$prods->imagen)}}" alt="{{$prods->idproducto}}" height="100px" width="100px" class="img-thumbnail"></img>
								</td>
								<td>{{$prods->slug}}</td>
								<td>
								<a href="{{route('edit',$prods->idproducto)}}"><button class="btn btn-info">Editar</button></a>
								<a href="" data-target="#" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
								</td>
							</tr>
							
							@endforeach
						
					</table>
				</div>
			{{$products->render()}}
			</div>
		   </div>
		 </div>
</div>
@endsection