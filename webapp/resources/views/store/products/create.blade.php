@extends ('store.template1')
@section ('content')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Producto</h3>
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

			{!!Form::open(array('url'=>'store/products','method'=>'POST','autocomplete'=>'off', 'files'=>'true'))!!}
            {{Form::token()}}
      <div class="container text-center">
            <div class="table-cart">
            <div class="row">
            	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            		<div class="form-group">
	            	<label for="nombre">Nombre</label>
	            	<input type="text" name="nombre" required value="{{old('nombre')}}" class="form-control" placeholder="Nombre...">
	            	</div>
            	</div>
            	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            		<div class="form-group">
            			<label>Local</label>
            			<select name="idlocal" class="form-control">
            				@foreach($stores as $stores)
            				<option value="{{$stores->idlocal}}">{{$stores->nombre}}</option>
            				@endforeach
            			</select>
            		</div>
            	</div>
            	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            		<div class="form-group">
	            	<label for="codigo">Codigo</label>
	            	<input type="text" name="codigo" required value="{{old('codigo')}}" class="form-control" placeholder="Codigo del producto">
	            	</div>
            	</div>
                  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="form-group">
                        <label for="slug">slug</label>
                        <input type="text" name="slug" required value="{{old('slug')}}" class="form-control" placeholder="slug del producto">
                        </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="form-group">
                        <label for="precio">precio</label>
                        <input type="text" name="precio" required value="{{old('precio')}}" class="form-control" placeholder="precio del producto">
                        </div>
                  </div>
            	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            		<div class="form-group">
	            	<label for="stock">Stock</label>
	            	<input type="text" name="stock" required value="{{old('stock')}}" class="form-control" placeholder="stock del producto">
	            	</div>
            	</div>
            	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            		<div class="form-group">
	            	<label for="descripcion">Descripcion</label>
	            	<input type="text" name="descripcion" value="{{old('descripcion')}}" class="form-control" placeholder="descripcion del producto">
	            	</div>
            	</div>
            	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            		<div class="form-group">
	            	<label for="imagen">Imagen</label>
	            	<input type="file" name="imagen" class="form-control" >
	            	</div>
            	</div>
            	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            		<div class="form-group">
	            	<button class="btn btn-primary" type="submit">Guardar</button>
	            	<button class="btn btn-danger" type="reset">Cancelar</button>
            		</div>
            	</div>
            </div>
            </div>
      </div>
            {!!Form::close()!!}		
@endsection