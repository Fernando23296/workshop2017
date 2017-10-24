@extends ('store.template1')
@section ('content')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Producto: {{ $products->nombre}}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
		</div>
	</div>
			{!!Form::model($products,['method'=>'PATCH','route'=>['store.products.update',$products->idproducto],'files'=>'true'])!!}
            {{Form::token()}}
            <div class="row">
            	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            		<div class="form-group">
	            	<label for="nombre">Nombre</label>
	            	<input type="text" name="nombre" required value="{{$products->nombre}}" class="form-control">
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
	            	<label for="imagen">Imagen</label>
	            	<input type="file" name="imagen" class="form-control" >
	            	@if (($products->imagen)!="")
	            	 	<img src="{{asset('imagenes/products/'.$products->imagen)}}">
	            	 @endif
	            	</div>
            	</div>
            	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            		<div class="form-group">
	            	<button class="btn btn-primary" type="submit">Guardar</button>
	            	<button class="btn btn-danger" type="reset">Cancelar</button>
            		</div>
            	</div>
            </div>
			{!!Form::close()!!}		
@endsection