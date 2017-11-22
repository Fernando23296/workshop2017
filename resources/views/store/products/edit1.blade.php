@extends('store.template1')

@section('content')
	<div class="container">
		@if ($errors->any())
			@foreach ($errors->all() as $error)
				<div class="alert alert-dismissible alert-danger">
				  <button type="button" class="close" data-dismiss="alert">×</button>
				  <strong>Oh snap!</strong>{{ $error }}
				</div>
			@endforeach
		@endif

		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Editar producto</h3>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" action="{{ route('update',$products->idproducto) }}" method="POST">
					{{ csrf_field() }}
					  <fieldset>
					  	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		            		<div class="form-group">
			            	<label for="nombre">Nombre</label>
			            	<input type="text" name="nombre" required value="{{$products->nombre}}" class="form-control">
			            	</div>
		            	</div>
		            	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		            		<div class="form-group">
			            	<label for="slug">slug</label>
			            	<input type="text" name="slug" required value="{{$products->slug}}" class="form-control">
			            	</div>
		            	</div>
		            	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		            		<div class="form-group">
			            	<label for="precio">precio</label>
			            	<input type="text" name="precio" required value="{{$products->precio}}" class="form-control">
			            	</div>
		            	</div>
		            	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		            		<div class="form-group">
		            			<label>local</label>
		            			<select name="idlocal" class="form-control">
		            				@foreach($stores as $stores)
		            				@if ($stores->idlocal==$products->idlocal)
		            				<option value="{{$stores->idlocal}}" selected>{{$stores->nombre}}</option>
		            				@else
		            				<option value="{{$stores->idlocal}}">{{$stores->nombre}}</option>
		            				@endif
		            				@endforeach
		            			</select>
		            		</div>
		            	</div>
		            	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		            		<div class="form-group">
			            	<label for="codigo">Codigo</label>
			            	<input type="text" name="codigo" required value="{{$products->codigo}}" class="form-control">
			            	</div>
		            	</div>
		            	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		            		<div class="form-group">
			            	<label for="stock">Stock</label>
			            	<input type="text" name="stock" required value="{{$products->stock}}" class="form-control">
			            	</div>
		            	</div>
		            	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		            		<div class="form-group">
			            	<label for="descripcion">Descripcion</label>
			            	<input type="text" name="descripcion" value="{{$products->descripcion}}" class="form-control" placeholder="descripcion del products">
			            	</div>
		            	</div>
		            	
		            	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		            		<div class="form-group">
			            	<button class="btn btn-primary" type="submit">Guardar</button>
			            	<button class="btn btn-danger" type="reset">Cancelar</button>
		            		</div>
		            	</div>
					  	



					  </fieldset>
				</form>
		 </div>
		</div>
	</div>
@endsection