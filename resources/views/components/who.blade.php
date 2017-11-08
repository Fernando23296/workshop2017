<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
<ul class="list-group">
@if (Auth::guard('web')->check())
	  <li class="list-group-item"><p class="text-sucess">
		Has ingresado como <strong> USUARIO </strong>
	</p></li>
@else
	  <li class="list-group-item"><p class="text-danger">
		No has ingresado como <strong> USUARIO</strong>
	</p></li>

@endif

@if (Auth::guard('admin')->check())
	  <li class="list-group-item"><p class="text-sucess">
		Has ingresado como <strong> ADMINISTRADOR </strong>
	</p></li>

</ul>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">Menu Administrador</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{ url('/store/products') }}"><strong>Añadir Productos</strong></a></li>
      <li><a href="{{ url('/register') }}"><strong>Añadir Usuarios</strong></a></li>
    </ul>
  </div>
</nav>
                  
@else
	<li class="list-group-item"><p class="text-danger">
		No has ingresado <strong> ADMINISTRADOR</strong>
	</p></li>


@endif
